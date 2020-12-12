

@extends('layouts.app')
@section('title', 'Teacher_edit Page')
@section('content')



{{-- report --}}
    <div class="report">  
      <h3 class="n-report-z n-teacheredit-h">Teacher Edit</h3>
      
    </div>
    {{-- end report --}}

	{{-- container --}}
	<div class="container">
		{{-- row --}}
		<div class="row justify-content-center">			
			{{-- columns --}}
			<div class="col-md-8">
				{{-- card --}}
				<div class="card">
					{{-- card body --}}
					<div class="card-body">
						@if(session('success'))
						<div class="alert alert-primary" role="alert">
						 {{session('success')}}
						</div>

						@endif



						{{-- form --}}
						<form action="{{route('teacher_update', $teachers->id)}}" method="post"
						enctype="multipart/form-data">
							@csrf

							{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Name</label>
						<input type="text" class="form-control" name="teachername" 
						value="{{$teachers->name}}">
							
							@error('teachername')
							<p style="color:red;">{{$message}}</p>
							@enderror
							
							</div>
							{{-- form control --}}


						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Age</label>
						<input type="text" class="form-control" name="teacherage" value="{{$teachers->age}}">
							
							@error('teacherage')
							<p style="color:red;">{{$message}}</p>
							@enderror

							</div>
						{{-- form control --}}


						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Rank</label>
						<input type="text" class="form-control" name="teacherrank"
						value="{{$teachers->rank}}">
								
								@error('teacherrank')
								<p style="color:red;">{{$message}}</p>
								@enderror
							
							</div>
						{{-- form control --}}

						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Register_No</label>
						<input type="text" class="form-control" name="registerno"
						value="{{$teachers->Reg_No}}">
						
							@error('registerno')
							<p style="color:red;">{{$message}}</p>
							@enderror
							</div>
						{{-- form control --}}

						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Gender</label>
						{{-- <input type="radio" class="form-control" name="teachgender"
						value="male" checked> --}}
						<input type="radio" name="teachgender"
						 value="male"
						 @if ($teachers->gender=="male") checked @endif>Male

						<input type="radio" name="teachgender" value="female"
						@if ($teachers->gender=="female") checked @endif>Female
							


							
							</div>
						{{-- form control --}}


						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Image</label>
						<input type="file" class="form-control" name="teachimage"
						multiple>

						@error('teachimage')
						<p style="color:red;">{{$message}}</p>
						@enderror
						
							
							</div>
						{{-- form control --}}



						<button class="btn btn-success" type="submit">Update</button>
						<a href="{{route('student-create')}}" class="btn btn-danger">Cancle</a>
							
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

