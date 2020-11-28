<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\department;
use App\section;




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
    	return view('home.teacher');
    }

    public function student(){
    	return view('home.student');
    }

    public function message(){
    	return view('home.message');
    }


    public function department(){
        $departments= Department::all();
        return view('department.department', compact('departments'));
    }


    public function section(){
        $sections = Section::all();
        return view('section.section', compact('sections'));
    }







}
