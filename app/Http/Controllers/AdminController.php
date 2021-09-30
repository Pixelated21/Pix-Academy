<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Course_Application;
use App\Models\Institution;
use App\Models\Student;
use App\Models\User_Activity;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {

        $courseCount = Course::count();
        $studentCount = Student::count();
        $institutionCount = Institution::count();
        $applicationCount = Course_Application::count();
        $usersActivityCard = User_Activity::with('student')->orderBy('created_at', 'desc')->get()->take(7)->toArray();


        $courses = Course::with('course_application')->where('status', '=', 'open')->orderBy('amt_enrolled', 'desc')->get()->toArray();

        $applicants = Course_Application::with('student')->orderBy('created_at', 'desc')->where('status', '=', 'Pending')->get()->toArray();

        $coursesInfo = Course::orderBy('status', 'desc')->orderBy('amt_enrolled', 'desc')->get()->toArray();

        $institutionsInfo = Institution::with('course')->get()->toArray();

        $usersActivity = User_Activity::with('student')->orderBy('created_at', 'desc')->get()->toArray();

        $acceptedApplicants = Course_Application::with('student')->orderBy('created_at', 'desc')->where('status', '=', 'Accepted')->get()->toArray();

//        dd($usersActivity);
//        dd($institutionsInfo);
//        dd($coursesInfo);
//        dd($applicants);
//        dd($courses);
//        dd($acceptedApplicants);


        return view('admin.index', compact('studentCount',
            'courseCount', 'institutionCount',
            'courses', 'applicants', 'coursesInfo',
            'institutionsInfo', 'usersActivity',
            'usersActivityCard', 'applicationCount',
            'acceptedApplicants'));

    }

    public function viewApplicantIndex(int $application_id, int $student_id)
    {

        $studentInfo = Student::with(['users', 'media', 'payment_info'])->where('student_id', '=', $student_id)->get()->toArray();
        $application = Course_Application::find($application_id)->toArray();
//        dd($application);
//        dd($studentInfo);

        return view('admin.applicant', compact('studentInfo', 'application'));
    }

    public function applicantAction(Request $request, int $application_id, int $course_id)
    {

        $decision = null;

        if ($request->has('accepted')) {
            $decision = 'Accepted';

            $courseAmt = Course::find($course_id)->amt_enrolled;

            Course::find($course_id)->update([
                'amt_enrolled' => $courseAmt++
            ]);

        } elseif ($request->has('rejected')) {
            $decision = 'Rejected';
        }


        $update = Course_Application::find($application_id)->update([
            'status' => $decision,
        ]);


        return redirect(route('Admin-Home'));

    }

    public function addInstitution(Request $request)
    {

        Institution::create([
            'institution_nm' => $request->inst_nm,
            'telephone_nbr' => $request->inst_tele_nbr,
            'address' => $request->inst_addr
        ]);

        return redirect()->back()->with('message', 'Institution Added Successfully');

    }


}
