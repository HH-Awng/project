

@extends('layouts.app')
@section('title', 'Students_Class Page')
@section('content') 
  


{{-- report --}}
    <div class="report">  
      <h3 class="n-report-z n-stuclass-h">Student Class</h3>
      
    </div>
    {{-- end report --}}


      {{-- view for student_department container--}}
      <div class="contaienr" style="margin-top: 75px;">
            {{-- view for student_department --}}

            @foreach($sections as $key=>$section)
            {{-- first row --}}
            <div class="row">

              {{-- Guan Mean --}}
              <div class="h_stu_department n-stu-department">
                
                <a href="#">{{$section->class_name}}</a>





                     <div class="row  justify-content-center n-guan-firstrow">
                      {{-- Guan Mean for student_department --}}
                      <div class="n-guan-mean">
                        
                      <div class="row">
                        
                        <div class="col-sm-12">
                          
                            {{-- table --}}
                          <table class="table table-hover">
                              <thead>
                              <tr>
                                <th scope="col">No</th><th scope="col">Image</th><th scope="col">Name</th><th scope="col">Age</th><th scope="col">Rank</th><th scope="col">Reg_No</th><th scope="col">Gender</th><th scope="col">Department</th><th scope="col">Subject</th><th>Action</th>
                              </tr>
                            </thead>
                 <tbody>
                              @foreach($section->students as $key=>$student)
                               @if($student->breaker==1)
                              <tr>
                                <td scope="row" style="padding-top: 50px;">{{++$key}}.</td>
                                <td><img src="{{asset('/storage/imagestore/'.$student->image)}}" class="n-loopimagefirst"></td>
                                <td style="padding-top: 50px;">{{$student->name}}</td>
                                <td style="padding-top: 50px;">{{$student->age}}</td>
                                <td style="padding-top: 50px;">{{$student->rank}}</td>
                                <td style="padding-top: 50px;">{{$student->Reg_No}}</td>
                                <td style="padding-top: 50px;">{{$student->gender}}</td>
                                <td style="padding-top: 50px;">{{$student->department->name}}</td>
                                <td style="padding-top: 50px;">{{$student->subject->subname}}</td>
                                <td> 
                                  <!-- Example single danger button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger dropdown-toggle n-forkeyone" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #01a197; border-color: #01a197">
                            Action
                          </button>

                          <div class="dropdown-menu">
                            <a class="dropdown-item h-textdecoration" href="{{route('student_edit', $student->id)}}">Edit</a>
                            <a class="dropdown-item h-textdecoration" href="{{route('student-delete', $student->id)}}"  onclick="return confirm('Are you sure to delete?')">Delete</a>
                            <a class="dropdown-item h-textdecoration" href="#">Leave out</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item h-textdecoration"
                             href="{{route('onestudentclass', $student->id)}}">Personal data</a>
                          </div>
                        </div>
                        <!-- Example single danger button -->
                              </td>
                              </tr>

                              @endif
                              @endforeach




                  </tbody>



                          </table>
                          
                            {{-- end table --}}
                        </div>

                      </div>
                          
                        
                       


                      </div>
                     {{-- end Guan Mean for studnet_department --}}
                  </div>
                
              </div>

              {{-- end Guan Mean --}}


             
              


            </div>
            {{-- end first row --}}
            @endforeach

            {{$sections->links()}}




            {{-- end view for student_department --}}
      </div>
      {{-- end view for student_department container--}}
      










@endsection


