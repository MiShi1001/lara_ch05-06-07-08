<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use View;


use App\Student;
class StudentController extends Controller
{
    public function getStudentData($student_no){
        $student=Student::where('no',$student_no)->firstOrFall();
        return View::make('student',[
            'student'=>$student,
            'user'=>$student->user,
            'score'=>$student->score,
            'subject'=>null
        ]);

    }
    public function getStudentScore($student_no,$subject=null){
        $student=Student::where('no',$student_no)->firstOrFall();
        return View::make('student',[
            'student'=>$student,
            'user'=>$student->user,
            'score'=>$student->score,
            'subject'=>$subject
        ]);


    }

}
