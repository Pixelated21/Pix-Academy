<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function index(){
        return view('Registration_Login.registration');
    }

    public function registerNewUser(Request $request){


        $validate = $request->validate([
            'first_nm' => ['required','string','alpha','min:2'],
            'last_nm' => ['required','string','alpha','min:2'],
            'email_addr' => ['required','email','unique:users'],
            'password' => ['required','alpha_dash','min:5','confirmed'],
            'password_confirmation' => ['required','alpha_dash','min:5'],
        ]);

//        dd($validate);

        $student = new Student();
        $student->first_nm = strtoupper($request->get('first_nm'));
        $student->last_nm = strtoupper($request->get('last_nm'));
        $student->gender = $request->get('gender');
        $student->dob = $request->get('dob');
//        dd($student);
        $user = new User();
        $user->email_addr = strtoupper($request->get('email_addr'));
        $user->password = Hash::make($request->get('password'));
        $user->push();
        $user->student()->save($student);



        if(Auth::attempt($validate)){
            return redirect('/home');
        }
    }
}
