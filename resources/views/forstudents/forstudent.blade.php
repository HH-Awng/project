
@extends('layouts.app')
@section('title', 'Forstudents Page')
@section('content') 
   


 {{-- report --}}
    <div class="report">  
      <h3 class="n-report-z n-forstude-h">Forstudents</h3>
      
    </div>
    {{-- end report --}}



      {{-- Student Check Box --}}


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
                                  
                                  {{-- Form --}}

                                  <div class="h-checkbox">
                                    
                                    {{-- Form --}}
                                    <form method="POST" action="{{route('attdanceform')}}">

                                      @csrf
                                      <input type="hidden" name="studentid" value="{{$student->id}}">
                                      <input type="checkbox" name="checkattend" class="inputcheck"
                                      @if(isset($student->attdances[0]))
                                      @if($student->attdances[0]['status']==1)
                                        checked 
                                      @endif
                                      @endif

                                      >present

                                      <button type="submit">Send</button>

                                    </form>
                                    {{-- Form --}}
                                  </div>

                                  {{-- Form --}}


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







      {{-- Student Check Box --}}











   

@endsection


