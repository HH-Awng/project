


@extends('layouts.app')
@section('title', 'Student_edit Page')
@section('content')

	 
{{-- report --}}
    <div class="report">  
      <h3 class="n-report-z n-stu_edit-h">Student Edit</h3>
      
    </div>
    {{-- end report --}}





	{{-- container --}}
	<div class="container">
		{{-- row --}}
		<div class="row justify-content-center h-form-row">			
			{{-- columns --}}
			<div class="col-md-8">

			




				{{-- card --}}
				<div class="card">
					{{-- card body --}}
					<div class="card-body">
						@if(session('success'))
						<div class="alert alert-primary" role="alert" id="h-alert">
						 {{session('success')}}<i class="fa fa-times-circle" aria-hidden="true" id="h-cross"></i>
						</div>

						@endif



						{{-- form --}}
						<form action="{{route('student_update', $student->id)}}" method="POST"
						enctype="multipart/form-data">
							@csrf

							{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Name</label>
						<input type="text" class="form-control" name="studentname" placeholder="Name" 
						value="{{$student->name}}">
						@error('studentname')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
							{{-- form control --}}


						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Age</label>
						<input type="text" class="form-control" name="studentage" placeholder="Age" 
						value="{{$student->age}}">
						@error('studentage')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
						{{-- form control --}}


						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Rank</label>
						<input type="text" class="form-control" name="studentrank" placeholder="Rank" 
						value="{{$student->rank}}">
						@error('studentrank')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
						{{-- form control --}}

						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Register_No</label>
						<input type="text" class="form-control" name="studentreg_no" placeholder="Register_No" 
						value="{{$student->Reg_No}}">
						@error('studentreg_no')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
						{{-- form control --}}

						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Gender</label>
						{{-- <input type="radio" class="form-control" name="teachgender"
						value="male" checked> --}}
						<input type="radio" name="studentgender" value="male" @if ($student->gender=="male") checked @endif>Male
						 

						<input type="radio" name="studentgender" value="female" @if ($student->gender=="female") checked @endif>Female
						{{-- <input type="radio" class="form-control" name="teachgender"
						value="female"> --}}
						
							
							</div>
						{{-- form control --}}


						{{-- section --}}
						<div class="form-group">
							  <label for="exampleInputEmail1">Class</label>

							  <select class="form-control" name="section_id">

							  	@foreach($sections as $section)
							  	<option value="{{$section->id}}"
							  	{{($section->id==$student->section->id?'selected':null)}}>
							  	
							  	{{$section->class_name}}	
							  	</option>
							  	@endforeach
							  </select>
							  		
						</div>
						{{-- end section --}}



						{{-- department --}}
						<div class="form-group">
							  <label for="exampleInputEmail1">Department</label>

							  <select class="form-control" name="department_id">

							  	@foreach($departments as $department)
							  	<option value="{{$department->id}}"
							  	{{($department->id==$student->department->id?'selected':null)}}>
							  	
							  	{{$department->name}}	
							  	</option>
							  	@endforeach
							  </select>
							  		
						</div>
						{{-- end department --}}



						{{-- subject --}}
						<div class="form-group">
							  <label for="exampleInputEmail1">Subject</label>

							  <select class="form-control" name="subject_id">

							  	<option disabled selected >-----------------------</option>

							  	@foreach($subjects as $subject)
							  	<option value="{{$subject->id}}"
							  	{{($subject->id==$student->subject->id?'selected':null)}}>
							  	
							  	{{$subject->subname}}	
							  	</option>
							  	@endforeach
							  </select>
							  		
						</div>
						{{-- end subject --}}





						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Image</label>
						<input type="file" class="form-control" name="studentimage" multiple>
						@error('studentimage')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
						{{-- form control --}}



						<button class="btn btn-success" type="submit">Update</button>
							
						</form>
						{{-- form --}}
					</div>
					{{-- card body --}}
				</div>
				{{-- end card --}}				
			</div>
			{{-- end columns --}}
		</div>
		{{-- end row --}}			
	



	


	</div>
	{{-- container --}}







   



@endsection

