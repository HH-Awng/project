<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use App\department;
use App\Section;
use App\Subject;
use File;
use DB;

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
        $subjects=Subject::all();
        $sections=Section::all();
        $students=Student::all();
        return view('student.student', compact('students', 'departments', 'sections', 'subjects'));
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
        'studentimage'=>'image|mimes:jpg,png,jpeg|max:7000',
        'department_id'=>'string|required',
        'section_id'=>'string|required',
        'subject_id'=>'required|string',

        
        ]);

        $stuname= $request->studentname;
        $stuage=$request->studentage;
        $sturank=$request->studentrank;
        $stureg=$request->studentreg_no;
        $stugender=$request->studentgender;
        $depid=$request->department_id;
        



        if($request->hasFile('studentimage')){

            $image=$request->file('studentimage');
            $path=public_path('/storage/imagestore/');
            $photo=time().'.'.$image->getClientOriginalExtension();
            $image->move($path, $photo);
        
            }

        

        $students= new Student;
        $students->name=$stuname;
        $students->age=$stuage;
        $students->rank=$sturank;
        $students->Reg_No=$stureg;   
        $students->gender=$stugender;
        $students->image=$photo;
        $students->dep_id= $depid;
        $students->section_id = $sectionid;
        $students->subject_id=$subjectid;
        $students->save();

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
        $departments=department::all();
        $subjects=Subject::all();
        $sections=Section::all();
        $student=Student::findOrFail($id);
        return view('student.student_edit', compact('student', 'departments', 'sections', 'subjects'));
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
        'studentname'=>'string|required',
        'studentage'=>'required|max:10|min:1',
        'studentrank'=>'required|string',
        'studentreg_no'=>'required|string',
        'studentgender'=>'required|string',
        'studentimage'=>'nullable|image|mimes:jpg,png,jpeg|max:7000',
        'department_id'=>'string|required',
        'section_id'=>'string|required',
        'subject_id'=>'required|string'
        
        ]);



        $student=Student::findOrFail($id);



        if($request->hasFile('studentimage')){
            $files=$request->file('studentimage');
            $path=public_path('/storage/imagestore/');
            $photo=time().'.'.$files->getClientOriginalExtension();
            $files->move($path, $photo);

             if(isset($student->image)){
                $oldname=$student->image;
                File::delete($path.''.$oldname);

            }


            $student->image=$photo;


        }

        $stuname= $request->studentname;
        $stuage=$request->studentage;
        $sturank=$request->studentrank;
        $stureg=$request->studentreg_no;
        $stugender=$request->studentgender;
        $depid=$request->department_id;
        $sectionid=$request->section_id;
        $subjectid=$request->subject_id;

        

        
        $student->name=$stuname;
        $student->age=$stuage;
        $student->rank=$sturank;
        $student->Reg_No=$stureg;   
        $student->gender=$stugender;  
        $student->dep_id= $depid;
        $student->section_id =$sectionid;
        $student->subject_id=$subjectid;
        $student->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $students= Student::findOrFail($id);

        if($students->delete()){
            $path=public_path('/storage/imagestore/');

            if(isset($students->image)) {
                    $photo=$students->image;
                    File::delete($path.''.$photo);

             return redirect()->back()->with('success', 'Record deleted successfully');
                 
             }
            else{
                return redirect('/student-create');
            }
        }



    }





    public function leaveout($id){
        $leaveout=Student::FindOrFail($id);

         $leaveout=DB::table("students")
                ->where("id", $id)
                ->where("breaker", 1)
                ->update(['breaker'=>0]);

        return redirect()->back();
    }




}
