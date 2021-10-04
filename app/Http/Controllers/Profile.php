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

        $this->validate($request,[
            'profilePicture' => 'required|image|max:10000'
        ]);

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

        $gender = ['Male','Female','Others'];

        $validate = $request->validate([
            'first_name' => 'required|max:50|alpha',
            'middle_name' => 'nullable|max:25|alpha',
            'last_name' => 'required|max:25|alpha',
            'gender' => 'required|in_array:gender',
            'TRN' => 'required|numeric',
            'dob' => 'required|before: 18 years ago',
            'telephone' => 'required|numeric'
        ],[
            'first_name.required' => 'Your First Name is Required',
            'last_name.required' => 'Your Last Name is Required',
            'TRN.required' => 'Your TRN is Required',
            'telephone.required' => 'Your Telephone Number is Required',
        ]);




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
//        dd($request->all());
        $validate = $request->validate([
            'street_address' => 'required|max:100',
            'city_nm' => 'required|max:50',
            'postal_zone' => 'required|max:50',
            'parish' => 'required|max:50'

        ]);

        $userResInfoUpdate = Student::where("student_id",'=', Auth::user()->user_id)
            ->update([
                "addr_ln_1" => $request->get("street_address"),
                "city_nm" => $request->get("city_nm"),
                "postal_zone" => $request->get("postal_zone"),
                "parish_nm" => $request->get("parish")]);

        User_Activity::create([
            'activity_type' => "Residential Information Update",
            "student_id" => Student::with('course_application')->where("user_id","=", Auth::user()->user_id)->first()->student_id,
        ]);

        return redirect("/dashboard/profile#header");
    }

    public function qualificationsUpdate(Request $request){

        $validate = $request->validate([
            'qualDoc' => 'required|max:10000',
        ]);


        // Qualifications Update Process

//        dd($request->file('qualDoc'));
        $qualificationImage = "/public/media/" . uniqid('', true) . "." . $request->file("qualDoc")->getClientOriginalExtension();

        $saveQualImage = $request->file("qualDoc")->storeAs("/", $qualificationImage);


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

        $validate = $request->validate([
            'passportImg' => 'required|image|file|max:10000',
        ]);

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


        $validate = $request->validate([
            'billing_addr' => 'required|max:100',
            'cvv' => 'required|numeric',
            'card_number' => 'required|numeric',
            'card_holder_nm' => 'required|max:50',
            'expiration_month' => 'required',
            'expiration_year' => 'required',

        ]);

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
