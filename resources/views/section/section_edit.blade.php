

@extends('layouts.app')
@section('title', 'students_section | edit')
@section('content')
	{{-- container --}}
<div class="container">
	<div class="row justify-content-center">
		<div class="col-sm-8">
			{{-- card --}}
			<div class="card">
				<div class="card-body">
					
					@if(session('success'))
					<div class="alert alert-primary" role="alert" id="h-alert">
					 <b class="h-span">Record Updated successfully!</b>

					</div>

					@endif


					{{-- form --}}
					<form action="{{route('section_update', $sections->id)}}"
					 method="POST">
						@csrf

						{{-- form control --}}
						<div class="form-group">
							 <label for="exampleInputPassword1">Class</label>
							 <input type="text" name="classname" class="form-control"
							  value="{{$sections->class_name}}">
							  @error('classname')
							  <small style="color: red;">{{$message}}</small>
							  @enderror
						</div>
						{{-- form control --}}



					{{-- form control --}}
						<div class="form-group">
							 <label for="exampleInputPassword1">Period</label>
							 <input type="text" name="period" class="form-control"
							  value="{{$sections->period}}">
							  @error('period')
							  <small style="color: red;">{{$message}}</small>
							  @enderror
						</div>
					{{-- form control --}}

					{{-- form control --}}
						<div class="form-group">
							 <label for="exampleInputPassword1">Start-Time</label>
							 <input type="text" name="starttime" class="form-control"
							  value="{{$sections->starttime}}">
							  @error('starttime')
							  <small style="color: red;">{{$message}}</small>
							  @enderror
						</div>
					{{-- form control --}}

					{{-- form control --}}
						<div class="form-group">
							 <label for="exampleInputPassword1">End-Time</label>
							 <input type="text" name="endtime" class="form-control"
							  value="{{$sections->endtime}}">
							  @error('endtime')
							  <small style="color: red;">{{$message}}</small>
							  @enderror
						</div>
					{{-- form control --}}




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