<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Course;

class Courses extends Controller
{
    public function index()
    {
        $courses = Course::orderBy("amt_enrolled","desc")->get();

        return view("User.courses")
            ->with(compact("courses"));
    }


}
