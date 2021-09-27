<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Course;

class Homepage extends Controller
{
    public function index(){

        $topCourses = Course::orderByDesc('views')->take(3)->get();
        $newCourses = Course::orderBy('created_at')->take(3)->get();

        return view('User.index')
            ->with(compact("topCourses"))
            ->with(compact("newCourses"));

    }
}
