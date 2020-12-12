<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;
use File;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }

    
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
        $teachers = Teacher::all();
        return view('teacher.teacher', compact('teachers'));
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
        'teachername'=>'required|string',
        'teacherage'=>'required|max:20|min:2',
        'teacherrank'=>'required|string',
        'registerno'=>'required|string',
        'teachgender'=>'required|string',
        'teachimage'=>'required|image|mimes:jpg,png,jpeg|max:7000'
        
        ]);

            $name= $request->teachername;
            $age = $request->teacherage;
            $rank = $request->teacherrank;
            $reg = $request->registerno;
            $gender = $request->teachgender;



        if($request->hasFile('teachimage')){

            $image=$request->file('teachimage');
            $path=public_path('/storage/imagestore/');
            $photo=time().'.'.$image->getClientOriginalExtension();
            $image->move($path, $photo);
            

            }         
        

         $teacher= new Teacher;
        
        $teacher->name=$name;
        $teacher->age = $age;
        $teacher->rank = $rank;
        $teacher->Reg_No = $reg;
        $teacher->gender=$gender;
        $teacher->image=$photo;

        $teacher->save();

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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teachers=Teacher::findOrFail($id);
        return view('teacher.teacher_edit', compact('teachers'));
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
            'teachername'=>'required|string',
            'teacherage'=>'required|max:20|min:2',
            'teacherrank'=>'required|string',
            'registerno'=>'required|string',
            'teachgender'=>'required|string',          
            'teachimage'=>'nullable|image|mimes:jpg,png,jpeg|max:7000',
        ]);
        


      
        $teachers =Teacher::findOrFail($id);

        if($request->hasFile('teachimage')){
            $files=$request->file('teachimage');
            $path=public_path('/storage/imagestore/');
            $photo=time().'.'.$files->getClientOriginalExtension();
            $files->move($path, $photo);

             if(isset($teachers->image)){
                $oldname=$teachers->image;
                File::delete($path.''.$oldname);

            }



            $teachers->image=$photo;



        }
   
         

        

         
            $name= $request->teachername;
            $age = $request->teacherage;
            $rank = $request->teacherrank;
            $reg = $request->registerno;
            $gender = $request->teachgender;
            



            $teachers->name=$name;
            $teachers->age=$age;
            $teachers->rank=$rank;
            $teachers->Reg_No=$reg;
            $teachers->gender=$gender;
            

             $teachers->save();
       
       
        return redirect('/teacher-page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)    {

        $teachers=Teacher::findOrFail($id);
        

if ($teachers->delete()){
    
    $path=public_path('/storage/imagestore/');


    if(isset($teachers->image)) {
        $photo=$teachers->image;
        File::delete($path.''.$photo);

         return redirect()->back()->with('success', 'Record deleted successfully');
                 
        }else{
            return redirect()->back();
        }
    }




}









}