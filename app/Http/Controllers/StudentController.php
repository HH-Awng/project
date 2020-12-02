<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use File;
use App\department;
use App\Section;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=department::all();
        $sections=Section::all();
        $students=Student::all();
        return view('student.student', compact('students', 'departments', 'sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'studentname'=>'string|required',
        'studentage'=>'required|max:20|min:2',
        'studentrank'=>'required|string',
        'studentreg_no'=>'required|string',
        'studentgender'=>'required|string',
        'stuentimage'=>'image|mimes:jpg,png,jpeg|max:5000',
        'Dep_id'=>'string|required',
        'section_id'=>'string|required'
        
        ]);

        $stuname= $request->studentname;
        $stuage=$request->studentage;
        $sturank=$request->studentrank;
        $stureg=$request->studentreg_no;
        $stugender=$request->studentgender;
        $stuimage=$request->stuentimage;
        $Depid=$request->Dep_id;
        $sectionid=$request->section_id;

        

        $student= new Student;
        $student->name=$stuname;
        $student->age=$stuage;
        $student->rank=$sturank;
        $student->Reg_No=$stureg;
        $student->gender=$stugender;
        $student->image=$stuimage;
        $student->Dep_id= $Depid;
        $student->section_id = $sectionid;
        $student->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
