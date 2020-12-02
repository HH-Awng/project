


@extends('layouts.app')
@section('title', 'Subject page')
@section('content')

	{{-- container --}}
	<div class="container">

		<a href="{{route('attendance')}}" class="btn btn-primary">Back</a>
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
						<form action="{{route('subject_store')}}" method="POST">
							@csrf

							{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Subject</label>
						<input type="text" class="form-control" name="subname" 
						value="{{old('subname')}}">
						@error('subname')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
							{{-- form control --}}


							{{-- teacher --}}
						<div class="form-group">
							  <label for="exampleInputEmail1">Teacher</label>
							  <select class="form-control" name="teach_id">
							  	@foreach($teachers as $teacher)
							  	<option value="{{$teacher->id}}"
							  	{{($teacher->id==old('name')?'selected':null)}}  >
							  	
							  	{{$teacher->name}}	
							  	</option>
							  	@endforeach
							  </select>
							  		
						</div>
							{{-- end teacher --}}



							{{-- teacher --}}
						<div class="form-group">
							  <label for="exampleInputEmail1">Class</label>

							  <select class="form-control" name="section_id">

							  	@foreach($sections as $section)
							  	<option value="{{$section->id}}"
							  	{{($section->id==old('class_name')?'selected':null)}}>
							  	
							  	{{$section->class_name}}	
							  	</option>
							  	@endforeach
							  </select>
							  		
						</div>
							{{-- end teacher --}}


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
						<th>No</th><th>Subject</th><th>Date</th><th>Teacher</th><th>Class</th><th>Action</th>
					</tr>
					</thead>
					{{-- thead --}}

					{{-- tbody --}}
						<tbody>	
					@foreach($subjects as $key=>$subject)
									
						<tr>
								<td>{{++$key}}</td>
								<td>{{$subject->subname}}</td>
								<td>{{$subject->created_at}}</td>
								<td>{{$subject->teacher->name}}</td>
								<td>{{$subject->section->class_name}}</td>

							<td><a href="{{route('subject__edit', $subject->id)}}" style="color: red;">Edit</a></td>

							<td>
							<a href="{{route('subject-delete', $subject->id)}}" style="color: red;" onclick="return confirm('Are you sure to delete?')">Delete</a>
							</td>
							
						</tr>
					
					@endforeach
					</tbody>
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

