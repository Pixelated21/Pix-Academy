<?php

namespace App\Http\Controllers;

use App\Models\Course;
use DB;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index(){

        $courses = Course::all();

        $coursesCount = DB::table("courses")->count();

        $Students = DB::table("courses")->select("amount_enrolled")->get();

//        dd($courses);

        $totalStudents = 0;

        foreach ($Students as $total){
            $totalStudents += $total->amount_enrolled;
        }



        return view('admin.index',["courses_capacity" => $courses->take(4),"courses_count" => $coursesCount,'total_students' => $totalStudents]);


    }

}
