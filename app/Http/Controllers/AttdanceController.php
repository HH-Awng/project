<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attdance;
use APP\Student;
use DB;
use Carbon\Carbon;

class AttdanceController extends Controller
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
        //
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
        'studentid'=>'required',
        
       ]);

       $student_id=$request->studentid;



       $checkattend=$request->checkattend;


       if ($checkattend=='on') {
          $checkattend=1;
       }else{
        $checkattend=0;
       }

       //check user is already checked
       $existStudent=DB::table('attdances')
                    ->where('student_id', '=', $student_id)
                    ->whereDate('created_at', '=', Carbon::today())
                    ->get();
        
        /*isset form database*/                    
        if(isset($existStudent[0]->student_id)){
            DB::table('attdances')
                ->where('student_id', $student_id)
                ->update(['status'=>$checkattend]);

        }else{
            $attdances= new Attdance;
            $attdances->student_id=$student_id;
            $attdances->status=$checkattend;
            $attdances->save();
        }
        /*isset form database*/

       
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
        $attdances=Attdance::all();
        return view('home.attendance', compact('attdances'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
