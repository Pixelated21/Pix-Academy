<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Mail;

class Contact extends Controller
{
    public function index(){
        return view('User.contact');

    }
    public function sendMail(Request $request){
        Mail::to($request->email)->send(new ContactUsMail());

        return back()->with('message','Mail Sent');
    }
}
