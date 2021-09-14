<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Profile extends Controller
{


    public function updatePP(Request $request){


        $deletePrevious = Storage::delete(Auth::user()->profile_picture);

        $currentImage = "/public/profile_pictures/".uniqid('', true).".".$request->file("profilePicture")->getClientOriginalExtension();

        $saveImage = $request->file("profilePicture")->storeAs("/",$currentImage);



        $updateImage = DB::table("users")
            ->where("email","=",Auth::user()->email)
            ->update(["profile_picture" => $currentImage]);

        return redirect()->back();

    }


    public function ProfileView(){

        $userInfo = Auth::user()->attributesToArray();

        return view('User.editProfile',['userInfo' => $userInfo]);
    }



    public function personalInfoUpdate(Request $request){

        $userPerInfoUpdate = User::where("email",Auth::user()->email)
                                ->update(["first_name" => $request->get("first_name"),
                                    "middle_name" => $request->get("middle_name"),
                                    "last_name" => $request->get("last_name"),
                                    "email" => $request->get("email"),
                                    "gender" => $request->get("gender"),
                                    "TRN" => $request->get("TRN"),
                                    "dob" => $request->get("dob"),
                                    "telephone" => $request->get("telephone")]);

        return redirect()->back();
        }


    public function residentialInfoUpdate(Request $request){

            $userResInfoUpdate = User::where("email",Auth::user()->email)
                                ->update(["street_address" => $request->get("street_address"),
                                    "district_town" => $request->get("district_town"),
                                    "postal_zone" => $request->get("postal_zone"),
                                    "parish" => $request->get("parish")]);

            return redirect("/dashboard/profile#header");
        }


    public function socialInfoUpdate(Request $request){

        $userSocialInfoUpdate = User::where("email",Auth::user()->email)
                                ->update(["whatsapp" => $request->get("whatsapp"),
                                    "twitter" => $request->get("twitter"),
                                    "instagram" => $request->get("instagram")]);

        return redirect()->back();


    }

    public function paymentInfoUpdate(Request $request){

        $userPaymentInfoUpdate = User::where("email",Auth::user()->email)
                                ->update(["card_number" => $request->get("card_number"),
                                    "card_holder" => $request->get("card_holder"),
                                    "expiration_month" => $request->get("expiration_month"),
                                    "expiration_year" => $request->get("expiration_year")]);

        return redirect()->back();


    }
}
