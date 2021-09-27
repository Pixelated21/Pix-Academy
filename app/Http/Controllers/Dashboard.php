<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index(){
        $student = User::with("student")->where("user_id","=",Auth::user()->user_id)->get()->toArray();

        $appWithStudent = Student::with(['course_application'])->where("user_id","=",Auth::user()->user_id)->get()->toArray();

        $applications = $appWithStudent[0]['course_application'];

//        dd($applications);

//        dd($applications);

        if (empty($applications)) {
            return view("User.Dashboard",compact("student"));
        }
        return view("User.Dashboard",compact("student","applications"));
    }
}
