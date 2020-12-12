

@extends('layouts.app')
@section('title', 'Studentpersonal Page')
@section('content') 

  
  

  {{-- report --}}
    <div class="report">  
      <h3 class="n-report-z n-studperso-h">Student Personal</h3>
      
    </div>
    {{-- end report --}}



          {{-- UI design --}}
          <div class="container newforcontainer">



            
            {{-- row --}}
            <div class="row" style="text-align: center;">


              
              {{-- col-sm-3 --}}
              <div class="col-sm-12 n-loop-margin">    


                  <div class="n-fornameone">
                       {{$students->name}}
                  </div>
                  
            
               {{--  <td>{{++$key}}</td>
                <td>{{$subject->subname}}</td>
                <td>{{$subject->created_at}}</td>
                <td>{{$subject->teacher->name}}</td>
                <td>{{$subject->section->class_name}}</td> --}}


             {{--  for image --}}
             <div class="n-for_imageloop">

             	

              <div class="n-oneimg">
                  <img src="{{asset('/storage/imagestore/'. $students->image)}}" class="n-imagemap border border-ligh">
              </div>

             
               
              {{-- for teacher name--}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                     <b class="h-loop-value">Name:</b>
                   </div>


                   <div class="col-sm-6">

                     <b>{{$students->name}}</b>
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
                     <b>{{$students->age}}</b>
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
                     <b>{{$students->rank}}</b>
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
                     <b>{{$students->Reg_No}}</b>
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
                     <b>{{$students->gender}}</b>
                   </div>

                 </div>
                 
               </div>
               {{-- end for Gender --}}



               {{-- for department --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                     <b class="h-loop-value">Department:</b>
                   </div>

                  
                   <div class="col-sm-6">
                     <b>{{$students->department->name}}</b>
                   </div>
                  

                 </div>
                 
               </div>
               {{-- end for department --}}



               {{-- for subject --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                     <b class="h-loop-value">Train Subject:</b>
                   </div>

                  
                   <div class="col-sm-6">
                     <b>{{$students->subject->subname}}</b>
                   </div>
                  

                 </div>
                 
               </div>
               {{-- end for subject --}}



               {{-- for class --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                     <b class="h-loop-value">Train Class:</b>
                   </div>

             
                    
                   <div class="col-sm-6">
                     <b>{{$students->section->class_name}}</b>
                   </div>
                  

                

                 </div>
                 
               </div>
               {{-- end for class --}}


               {{-- for period --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                     <b class="h-loop-value">Train Period:</b>
                   </div>

                 
                   <div class="col-sm-6">
                     <b>{{$students->section->period}}</b>
                   </div>
                  

                 </div>
                 
               </div>
               {{-- end for period --}}



               {{-- for start time --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                      <b class="h-loop-value">Start_Time:</b>
                   </div>

                   
                   <div class="col-sm-6">
                     <b>{{$students->section->starttime}}</b>
                   </div>
                   

                 </div>
                 
               </div>
               {{-- end for start time --}}



               {{-- for end time --}}
               <div class="n-nameforloop">

                 <div class="row">
                   <div class="col-sm-6">
                      <b class="h-loop-value">End_Time:</b>
                   </div>

                  
                   <div class="col-sm-6">
                     <b>{{$students->section->endtime}}</b>
                   </div>
                  

                 </div>
                 
               </div>
               {{-- end for end time --}}






              
             </div>
              
             {{--  end for image --}}

              </div>
              {{-- col-sm-3 --}}
            


               <a href="{{route('interfaceclass')}}" style="text-decoration: none;" class="n-primary">Back</a>

  

             




            </div>
            {{-- end row --}}
            




          </div>
          {{-- end UI design --}}





@endsection


