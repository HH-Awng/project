<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;
use App\Subject;
use App\Section;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
        'subname'=>'string|required',
        'teach_id'=>'nullable|string|required',
        'section_id'=>'nullable|string|required'
        
        ]);

        $name= $request->subname;
        $teach=$request->teach_id;
        $section=$request->section_id;
        

        $subjects= new Subject;
        $subjects->subname=$name;
      
        $subjects->teacher_id = $teach;
        $subjects->section_id = $section;
        $subjects->save();

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
       $teachers=Teacher::all();
       $sections=Section::all();
       $subject= Subject::findOrFail($id);
        return view('subject.subjectforedit', compact('subject', 'teachers', 'sections'));
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
        $request->validate([
            'subname'=>'string|required',
            'teach_id'=>'string|required',
            'section_id'=>'string|required'
        ]);
            $name= $request->subname;
            $teach=$request->teach_id;
            $section=$request->section_id;

        $subjects= Subject::findOrFail($id);
        $subjects->subname=$name;
        $subjects->teacher_id = $teach;
        $subjects->section_id = $section;
        $subjects->save();

        return redirect()->back()->with('success', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        


            if(Subject::where('id', $id)->delete()){
            return redirect()->back()->with('success', 'Record deleted successfully');
        }else{
            return redirect();
        }




    }
}
