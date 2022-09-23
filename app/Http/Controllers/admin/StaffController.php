<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class StaffController extends Controller
{

    /*
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search = null;
        $users = User::where('type', 'staff')->orderBy('created_at', 'desc');
        if ($request->has('search') && $request->search != null){
            $sort_search = $request->search;
            $users->where(function ($q) use ($sort_search){
                $q->where('name', 'like', '%'.$sort_search.'%')->orWhere('email', 'like', '%'.$sort_search.'%');
            });
        }
        $users = $users->paginate(15);
        return view('admin.staff.index', compact('users', 'sort_search'));
    }

    /*
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.staff.create');
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
            'type' => 'staff',
            'active' => '0'
        ];

        $user = User::create($data);
        return redirect()->route('admin.staff.index')->with('success', translate('Vendor Add Successfully'));
    }


    /*
     * Show the form for creating a new resource.
     */
    public function edit($id)
    {
        $vendor = User::find($id);
        return view('admin.staff.edit',compact('vendor'));
    }


 


    /*
     * Show the form for creating a new resource.
     */
    public function update(Request $request,$id)
    {

        $vendor = User::find($id);
        $request->validate([
            'name' => 'required|min:5|string|max:100',
            'email' => 'required|unique:users,email'.$vendor->id,
        ]);

        if($request->has('password') && $request->password != ''){
            $request->validate([
                'password'  => 'required|min:6|max:50',
            ]);
        }

        $vendor->name = $request->name;
        $vendor->email = $request->email;
        if($request->has('password') && $request->password != '' ){
           $vendor->password = Hash::make($request->password);
        }
        $vendor->save();
       
        return back()->with('success', translate('Staff Updated'));

    }

   

    /*
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.staff.index')->with('danger', translate('Staff has been deleted successfully'));
    }


    public function login($id)
    {
        $user = User::findOrFail(decrypt($id));
        auth()->login($user, true);
        return redirect()->route('dashboard');
    }


    public function status($id) {

        $user = User::findOrFail($id);
        if($user->status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        $user->save();
        return back();
    }


}
