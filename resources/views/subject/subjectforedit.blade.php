
@extends('layouts.app')
@section('title', 'Subject_edit | Page')
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
						<div class="alert alert-primary" role="alert">
						 {{session('success')}}
						</div>

						@endif



						{{-- form --}}
						<form action="{{route('subject_update', $subject->id)}}" method="POST">
							@csrf

							{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Subject</label>
						<input type="text" class="form-control" name="subname" 
						value="{{$subject->subname}}">
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
							  	{{($teacher->id==$subject->teacher->id?'selected':null)}}  >
							  	
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
							  	{{($section->id==$subject->section->id?'selected':null)}}>
							  	
							  	{{$section->class_name}}	
							  	</option>
							  	@endforeach
							  </select>
							  		
						</div>
							{{-- end teacher --}}


						<button class="btn btn-success" type="submit">Update</button>
						<a href="{{route('subject')}}" class="btn btn-danger">Cancle</a>
							
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