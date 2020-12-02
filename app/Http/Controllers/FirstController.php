<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\department;
use App\section;
use App\Teacher;
use App\Subject;
use File;




class FirstController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function report(){

    	return view('home.report');
    }

    public function attendance(){
    	return view('home.attendance');
    }


    public function teacher(){

         $teachers=Teacher::all();
        $subjects = Subject::all();
        $sections=Section::all();
    	return view('home.teacher', compact('teachers', 'subjects', 'sections'));
    }

    public function student(){

        
    	return view('home.student');
    }

    public function message(){
    	return view('home.message');
    }


    public function department(){

       
        $departments= department::all();
        return view('department.department', compact('departments'));
    }


    public function section(){
        $sections = Section::all();
        return view('section.section', compact('sections'));
    }


    public function teachteacher(){
        $teachers = Teacher::all();
        return view('teacher.teacher', compact('teachers'));
    }



    public function subject(){
        

        $teachers=Teacher::all();
        $subjects = Subject::all();
        $sections=Section::all();
        return view('subject.subject', compact('teachers', 'subjects', 'sections'));
    }










}
