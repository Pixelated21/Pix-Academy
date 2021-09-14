<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Support\Renderable;

class Component_Testing extends Controller
{
    public function index(){


        return view("Template-Testing.navbarChallenge");

    }
}
