
@extends('layouts.app')
@section('title', 'Report Page')
@section('content')	
	

{{-- report --}}
    <div class="report">  
      <h3 class="n-report-z n-reportnap-h">Report</h3>
      
    </div>
    {{-- end report --}}
		




	   <span><a href="{{route('teacher-page')}}" class="btn btn-danger">teacher</a></span>
       <span><a href="{{route('subject')}}" class="btn btn-primary">subject</a></span>
       <span><a href="{{route('student-create')}}" class="btn btn-success">student</a></span>
       <span><a href="{{route('department-page')}}" class="btn btn-success">department</a></span>
       <span><a href="{{route('section-page')}}" class="btn btn-success">class</a></span>
        
	

@endsection


