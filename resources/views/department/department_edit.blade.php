
@extends('layouts.app')
@section('title', 'department | edit')
@section('content')
	{{-- container --}}
<div class="container">
	<div class="row justify-content-center">
		<div class="col-sm-8">
			{{-- card --}}
			<div class="card">
				<div class="card-body">
					@if(session('success'))
					<div class="alert alert-primary" role="alert">
					 <b>Record Updated successfully!</b>
					</div>
					@endif


					{{-- form --}}
					<form action="{{route('department_update', $departments->id)}}"
					 method="POST">
						@csrf
						<div class="form-group">
							 <label for="exampleInputPassword1">Department</label>
							 <input type="text" name="department_name" class="form-control"
							  value="{{$departments->name}}">
							  @error('department_name')
							  <small style="color: red;">{{$message}}</small>
							  @enderror
						</div>

						<button type="submit" class="btn btn-danger">Update</button>

					</form>
					{{-- form --}}
					
				</div>
			</div>
			{{-- card --}}
		</div>
	</div>
	
</div>
	{{-- container --}}	






@endsection