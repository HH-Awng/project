
@extends('layouts.app')
@section('title', 'Teacher Page')
@section('content') 
   


  {{-- report --}}
    <div class="report">  
      <h3 class="n-report-z n-teacher-h">Teacher</h3>
      
    </div>
    {{-- end report --}}


          {{-- UI design --}}
          <div class="container newforcontainer">



            
            {{-- row --}}
            <div class="row" style="text-align: center;">


               




  <table class="table">
  

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Image</th>
      
      <th scope="col">Name</th>
      <th scope="col">Register_NO</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

   @foreach($subjects as $key=>$subject)
  <tbody>
    <tr>
      <th scope="row"><p class="n-forkeyone">{{++$key}}.</p></th>
      <td>
            
            <div>
                  <img src="{{asset('/storage/imagestore/'.$subject->teacher->image)}}" class="none-imagemap border border-ligh">
              </div>

      </td>


      
       <td>
             <p class="n-forkeyone">{{$subject->teacher->name}}</p>
      </td>



        <td>

           <p class="n-forkeyone">{{$subject->teacher->Reg_No}}</p>
        
        </td>


      <td>
            
            <!-- Example single danger button -->
            <div class="btn-group">
              <button type="button" class="btn btn-danger dropdown-toggle n-forkeyone" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #01a197; border-color: #01a197">
                Action
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('teacher_edit',  $subject->teacher_id)}}">Edit</a>
                <a class="dropdown-item" href="{{route('teacher-delete',  $subject->teacher_id)}}"
                  onclick="return confirm('Are you sure to delete?')">Delete</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('one_teacher', $subject->teacher_id)}}">Personal data</a>
              </div>
            </div>
            <!-- Example single danger button -->

      </td>
    </tr>
   
  </tbody>

  @endforeach

</table>
 {{$subjects->links()}}
              

             




            </div>
            {{-- end row --}}
            




          </div>
          {{-- end UI design --}}







@endsection


