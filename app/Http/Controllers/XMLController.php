<?php

namespace App\Http\Controllers;

use App\Models\Course_Application;
use Illuminate\Http\Request;
use SimpleXMLElement;
use Spatie\ArrayToXml\ArrayToXml;

class XMLController extends Controller
{
    public function singleStudent($student_id)
    {
        return $student_id;
    }

    public function allStudent()
    {

        $allStudents = Course_Application::all()->toArray();

        dd($allStudents);

    }
}
