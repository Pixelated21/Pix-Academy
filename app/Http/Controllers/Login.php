<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index()
    {
//
        return view("Registration_Login.login");
    }

    public function loginUser(Request $request)
    {
        $validation = $request->validate([
            'email_addr' => ['required','email'],
            'password' => ['required','min:2'],
        ]);

        if (Auth::attempt($validation)) {
            $User = User::where('email_addr','=',$request->email_addr)->get()->toArray();
//            dd($User);

            if ($User[0]['account_type'] === 'user') {
                return redirect(route("User-Home"));
            }
            elseif ($User[0]['account_type'] === 'admin') {
                return redirect(route("Admin-Home"));
            }

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
