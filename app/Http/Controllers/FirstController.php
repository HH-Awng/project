<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\department;
use App\section;
use App\Teacher;
use App\Subject;
use File;
use App\Student;
use App\Message;
use App\Learnandplay;
use App\Attdance;




class FirstController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /*report*/
    public function report(){
    	return view('home.report');
    }
    /*report*/

    /*attendance page*/
    public function attendance(){
        $students= Student::all();
        $attdances= Attdance::all();

    	return view('home.attendance', compact('students', 'attdances'));
    }
    /*attendance page*/


    /*teacher page*/
    public function teacher(){

         $teachers=Teacher::all();
        $subjects = Subject::orderby('id', 'DESC')->paginate(3);
        $sections=Section::all();
    	return view('home.teacher', compact('teachers', 'subjects', 'sections'));
    }
    /*teacher page*/
    


    /*department*/
    public function department(){
        $students=Student::all();
        $departments= department::all();
        return view('department.department', compact('departments', 'students'));
    }
    /*department*/


    /*section*/
    public function section(){
        $subjects=Subject::all();
        $sections = Section::all();
        return view('section.section', compact('sections', 'subjects'));
    }
    /*section*/

    /*teachteacher*/
    public function teachteacher(){
        $teachers = Teacher::all();
        return view('teacher.teacher', compact('teachers'));
    }
    /*teachteacher*/


    /*subject*/
    public function subject(){
        $students=Student::all();
        $teachers=Teacher::all();
        $subjects = Subject::all();
        $sections=Section::all();
        return view('subject.subject', compact('teachers', 'subjects', 'sections', 'students'));
    }
    /*subject*/



    /*forstudent page*/
    public function forstudent(){
        $sections=Section::orderby('id', 'ASC')->paginate(1);
        $students=Student::all();

        /*foreach($students as $student){
            echo $student->attdances."<br>";
        }*/

        $subjects=Subject::all();
        return view('forstudents.forstudent', compact('sections', 'students', 'subjects'));
    }
    /*forstudent page*/


    /*student department*/
     public function student_department(){

            $subjects=Subject::all();
            $sections=Section::all();
            $students=Student::all();
            $departments=department::orderby('id', 'ASC')->paginate(1);
        return view('student_department.stu_department',  compact('departments', 'students', 'sections', 'subjects'));
    }
    /*student department*/



    /*One teacher*/
        public function oneteacher($id){

            $teachers=Teacher::findOrFail($id);
            $subjects = Subject::all();
            $sections=Section::all();
            return view('home.one-teacher', compact('teachers', 'subjects', 'sections'));
        }
    /*end one teacher*/



    //user interface Class
    public function studentclass(){

        $students=Student::all();
        $sections=Section::orderby('id', 'ASC')->paginate(1);
        $subjects=Subject::all();
        return view('uifaceclass.uiclass', compact('sections', 'students', 'subjects'));
    }

    //user interface Class


    /*One Class Student*/
    public function oneclass_student($id){
        $students=Student::findOrFail($id);
        $departments=department::all();
        $sections=Section::all();
        $subjects=Subject::all();
        return view('onesectionstudent.onestudent', compact('students', 'sections', 'subjects', 'departments'));
    }
    /*End One Class Student*/



    /*Teacher Personal data*/
    public function studentdepartmentdata($id){
        $students=Student::findOrFail($id);
        $departments=department::all();
        $sections=Section::all();
        $subjects=Subject::all();   
        return view('student_department.studentdepdata', compact('students', 'sections', 'subjects', 'departments'));
    }

    /*Teacher Personal data*/



    /*Leave Out*/
    public function leavestudent(){
        
        $students=Student::orderby('id', 'DESC')->paginate(4);
        return view('leaveout.leaveout', compact('students'));
    }

    /*End Leave Out*/



}
