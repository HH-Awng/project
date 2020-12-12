

@extends('layouts.app')
@section('title', 'Leaveout Page')
@section('content') 

 {{-- report --}}
    <div class="report">  
      <h3 class="n-report-z n-leaveout-h">Leave_Out</h3>
      
    </div>
    {{-- end report --}}

    {{-- Container --}}

        <div class="row n-guan-firstrow">
            
            <div class="col-sm-10" style="margin-top: 20px;">
                


                    <table class="table table-hover">
        

                            <thead>
                              <tr>
                                <th scope="col">No</th><th scope="col">Image</th><th scope="col">Name</th><th scope="col">Age</th><th scope="col">Rank</th><th scope="col">Reg_No</th><th scope="col">Gender</th><th scope="col">Class</th><th scope="col">Subject</th><th>Left_time</th>
                              </tr>
                            </thead>
   
                 <tbody>

                @foreach($students as $key=>$student)
                @if($student->breaker==0)

       
                        <tr>
                                <td scope="row" style="padding-top: 50px;">{{++$key}}.</td>
                                <td><img src="{{asset('/storage/imagestore/'.$student->image)}}" class="n-loopimagefirst"></td>
                                <td style="padding-top: 50px;">{{$student->name}}</td>
                                <td style="padding-top: 50px;">{{$student->age}}</td>
                                <td style="padding-top: 50px;">{{$student->rank}}</td>
                                <td style="padding-top: 50px;">{{$student->Reg_No}}</td>
                                <td style="padding-top: 50px;">{{$student->gender}}</td>
                                <td style="padding-top: 50px;">{{$student->section->class_name}}</td>
                                <td style="padding-top: 50px;">{{$student->subject->subname}}</td>
                                <td style="padding-top: 50px;">{{\carbon\carbon::parse($student->updated_at)->format('Y-M-d')}}</td>

                        </tr>
             
                  @endif
                  @endforeach




                    </tbody>


                   </table>

                      {{$students->links()}}



            </div>
    
        </div>

                    {{-- Container --}}

@endsection