<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Application;
use App\Http\Controllers\Components_Testing;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Courses;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\Login;
use App\Http\Controllers\Profile;
use App\Http\Controllers\Register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Login And Registration; Logout

Route::get('/login',[Login::class,'index'])->name("login");
Route::get('/register',[Register::class,'index'])->name("register");

Route::post('register',[Register::class,'registerNewUser']);
Route::post('login',[Login::class,'loginUser']);

Route::post('/logout',[Login::class,'logout'])->name("logout");

////

// User Access

Route::get('/application',[Application::class,'index']);
Route::get('/home',[Homepage::class,'index']);
Route::get("/contact",[Contact::class,'index']);
Route::get("/courses",[Courses::class,'index']);

/// Dashboard
Route::get('/dashboard',[Dashboard::class,'index']);

//Profile
Route::get('/dashboard/profile',[Profile::class,'ProfileView']);
Route::post("/ppChange",[Profile::class,'updatePP']);

//Updates
Route::post("/periUpdate",[Profile::class,'personalInfoUpdate']);
Route::post("/riUpdate",[Profile::class,'residentialInfoUpdate']);
Route::post("/siUpdate",[Profile::class,'socialInfoUpdate']);
Route::post("/ciUpdate",[Profile::class,'paymentInfoUpdate']);




////

// Admin

Route::get('/admin/home',[Admin::class,'index']);

// Admin Actions

//


//Testing
Route::get("/testing",[Components_Testing::class,'index']);
////
