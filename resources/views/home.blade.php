{{-- @extends('layouts.app')
 <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@section('content')
<div class="container-fluid back">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <a href="{{route('first')}}" class="btn btn-success">home</a>


                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}
 

 

   <!DOCTYPE html>
   <html>
   <head>
       <title>Home Page</title>
       <meta charset="utf-8">
       <link href="{{ asset('css/home.css') }}" rel="stylesheet">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
       
   </head>
   <body class="makker">

   {{-- container-fluid --}}
       <div class="container-fluid h-color">

         
       {{-- Headding Text --}}
        <div class="all-back">

            <div class="team">
                <h1>STUDENTS MANENGEMENT PROCESS</h1>
                <p>THERE IS NO "I" IN "TEAM"</p>
            </div>                  
        </div>
       {{-- Heading Text --}}

       {{-- Container --}}

       <div class="n-container-for">
        {{-- row --}}
         <div class="row h-row-pad">

            {{-- attendance --}}
           <div class="col-sm-2 n-col-padding">
            <a href="{{route('attendance')}}" class="n-link-icon">
              <i class="fa fa-bar-chart" aria-hidden="true"></i>
            </a>
            <h4 class="n-planet">Attendance</h4>
            <p>“A measure of the number of members who attend school and the amount of time they are present.”
          </p>
            {{-- image one --}}
            <div class="h-image">
              <img src="{{asset('/upload/1.png')}}">
            </div>
            {{-- image one --}}
            
           </div>
           {{-- end attendance --}}

           {{-- teacher --}}
           <div class="col-sm-2 n-col-padding">
             <a href="{{route('teacher')}}" class="n-link-icon">
             <i class="fa fa-suitcase" aria-hidden="true"></i>
            </a>
            <h4 class="n-planet">Teachers</h4>
            <p>“ The mediocre teacher tells. The good teacher explains. The superior teacher demonstrates. The great teacher inspires.
”</p>
            {{-- image two --}}
            <div class="h-image">
              <img src="{{asset('/upload/2.png')}}">
            </div>
            {{-- image two --}}
           </div>
           {{-- end teacher --}}

           {{-- student --}}
           <div class="col-sm-2 n-col-padding">
            <a href="{{route('stu_department')}}" class="n-link-icon">
             <i class="fa fa-users" aria-hidden="true"></i>
            </a>
            <h4 class="n-planet">Students</h4>
            <p>“When students improve their attendance rates, they improve their academic prospects and chances for graduating.”</p>
            {{-- image three --}}
            <div class="h-image">
              <img src="{{asset('/upload/3.png')}}">
            </div>
            {{-- image three --}}


           </div>
           {{-- end student --}}

           {{-- report --}}
            <div class="col-sm-2 n-col-padding">
            <a href="{{route('report')}}" class="n-link-icon">
             <i class="fa fa-file-text" aria-hidden="true"></i> 
            </a>
            <h4 class="n-planet">Report</h4>
            <p>“On the Internet, to report is to notify the administrator of a website or application about a problem.”</p>
            {{-- image four --}}
            <div class="h-image">
              <img src="{{'/upload/5.png'}}">
            </div>
            {{-- image four --}}

           </div>
           {{-- end report --}}

           {{-- message --}}
            <div class="col-sm-2 h-hrline text-center">
            <a href="{{route('leavestudentpage')}}" class="n-link-icon">
              <i class="fa fa-commenting" aria-hidden="true"></i>
            </a>
            <h4 class="n-planet">Leave_Out</h4>
            <p>“The man who does not read books has no advantage over the one who cannot read them.”
            </p>
            {{-- image five --}}
            <div class="h-image">
              <img src="{{'/upload/6.png'}}">
            </div>
            {{-- image five --}}
           </div>
           {{-- end message --}}


         </div>
         {{-- row --}}
          {{-- progress --}}
            
           {{-- <div class="progress">
            <div class="progress-bar bg-white" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div> --}}
            {{-- progress --}}

       {{-- footer-image --}}
            <div class="row text-center row-equal">

              {{-- columns-one --}}
              <div class="col-sm-4">
                  <img src="/upload/under2.png" class="h-arrow1">
              </div>
              {{-- columns-one --}}
              {{-- columns-two --}}
              <div class="col-sm-4" style="padding-top: 115px;">
                  <a href="{{route('onlyforstudentpage')}}">
                  <img src="/upload/cicle.png" class="h-circle">
                  </a>
              </div>
              {{-- columns-two --}}
              {{-- columns-three --}}
              <div class="col-sm-4">
                    <img src="/upload/under1.png" class="h-arrow2">

              </div>
              {{-- columns-three --}}             


            </div>
      {{-- footer-image --}}
       </div>   
      
       {{-- Container --}}

    </div>
   

   {{-- container-fluid --}}


   </body>
   </html>










