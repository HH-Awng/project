


@extends('layouts.app')
@section('title', 'Attendance Page')
@section('content') 
  

  {{-- report --}}
    <div class="report">  
      <h3 class="n-report-z n-attendance-h">Attendance</h3>
      
    </div>
    {{-- end report --}}


    {{-- Attendance List --}}
    <div class="container">
    	
    	<div class="row">
    		
    		{{-- table --}}
    		<table border="1" cellpadding="8" cellspacing="5">

    			<th>Today:Attdance List <br>
    			ATT</th>

    			{{-- first tr --}}
    			<tr>
    				
    				<th class="h-td-padd">Student</th>
    				<th class="h-td-present">Present</th>
    				<th class="h-td-present">Absent</th>
    				@foreach($attdances as $key=>$attdance)
    				 <th>
    				 	
    				 			{{-- <td scope="row" style="padding-top: 50px;">{{++$key}}.</td>
                                <td><img src="{{asset('/storage/imagestore/'.$student->image)}}" class="n-loopimagefirst"></td>
                                <td style="padding-top: 50px;">{{$student->name}}</td>
                                <td style="padding-top: 50px;">{{$student->age}}</td>
                                <td style="padding-top: 50px;">{{$student->rank}}</td>
                                <td style="padding-top: 50px;">{{$student->Reg_No}}</td>
                                <td style="padding-top: 50px;">{{$student->gender}}</td>
                                <td style="padding-top: 50px;">{{$student->department->name}}</td>
                                <td style="padding-top: 50px;">{{$student->subject->subname}}</td> --}}
    				 </th>


    				@endforeach

    			</tr>
    			{{-- first tr --}}

    			{{-- second tr --}}
    			<tr>

    			</tr>

    			{{-- second tr --}}
    			
    			

    		</table>
    		

    		{{-- end table --}}

    	</div>
    </div>


   

    {{-- End Attendance List --}}
    









@endsection


