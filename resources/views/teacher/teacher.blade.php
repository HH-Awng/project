


@extends('layouts.app')
@section('title', 'Teacher category')
@section('content')

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
						<div class="alert alert-primary" role="alert" id="h-alert">
						 {{session('success')}}<i class="fa fa-times-circle" aria-hidden="true" id="h-cross"></i>
						</div>

						@endif



						{{-- form --}}
						<form action="{{route('teacher_store')}}" method="POST"
						enctype="multipart/form-data">
							@csrf

							{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Name</label>
						<input type="text" class="form-control" name="teachername" 
						value="{{old('teachername')}}">
						@error('teachername')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
							{{-- form control --}}


						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Age</label>
						<input type="text" class="form-control" name="teacherage"
						value="{{old('teacherage')}}">
						@error('teacherage')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
						{{-- form control --}}


						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Rank</label>
						<input type="text" class="form-control" name="teacherrank"
						value="{{old('teacherrank')}}">
						@error('teacherrank')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
						{{-- form control --}}

						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Register_No</label>
						<input type="text" class="form-control" name="registerno"
						value="{{old('registerno')}}">
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
						<input type="radio" name="teachgender" value="male" checked>Male
						<input type="radio" name="teachgender" value="female">Female
						{{-- <input type="radio" class="form-control" name="teachgender"
						value="female"> --}}
						@error('registerno')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
						{{-- form control --}}


						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Image</label>
						<input type="file" class="form-control" name="teachimage"
						value="{{old('teachimage')}}">
						@error('teachimage')
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
		<div class="col-sm-10">
			{{-- table --}}
				<table class="table table-hover">
					{{-- thead --}}
					<thead>
						<tr>
						<th>No</th><th>Name</th><th>Date</th><th>Age</th><th>Rank</th><th>Reg-No</th><th>Gender</th><th>image</th><th>Action</th>
					</tr>
					</thead>
					{{-- thead --}}

					{{-- tbody --}}
					@foreach($teachers as $key=>$teacher)
					<tbody>						
						<tr>
								<td>{{++$key}}</td><td>{{$teacher->name}}</td>
								<td>{{$teacher->created_at}}</td>
							<td>{{$teacher->age}}</td>
							<td>{{$teacher->rank}}</td>
							<td>{{$teacher->Reg_No}}</td>
							<td>{{$teacher->gender}}</td>
							<td>
							@if(isset($teacher->image))
							<img src="{{asset('/storage/imagestore/'.$teacher->image)}}" class="img-thumbnail"
							style="border-radius:0px; width:100px; height:auto;">
							@endif	
							</td>

							

							<td><a href="{{route('teacher_edit', $teacher->id)}}" style="color: red;">Edit</a></td>
							<td>
							<a href="{{route('teacher-delete', $teacher->id)}}" style="color: red;" onclick="return confirm('Are you sure to delete?')">Delete</a>
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

