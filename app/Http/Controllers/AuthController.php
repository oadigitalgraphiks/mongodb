<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class AuthController extends Controller
{

    /*
     * Write code on Method
     */
    public function login()
    {

        
        if(Auth::check()){
            return redirect()->route('admin.dashboard');
        }


        return view('login');
    }


    /*
     * Write code on Method
     */
    public function login_submit(Request $request)
    {
        if(Auth::check()){
            return redirect()->route('admin.dashboard');
        }

        if($request->has('email') == false && $request->has('password') == false){
            return back()->with('message','Email Or Password Wrong');
        }

   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->route('admin.dashboard');
        }else{

            return back()->with('message','Email Or Password Wrong');
        }
  
    }

    /*
     * Write code on Method
     */
    public function register()
    {

        if(Auth::check()){
            return redirect()->route('admin.dashboard');
        }


        return view('register');
    }


     /*
     * Write code on Method
     */
    public function register_submit(Request $request)
    {
        if(Auth::check()){
            return redirect()->route('admin.dashboard');
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        if($user){
            return redirect()->route('login');
        }else{
            return back()->with('message','Failed To Register');
        }


    }


      /*
     * Write code on Method
     */
    public function logout()
    {

        if(Auth::check() == false){
            return redirect()->route('admin.dashboard');
        }

        Auth::logout();
        return redirect()->route('login');

    }
    


   
}