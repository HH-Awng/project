


@extends('layouts.app')
@section('title', 'Teacher category')
@section('content')

	

	 




      	{{-- container --}}
	<div class="container">
		{{-- row --}}
		<div class="row justify-content-center h-form-row">			
			{{-- columns --}}
			<div class="col-md-8">

				{{-- <a href="{{route('attendance')}}" class="btn btn-primary">Back</a> --}}

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
						<form action="{{route('student_store')}}" method="POST" enctype="multipart/form-data">
							@csrf

							{{-- form control --}}
							<div class="form-group">
						{{-- <label for="exampleInputPassword1">Name</label> --}}
						<input type="text" class="form-control" name="studentname" placeholder="Name" 
						value="{{old('studentname')}}">
						@error('studentname')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
							{{-- form control --}}


						{{-- form control --}}
							<div class="form-group">
						{{-- <label for="exampleInputPassword1">Age</label> --}}
						<input type="text" class="form-control" name="studentage" placeholder="Age" 
						value="{{old('studentage')}}">
						@error('studentage')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
						{{-- form control --}}


						{{-- form control --}}
							<div class="form-group">
						{{-- <label for="exampleInputPassword1">Rank</label> --}}
						<input type="text" class="form-control" name="studentrank" placeholder="Rank" 
						value="{{old('studentrank')}}">
						@error('studentrank')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
						{{-- form control --}}

						{{-- form control --}}
							<div class="form-group">
						{{-- <label for="exampleInputPassword1">Register_No</label> --}}
						<input type="text" class="form-control" name="studentreg_no" placeholder="Register_No" 
						value="{{old('studentreg_no')}}">
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
						<input type="radio" name="studentgender" value="male" checked>Male
						<input type="radio" name="studentgender" value="female">Female
						{{-- <input type="radio" class="form-control" name="teachgender"
						value="female"> --}}
						
							
							</div>
						{{-- form control --}}


						{{-- section --}}
						<div class="form-group">
							  <label for="exampleInputEmail1">Class</label>

							  <select class="form-control" name="section_id">

							  	<option disabled selected >-----------------------</option>

							  	@foreach($sections as $section)
							  	<option value="{{$section->id}}"
							  	{{($section->id==old('section_id')?'selected':null)}}>
							  	
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

							  	<option disabled selected >-----------------------</option>

							  	@foreach($departments as $department)
							  	<option value="{{$department->id}}"
							  	{{($department->id==old('department_id')?'selected':null)}}>
							  	
							  	{{$department->name}}	
							  	</option>
							  	@endforeach
							  </select>
							  		
						</div>
						{{-- end department --}}



						{{-- department --}}
						<div class="form-group">
							  <label for="exampleInputEmail1">Subject</label>

							  <select class="form-control" name="subject_id">

							  	<option disabled selected >-----------------------</option>

							  	@foreach($subjects as $subject)
							  	<option value="{{$subject->id}}"
							  	{{($subject->id==old('subject_id')?'selected':null)}}>
							  	
							  	{{$subject->subname}}	
							  	</option>
							  	@endforeach
							  </select>
							  		
						</div>
						{{-- end department --}}





						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Image</label>
						<input type="file" class="form-control" name="studentimage">
						@error('studentimage')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
						{{-- form control --}}



						<button class="btn btn-success" type="submit">Create</button>
							
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
	



	{{-- row --}}
	<div class="row justify-content-center">
		{{-- columns --}}
		<div class="col-sm-12">
			{{-- table --}}
				<table class="table table-hover">
					{{-- thead --}}
					<thead>
						<tr>
						<th>No</th><th>Name</th><th>Date</th><th>Age</th><th>Rank</th><th>Reg-No</th><th>Gender</th><th>Class</th><th>Department</th><th>Subject</th><th>image</th><th>Action</th>
					</tr>
					</thead>
					{{-- thead --}}

					{{-- tbody --}}
					@foreach($students as $key=>$student)
					<tbody>						
						<tr>
							<td>{{++$key}}</td><td>{{$student->name}}</td>
							<td>{{$student->created_at}}</td>
							<td>{{$student->age}}</td>
							<td>{{$student->rank}}</td>
							<td>{{$student->Reg_No}}</td>
							<td>{{$student->gender}}</td>
							
							<td>{{$student->section->class_name}}</td>
							<td>{{$student->department->name}}</td>
							<td>{{$student->subject->subname}}</td>
							<td>
							@if(isset($student->image))
							<img src="{{asset('/storage/imagestore/'.$student->image)}}" class="img-thumbnail"
							style="border-radius:0px; width:100px; height:auto;">
							@endif
							</td>
							

							<td><a href="{{route('student_edit', $student->id)}}" style="color: red;">Edit</a></td>
							<td>
							<a href="{{route('student-delete', $student->id)}}" style="color: red;" onclick="return confirm('Are you sure to delete?')">Delete</a>
							</td>
							
						</tr>
					</tbody>
					@endforeach
					{{-- tbody --}}
				</table>
				{{-- table --}}
		</div>
		{{-- end columns --}}
	</div>
	{{-- end row --}}


	</div>
	{{-- container --}}





















  





@endsection

