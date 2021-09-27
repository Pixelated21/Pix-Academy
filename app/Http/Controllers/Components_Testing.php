<?php

namespace App\Http\Controllers;


use App\Models\Course;
use App\Models\Media;
use App\Models\Student;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Support\Renderable;

class Components_Testing extends Controller
{
    public function index(){

        $course = Course::find(1);
        return view("Template-Testing.navbarChallenge")
            ->with(compact("course"));

    }
}
