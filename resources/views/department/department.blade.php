
@extends('layouts.app')
@section('title', 'Studentsdepartment category')
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
						 <b>Record deleted successfully!</b>
						</div>

						@endif



						{{-- form --}}
						<form action="{{route('department_store')}}" method="POST">
							@csrf
							<div class="form-group">
						<label for="exampleInputPassword1">Department</label>
						<input type="text" class="form-control" name="department_name">
						@error('department_name')
						<p style="color:red;">{{$message}}</p>
						@enderror
							
							</div>
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
		<div class="col-sm-6">
			{{-- table --}}
				<table class="table table-hover">
					{{-- thead --}}
					<thead>
						<tr>
						<th>No</th><th>Name</th><th>Date</th><th>Action</th>
					</tr>
					</thead>
					{{-- thead --}}

					{{-- tbody --}}
					@foreach($departments as $key=>$department)
					<tbody>						
						<tr>
							<td>{{++$key}}</td><td>{{$department->name}}</td>
							<td>{{$department->created_at}}</td>
							<td><a href="{{route('department_edit', $department->id)}}" style="color: red;">Edit</a></td>
							<td>
							<a href="{{route('department-delete', $department->id)}}" style="color: red;" onclick="return confirm('Are you sure to delete?')">Delete</a>
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

