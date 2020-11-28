
@extends('layouts.app')
@section('title', 'Report Page')
@section('content') 
  {{-- container-fluid --}}
<div class="container-fluid" style="margin-top: 45px; border-top: 1px solid black;">
  {{-- row --}}
  <div class="row">
    {{-- column 3 --}}
    <div class="col-sm-2 n-vartical">
    {{-- report --}}
    <div class="report">  
      <h3 class="n-report-z h-attendance">Attendance</h3>
      
    </div>
    {{-- end report --}}
      {{-- for attendance --}}
    <div class="row n-ruller">
      <a href="{{route('attendance')}}" class="n-double" style="text-decoration: none;">
        
        <i class="fa fa-bar-chart n-papper" aria-hidden="true"></i>
                <span class="n-attendance-for">Attendance</span>
          
        
      </a>
          </div>
    {{-- end for attendance --}}  
      {{-- for teachers --}}  
        <div class="row n-ruller">
      <a href="{{route('teacher')}}" class="n-double" style="text-decoration: none;">
        <i class="fa fa-suitcase n-papper" aria-hidden="true"></i>
        
      <span class="n-attendance-for n-teacher-for">Teachers</span>  
      </a>
        </div>
    
    {{-- end for teachers --}}  

      {{-- for students --}}  
      {{-- for students --}}  
      {{-- for students --}}
      <div class="row n-ruller n-second-rullerjs" id="show">
     {{-- second --}}
      <a href="#" class="n-double" style="text-decoration: none;">        <i class="fa fa-users n-papper" aria-hidden="true"></i>
        <span class="n-student-for">Students</span>
        <i class="fa fa-caret-down n-back-lop" aria-hidden="true"></i>     </a>
      {{-- end second --}}      {{-- hide --}}
       <div class="n-forjs" id="hide">
          <ul>
            <li>
              <a href="{{route('department-page')}}">Department</a>
            </li>
          </ul>           <ul style="margin-bottom: 0px;">
            <li>
              <a href="{{route('section-page')}}" class="n-fomular" style="padding-right: 150px;">Class</a>
            </li>
          </ul>
        </div>
        {{--end hide --}}
        </div>
            {{-- end for students --}}
    
    {{-- end for students --}}  
      {{-- for report --}}  
        <div class="row n-ruller">
      <a href="{{route('report')}}" class="n-double" style="text-decoration: none;">
        
        <i class="fa fa-file-text n-papper" aria-hidden="true"></i>
        <span class="n-attendance-for n-report-forfor">Report</span>
          
        
      </a>
        </div>
    
    {{-- end for report --}}
        {{-- for message --}} 
          <div class="row n-ruller">
      <a href="{{route('message')}}" class="n-double" style="text-decoration: none;">
        
        <i class="fa fa-commenting n-papper" aria-hidden="true"></i>
        <span class="n-attendance-for n-message-for">Message</span> 
      </a>
          </div>
    
    {{-- end for message --}}   
                
    </div>


    {{-- end column 3 --}}  

      {{-- column 9 --}}
    <div class="col-sm-9">
      {{-- learn and play --}}
      <div class="n-learn-play">
        <a href="#" class="n-play" style="text-decoration: none;">
          Learn & play
        </a>
        
      </div>
      {{-- end learn and play --}}      {{-- learn and play --}}
      <div class="n-learn-play n-forstudents-2">
        <a href="#" class="n-play" style="text-decoration: none;">
          Forstudents
        </a>
        
      </div>
      {{-- end learn and play --}}  

          {{-- learn and play --}}
      <div class="n-learn-play n-leave-out">
        <a href="#" class="n-play" style="text-decoration: none;">
          Leave_Out
        </a>
        
      </div>
      {{-- end learn and play --}}    
    </div>

    {{-- end column 9 --}}  
  </div>
  {{-- end row --}}
  
</div>
{{-- end container-fluid --}}

@endsection


