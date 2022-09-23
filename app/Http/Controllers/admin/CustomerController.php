<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use Hash;

class CustomerController extends Controller
{

    /*
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search = null;
        $users = User::where('type', 'customer')->orderBy('created_at', 'desc');
        if ($request->has('search') && $request->search != null){
            $sort_search = $request->search;
            $users->where(function ($q) use ($sort_search){
                $q->where('name', 'like', '%'.$sort_search.'%')->orWhere('email', 'like', '%'.$sort_search.'%');
            });
        }
        $users = $users->paginate(15);
        return view('admin.customers.index', compact('users', 'sort_search'));
    }

    /*
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.customers.create');
    }


    /*
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|string|max:100',
            'email' => 'required|unique:users,email',
        ]);

        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->name),
            'type' => 'customer',
            'active' => '0'
        ];

        $user = User::create($data);
        return redirect()->route('admin.customers.index')->with('success', translate('Customer Add Successfully'));
    }


    /*
     * Show the form for creating a new resource.
     */
    public function edit($id)
    {
        $customer = User::find($id);
        return view('admin.customers.edit',compact('customer'));
    }


     /*
     * Show the form for creating a new resource.
     */
    public function profile($id)
    {

        $customer = User::find($id);
        return view('admin.customers.profile',compact('customer'));
    }


    /*
     * Show the form for creating a new resource.
     */
    public function update(Request $request,$id)
    {

        $customer = User::find($id);
        $request->validate([
            'name' => 'required|min:5|string|max:100',
            'email' => 'required|unique:users,email'.$customer->id,
        ]);

        if($request->has('password') && $request->password != ''){
            $request->validate([
                'password'  => 'required|min:6|max:50',
            ]);
        }

        $customer->name = $request->name;
        $customer->email = $request->email;
        if($request->has('password') && $request->password != '' ){
           $customer->password = Hash::make($request->password);
        }
        $customer->save();
       
        return back()->with('success', translate('Customer Updated'));

    }

   

    /*
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        User::destroy($id);
        return redirect()->route('admin.customers.index')->with('danger', translate('Customer has been deleted successfully'));
    }



    public function bulk_customer_delete(Request $request) {
        if($request->id) {
            foreach ($request->id as $customer_id) {
                $this->destroy($customer_id);
            }
        }

        return 1;
    }


    public function login($id)
    {

        $user = User::findOrFail(decrypt($id));
        auth()->login($user, true);
        return redirect()->route('dashboard');
    }


    public function ban($id) {
        $user = User::findOrFail(decrypt($id));

        if($user->banned == 1) {
            $user->banned = 0;
        } else {
            $user->banned = 1;
        }

        $user->save();
        return back();
    }


}
