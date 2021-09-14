<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index()
    {
        return view("Registration_Login.login");
    }
//    TODO remember me token

    public function loginUser(Request $request)
    {
        $validation = $request->validate([
            'email' => ['required','email'],
            'password' => ['required','min:2'],
        ]);

        if (Auth::attempt($validation)) {
            return redirect('/home');

        }
        return back()->withErrors([
            'email' => 'Username or Password Incorrect.'
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
