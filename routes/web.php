<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Application;
use App\Http\Controllers\Components_Testing;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Course;
use App\Http\Controllers\Courses;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\Login;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Profile;
use App\Http\Controllers\Register;
use App\Http\Controllers\XMLController;
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

Route::get('/login', [Login::class, 'index'])->name("login");
Route::get('/register', [Register::class, 'index'])->name("register");

Route::post('register', [Register::class, 'registerNewUser']);
Route::post('login', [Login::class, 'loginUser']);

Route::post('/logout', [Login::class, 'logout'])->name("logout");

////

// User Access

Route::get('/application', [Application::class, 'index']);
Route::get('/', [Homepage::class, 'index'])->name("User-Home");
Route::get("/contact", [Contact::class, 'index']);

//// Courses
Route::get("/courses", [Courses::class, 'index']);

//Single View
Route::get("/courses/{course_id}", [Course::class, 'singleCourseView']);

//Course Registration
Route::post("/courses/register", [Course::class, 'courseApplication'])->name("On-Course-Application");
////

/// Dashboard
Route::get('/dashboard', [Dashboard::class, 'index']);
Route::post('/makePayment/{application_id}/{course_id}/{payment_id}', [PaymentController::class, "makePayment"])->name("Payment");

//Profile
Route::get('/dashboard/profile', [Profile::class, 'ProfileView']);
Route::post("/ppChange", [Profile::class, 'updatePP']);

//Updates
Route::post("/periUpdate", [Profile::class, 'personalInfoUpdate']);
Route::post("/riUpdate", [Profile::class, 'residentialInfoUpdate']);
Route::post("/siUpdate", [Profile::class, 'socialInfoUpdate']);
Route::post("/ciUpdate", [Profile::class, 'paymentInfoUpdate']);
Route::post("/qualUpdate", [Profile::class, 'qualificationsUpdate'])->name("Qualifications-Update");
Route::post("/passUpdate", [Profile::class, 'passportUpdate'])->name("Passport-Update");
////

// AdminController

Route::get('/admin/home', [AdminController::class, 'index'])->name("Admin-Home");
Route::post('/admin/applicant/{application_id}/{student_id}', [AdminController::class, 'viewApplicantIndex'])->name("View-Applicant");

// AdminController Actions

Route::post('/admin/addInstitution', [AdminController::class, 'addInstitution'])->name("Add Institution");

Route::post('/admin/applicantAction/{application_id}/{course_id}', [AdminController::class, 'applicantAction'])->name("Admin_Applicant_Action");

Route::post('/singleStudentXML/{student_id}', [XMLController::class, "singleStudent"])->name("Single Student XML");
Route::post('/allStudentXML', [XMLController::class, "allStudent"])->name("All Student XML");

//


//Testing
Route::get("/testing", [Components_Testing::class, 'index']);
////
