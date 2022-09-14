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
            return redirect()->route('home');
        }


        return view('login');
    }


    /*
     * Write code on Method
     */
    public function login_submit(Request $request)
    {
        if(Auth::check()){
            return redirect()->route('home');
        }

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }else{
            return back();
        }
  
    }

    /*
     * Write code on Method
     */
    public function register()
    {
        if(Auth::check()){
            return redirect()->route('home');
        }

        return view('register');
    }


     /*
     * Write code on Method
     */
    public function register_submit(Request $request)
    {
        if(Auth::check()){
            return redirect()->route('home');
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
        }


    }


      /*
     * Write code on Method
     */
    public function logout()
    {

        if(Auth::check() == false){
            return redirect()->route('home');
        }

        Auth::logout();
        return redirect()->route('login');

    }
    


   
}