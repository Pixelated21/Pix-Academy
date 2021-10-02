<?php

namespace App\Http\Controllers;

use App\Models\Course_Application;
use Illuminate\Http\Request;
use SimpleXMLElement;
use Spatie\ArrayToXml\ArrayToXml;
use Storage;

class XMLController extends Controller
{
    public function singleStudent($student_id)
    {
        $Student = Course_Application::with('course','student')->where("student_id",$student_id)->get()->toArray();

        $a = 0;
        foreach ($Student as $studentInfo) {

            $newxml[$a] = [
                'Student_Name' => $studentInfo['student'][0]['first_nm'] . " " . $studentInfo['student'][0]['last_nm'],
                'Gender' => $studentInfo['student'][0]['gender'],
                'DOB' => $studentInfo['student'][0]['dob'],
                'TRN_Number' => $studentInfo['student'][0]['trn_nbr'],
                'Telephone Number' => $studentInfo['student'][0]['tele_nbr'],
                'Parish' => $studentInfo['student'][0]['parish_nm'],
                'Email' => $studentInfo['student'][0]['users']['email_addr'],
                'Course_Name' => $studentInfo['course']['course_nm'],
                'Payment_Info_ID' => $studentInfo['student'][0]['payment_info'][0]['payment_info_id'],
                'Date_Applied' => date("d-m-Y",strtotime($studentInfo['created_at'])),
            ];
            ++$a;
        }

        $result = new ArrayToXml(['__numeric' => $newxml], [
            'rootElementName' => 'studentinfo'
        ], true, 'UTF-8');

        $fill = $result->prettify()->toXml();
        $fill = preg_replace('/numeric_[0-9]{0,4}/i', 'course', $fill);

        $filename = $studentInfo['student'][0]['first_nm']."-".$studentInfo['student'][0]['last_nm'] . '.xml';
        Storage::disk('public')->put($filename, $fill);

        $filePath = storage_path("app/public/" . $studentInfo['student'][0]['first_nm']."-".$studentInfo['student'][0]['last_nm'] . ".xml");
        $headers = ['Content-Type: text/xml'];

        return response()->download($filePath, $filename, $headers);
    }

    public function allStudent()
    {

        $allStudents = Course_Application::with('course','student')->get()->toArray();
//
//        dd($allStudents);



        $a = 0;
        foreach ($allStudents as $studentsInfo) {

            $newxml[$a] = [
                'Student_Name' => $studentsInfo['student'][0]['first_nm'] . " " . $studentsInfo['student'][0]['last_nm'],
                'Gender' => $studentsInfo['student'][0]['gender'],
                'DOB' => $studentsInfo['student'][0]['dob'],
                'TRN_Number' => $studentsInfo['student'][0]['trn_nbr'],
                'Telephone Number' => $studentsInfo['student'][0]['tele_nbr'],
                'Parish' => $studentsInfo['student'][0]['parish_nm'],
                'Email' => $studentsInfo['student'][0]['users']['email_addr'],
                'Course_Name' => $studentsInfo['course']['course_nm'],
                'Payment_Info_ID' => $studentsInfo['student'][0]['payment_info'][0]['payment_info_id'],
                'Date_Applied' => date("d-m-Y",strtotime($studentsInfo['created_at'])),
            ];
            ++$a;
        }

        $result = new ArrayToXml(['__numeric' => $newxml], [
            'rootElementName' => 'Studentinfo'
        ], true, 'UTF-8');

        $fill = $result->prettify()->toXml();
        $fill = preg_replace('/numeric_[0-9]{0,4}/i', 'course', $fill);

        $filename = 'Studentinfo' . '.xml';
        Storage::disk('public')->put($filename, $fill);

        $filePath = storage_path("app/public/" . 'Studentinfo' . ".xml");
        $headers = ['Content-Type: text/xml'];

        return response()->download($filePath, $filename, $headers);

    }
}
