<?php

namespace App\Http\Controllers;

use App\Models\Payment_info;
use App\Models\Student;
use App\Models\User;
use App\Models\User_Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Media;

class Profile extends Controller
{


    public function updatePP(Request $request)
    {


        $currentImage = "/public/media/" . uniqid('', true) . "." . $request->file("profilePicture")->getClientOriginalExtension();

        $saveImage = $request->file("profilePicture")->storeAs("/", $currentImage);


        User_Activity::create([
            'activity_type' => "Profile Picture Update",
            "student_id" => Student::with('course_application')->where("user_id","=", Auth::user()->user_id)->first()->student_id,
        ]);

        if (Media::where("student_id", '=', Student::where("user_id", '=', Auth::user()->user_id)->first()->student_id)->first()->profile_pic !== "/public/media/default_profile.jpg") {
            $deletePrevious = Storage::delete(Media::where("student_id", '=', Student::where("user_id", '=', Auth::user()->user_id)->first()->student_id)->first()->profile_pic);
        }
        $updateImage = Media::where("student_id", '=', Student::where("user_id", '=', Auth::user()->user_id)->first()->student_id)
            ->update(["profile_pic" => $currentImage]);

        return redirect()->back();

    }


    public function ProfileView()
    {


        $student = User::with("student")->where("user_id","=",Auth::user()->user_id)->get()->toArray();

//        dd($student);

        return view('User.editProfile')
            ->with(compact("student"));
    }


    public function personalInfoUpdate(Request $request)
    {

//TODO ADD VALIDATION

        $userPerInfoUpdate = Student::where("student_id", Auth::user()->user_id)
            ->update(["first_nm" => $request->get("first_name"),
                "middle_nm" => $request->get("middle_name"),
                "last_nm" => $request->get("last_name"),
                "gender" => $request->get("gender"),
                "trn_nbr" => $request->get("TRN"),
                "dob" => $request->get("dob"),
                "tele_nbr" => $request->get("telephone")]);

        $emailAddressUpdate = Auth::user()->update([
            "email_addr" => $request->get("email"),
        ]);

        User_Activity::create([
            'activity_type' => "Personal Info Update",
            "student_id" => Student::with('course_application')->where("user_id","=", Auth::user()->user_id)->first()->student_id,
        ]);


        return redirect("/dashboard/profile#header");
    }


    public function residentialInfoUpdate(Request $request)
    {

        $userResInfoUpdate = Student::where("student_id",'=', Auth::user()->user_id)
            ->update(["addr_ln_1" => $request->get("street_address"),
                "city_nm" => $request->get("district_town"),
                "postal_zone" => $request->get("postal_zone"),
                "parish_nm" => $request->get("parish")]);

        User_Activity::create([
            'activity_type' => "Residential Information Update",
            "student_id" => Student::with('course_application')->where("user_id","=", Auth::user()->user_id)->first()->student_id,
        ]);

        return redirect("/dashboard/profile#header");
    }

    public function qualificationsUpdate(Request $request){


        // Qualifications Update Process

        $qualificationImage = "/public/media/" . uniqid('', true) . "." . $request->file("qualImg")->getClientOriginalExtension();

        $saveQualImage = $request->file("qualImg")->storeAs("/", $qualificationImage);


        User_Activity::create([
            'activity_type' => "Qualifications Update",
            "student_id" => Student::with('course_application')->where("user_id","=", Auth::user()->user_id)->first()->student_id,
        ]);
        ///



        $deletePreviousQual = Storage::delete(Media::where("student_id", '=', Student::where("user_id", '=', Auth::user()->user_id)->first()->student_id)->first()->qualification_pic);


        $qualImage = Media::where("student_id",'=',Student::where('user_id','=',Auth::user()->user_id)->first()->student_id)
            ->update([
                'qualification_pic' => $qualificationImage,
            ]);


        return redirect("/dashboard/profile#header");
    }

    public function passportUpdate(Request $request) {

        // Passport Update Process
        $passportImage = "/public/media/" . uniqid('', true) . "." . $request->file("passportImg")->getClientOriginalExtension();

        $savePassPImage = $request->file("passportImg")->storeAs("/", $passportImage);


        User_Activity::create([
            'activity_type' => "Passport Image Update",
            "student_id" => Student::with('course_application')->where("user_id","=", Auth::user()->user_id)->first()->student_id,
        ]);


        $deletePreviousPassP = Storage::delete(Media::where("student_id", '=', Student::where("user_id", '=', Auth::user()->user_id)->first()->student_id)->first()->passport_pic);

        $passportImage = Media::where("student_id",'=',Student::where('user_id','=',Auth::user()->user_id)->first()->student_id)
            ->update([
                'passport_pic' => $passportImage,
            ]);

        return redirect("/dashboard/profile#header");

        ///
    }



    public function paymentInfoUpdate(Request $request)
    {


//       dd(($request->all()));
        $userPaymentInfoUpdate = Payment_info::find(Payment_info::where("student_id",'=',Student::where('user_id','=',Auth::user()->user_id)->first()->student_id)->first()->student_id)
                                    ->update([

                                        "billing_addr" => $request->get("billing_addr"),
                                    "cvv" => (($request->get("cvv"))),
                                    "card_nbr" => $request->get("card_number"),
                                    "card_holder_nm" => $request->get("card_holder_nm"),
                                    "exp_month" => $request->get("expiration_month"),
                                    "exp_year" => $request->get("expiration_year")]);

        User_Activity::create([
            'activity_type' => "Payment Information Update",
            "student_id" => Student::with('course_application')->where("user_id","=", Auth::user()->user_id)->first()->student_id,
        ]);

        return redirect("/dashboard/profile#header");


    }
}
