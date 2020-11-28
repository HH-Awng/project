<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;


class SectionController extends Controller
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
        'classname'=>'string|required',
        'period'=>'required|string',
        'starttime'=>'required',
        'endtime'=>'required'
        ]);

        $name= $request->classname;
        $period = $request->period;
        $starttime = $request->starttime;
        $endtime = $request->endtime;

        $section= new Section;
        $section->class_name=$name;
        $section->period = $period;
        $section->starttime = $starttime;
        $section->endtime = $endtime;
        $section->save();

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
        $sections= Section::findOrFail($id);
        return view('section.section_edit', compact('sections'));
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
            'classname'=>'string|required|max:50',
            'period'=>'required|string',
            'starttime'=>'required',
            'endtime'=>'required'
        ]);
        $name= $request->classname;
        $period = $request->period;
        $starttime = $request->starttime;
        $endtime = $request->endtime;

        $section= Section::find($id);
        $section->class_name= $name;
        $section->period = $period;
        $section->starttime = $starttime;
        $section->endtime = $endtime;
        $section->save();
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
        if(Section::where('id', $id)->delete()){
            return redirect()->back()->with('success', 'Record deleted successfully');
        }else{
            return redirect();
        }
    }
}
