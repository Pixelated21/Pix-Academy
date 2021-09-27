<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Course_Application;
use App\Models\Institution;
use App\Models\Student;
use App\Models\User_Activity;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $courseCount = Course::count();
        $studentCount = Student::count();
        $institutionCount = Institution::count();
        $usersActivityCard = User_Activity::with("student")->orderBy("created_at","desc")->get()->take(7)->toArray();


        $courses = Course::with("course_application")->where("status","=","open")->orderBy("amt_enrolled","desc")->get()->toArray();

        $applicants = Course_Application::with("student")->orderBy("status","desc")->get()->toArray();

        $coursesInfo = Course::orderBy("status","desc")->orderBy("amt_enrolled","desc")->get()->toArray();

        $institutionsInfo = Institution::with("course")->get()->toArray();

        $usersActivity = User_Activity::with("student")->orderBy("created_at","desc")->get()->toArray();

//        dd($usersActivity);
//        dd($institutionsInfo);
//        dd($coursesInfo);
        dd($applicants);
//        dd($courses);




        return view('admin.index',compact("studentCount",
                                        "courseCount","institutionCount",
                                        "courses","applicants","coursesInfo",
                                        "institutionsInfo","usersActivity",
                                            "usersActivityCard"));


    }

    public function viewApplicant($id){
        dd($id);
    }

    public function addInstitution(Request $request){

        Institution::create([
            'institution_nm' => $request->inst_nm,
            'telephone_nbr' => $request->inst_tele_nbr,
            'address' => $request->inst_addr
        ]);

        return redirect()->back()->with("message","Institution Added Successfully");

    }

}
