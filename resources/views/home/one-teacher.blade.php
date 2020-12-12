
@extends('layouts.app')
@section('title', 'Teacher_personal Page')
@section('content') 
  

    {{-- report --}}
    <div class="report">  
      <h3 class="n-report-z n-teacherper-h">Teacher Personal</h3>
      
    </div>
    {{-- end report --}}




          {{-- UI design --}}
          <div class="container newforcontainer">



            
            {{-- row --}}
            <div class="row" style="text-align: center;">


              
              {{-- col-sm-3 --}}
              <div class="col-sm-12 n-loop-margin"> 


              <div class="n-fornameone">
                {{$teachers->name}}
            </div>   
                  
            

             {{--  for image --}}
             <div class="n-for_imageloop">

              <div class="n-oneimg">
                  <img src="{{asset('/storage/imagestore/'. $teachers->image)}}" class="n-imagemap border border-ligh">
              </div>
               
              {{-- for teacher name--}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                     <b class="h-loop-value">Name:</b>
                   </div>


                   <div class="col-sm-6">
                     <b>{{$teachers->name}}</b>
                   </div>

                 </div>
                 
               </div>
               {{-- end for teacher name --}}


               {{-- for age --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                      <b class="h-loop-value">Age:</b>
                   </div>


                   <div class="col-sm-6">
                     <b>{{$teachers->age}}</b>
                   </div>

                 </div>
                 
               </div>
               {{-- end for age --}}



               {{-- for rank --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                     <b class="h-loop-value">Rank:</b>
                   </div>


                   <div class="col-sm-6">
                     <b>{{$teachers->rank}}</b>
                   </div>

                 </div>
                 
               </div>
               {{-- end for rank --}}



                {{-- for Reg_No --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                     <b class="h-loop-value">Register_No:</b>
                   </div>


                   <div class="col-sm-6">
                     <b>{{$teachers->Reg_No}}</b>
                   </div>

                 </div>
                 
               </div>
               {{-- end for Reg_No --}}



               {{-- for Gender --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                     <b class="h-loop-value">Gender:</b>
                   </div>


                   <div class="col-sm-6">
                     <b>{{$teachers->gender}}</b>
                   </div>

                 </div>
                 
               </div>
               {{-- end for Gender --}}



               {{-- for subject --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                     <b class="h-loop-value">Train Subject:</b>
                   </div>

                   @foreach($teachers->subjects as $subject)
                   <div class="col-sm-6">
                     <b>{{$subject->subname}}</b>
                   </div>
                   @endforeach

                 </div>
                 
               </div>
               {{-- end for subject --}}



               {{-- for class --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                     <b class="h-loop-value">Train Class:</b>
                   </div>

             
                     @foreach($teachers->subjects as $subject)
                   <div class="col-sm-6">
                     <b>{{$subject->section->class_name}}</b>
                   </div>
                   @endforeach

                

                 </div>
                 
               </div>
               {{-- end for class --}}


               {{-- for period --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                     <b class="h-loop-value">Train Period:</b>
                   </div>

                   @foreach($teachers->subjects as $subject)
                   <div class="col-sm-6">
                     <b>{{$subject->section->period}}</b>
                   </div>
                   @endforeach

                 </div>
                 
               </div>
               {{-- end for period --}}



               {{-- for start time --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                      <b class="h-loop-value">Start_Time:</b>
                   </div>

                   @foreach($teachers->subjects as $subject)
                   <div class="col-sm-6">
                     <b>{{$subject->section->starttime}}</b>
                   </div>
                   @endforeach

                 </div>
                 
               </div>
               {{-- end for start time --}}



               {{-- for end time --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                      <b class="h-loop-value">End_Time:</b>
                   </div>

                   @foreach($teachers->subjects as $subject)
                   <div class="col-sm-6">
                     <b>{{$subject->section->endtime}}</b>
                   </div>
                   @endforeach

                 </div>
                 
               </div>
               {{-- end for end time --}}






              
             </div>
              
             {{--  end for image --}}

              </div>
              {{-- col-sm-3 --}}
            


               <a href="{{route('teacher')}}" style="text-decoration: none;" class="n-primary">Back</a>

  

             




            </div>
            {{-- end row --}}
            




          </div>
          {{-- end UI design --}}










@endsection


