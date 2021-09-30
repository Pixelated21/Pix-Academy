<?php

namespace App\Http\Controllers;

use App\Models\Course_Application;
use App\Models\Payment_Activity;
use App\Models\Student;
use App\Models\User_Activity;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function makePayment(Request $request,int $application_id,int $course_id,int $payment_id){


        $course = \App\Models\Course::find($course_id);
        $application = Course_Application::find($application_id);




        $makePayment = Payment_Activity::create([
           'payment_info_id' => $payment_id,
           'amount_paid' => $course->price,
        ]);

        $userActivityLog = User_Activity::create([
            'student_id' => $application->student_id,
            'activity_type' => "Payment For $course->course_nm Course"
        ]);

        $application->update([
            'payment_status' => 'Paid'
        ]);

        $course->increment('amt_enrolled');


        return redirect()->back();

    }
}
