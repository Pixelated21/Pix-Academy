<?php

namespace App\Http\Controllers;

use App\Models\Course_Application;
use App\Models\Institution;
use App\Models\Student;
use App\Models\User;
use App\Models\User_Activity;
use Auth;
use Illuminate\Http\Request;


class Course extends Controller
{
    public function singleCourseView(int $course_id){

//        dd($course_id);

        //Add View

        $viewsUpdate = \App\Models\Course::find($course_id)->update([
           'views' =>  ++ \App\Models\Course::find($course_id)->views
        ]);

        $course = \App\Models\Course::with("institution")->where("course_id","=",$course_id)->get()->toArray();

//        dd($userApplication);
//        dd($course[0]);

        if (Auth::check()) {
            $student = Student::with('course_application')->where("user_id","=", \Illuminate\Support\Facades\Auth::user()->user_id)->get()->toArray();


            foreach ($student[0]["course_application"] as $courseStatusDetails) {


                if ($courseStatusDetails["course_id"] === $course_id) {

                    $courseStatusDetail = [];

                    if ($courseStatusDetails["status"] === "Pending") {
                        $courseStatusDetail[] = ['link' => '/dashboard#header',"bg-color" => "bg-orange-700", 'hover-bg' => 'bg-orange-500', "message" => "Your Admission Is Being Reviewed"];
                    } elseif ($courseStatusDetails["status"] === "Rejected") {
                        $courseStatusDetail[] = ['link' => '/dashboard#header',"bg-color" => "bg-red-700", 'hover-bg' => 'bg-red-500', "message" => "Your Admission Has Been Rejected"];
                    } elseif ($courseStatusDetails["status"] === "Accepted") {

                        if ($courseStatusDetails["payment_status"] === "Not Paid") {
                            $courseStatusDetail[] = ['link' => '/dashboard/#header',"bg-color" => "bg-green-700", 'hover-bg' => 'bg-green-500', "message" => "Your Admission Has Been Approved"];
                        }
                        $courseStatusDetail[] = ['link' => '/dashboard#header',"bg-color" => "bg-green-700", 'hover-bg' => 'bg-green-500', "message" => "Your Admission Has Been Approved And Paid"];
                    }
                    break;
                }
            }
        }

        if (!isset($courseStatusDetail)) {
            return view("User.course",compact("course"));
        }
        return view("User.course",compact("course","courseStatusDetail"));

    }

    public function courseApplication(Request $request){

        if (!Auth::check()) {
            return redirect("/login");
        }


//        dd($request->all());



        $userInfo = User::where("users.user_id","=",Auth::id())->with('student')->get()->toArray();
//        dd($userInfo);

            foreach ($userInfo[0]['student']["course_application"] as $existCheck){
                if ($existCheck["course_id"] === (int)$request->course) {
                    return redirect()->back()->with('register_status','Registered Successfully');
                }
        }

        if(in_array(null,$userInfo[0]["student"],true) || in_array(null,$userInfo[0]["student"]["payment_info"][0],true)){
            return redirect()->back()->with(['register_status' => 'Complete Profile Customization To Apply','link' => '/dashboard/profile#header']);
        }


        Course_Application::create([
           'course_id' => $request->course,
           'student_id' => $userInfo[0]["student"]["student_id"],
        ]);

        User_Activity::create([
           'activity_type' => "Course Application",
            "student_id" => Student::with('course_application')->where("user_id","=", \Illuminate\Support\Facades\Auth::user()->user_id)->first()->student_id
        ]);

        return redirect()->back()->with('register_status','Registered Successfully');



//        Course_Application::create([
//
//        ]);

    }

}
