


@extends('layouts.app')
@section('title', 'Students_section category')
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
						 <b class="h-span">Record deleted successfully!</b>
						</div>

						@endif



						{{-- form --}}
						<form action="{{route('section_store')}}" method="POST">
							@csrf

							{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Class</label>
						<input type="text" class="form-control" name="classname" 
						value="{{old('classname')}}">
						@error('classname')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
							{{-- form control --}}


						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Period</label>
						<input type="text" class="form-control" name="period"
						value="{{old('period')}}">
						@error('period')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
						{{-- form control --}}


						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">Start-Time</label>
						<input type="text" class="form-control" name="starttime"
						value="{{old('starttime')}}">
						@error('starttime')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
						{{-- form control --}}

						{{-- form control --}}
							<div class="form-group">
						<label for="exampleInputPassword1">End-Time</label>
						<input type="text" class="form-control" name="endtime"
						value="{{old('endtime')}}">
						@error('endtime')
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
						<th>No</th><th>Name</th><th>Date</th><th>Peroid</th><th>Start-Time</th><th>End-Time</th><th>Action</th>
					</tr>
					</thead>
					{{-- thead --}}

					{{-- tbody --}}
					@foreach($sections as $key=>$section)
					<tbody>						
						<tr>
								<td>{{++$key}}</td><td>{{$section->class_name}}</td>
								<td>{{$section->created_at}}</td>
							<td>{{$section->period}}</td>
							<td>{{$section->starttime}}</td>
							<td>{{$section->endtime}}</td>
							

							<td><a href="{{route('section_edit', $section->id)}}" style="color: red;">Edit</a></td>
							<td>
							<a href="{{route('section-delete', $section->id)}}" style="color: red;" onclick="return confirm('Are you sure to delete?')">Delete</a>
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

