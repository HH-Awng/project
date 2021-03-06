<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/png" href="{{asset('/upload/logo.png')}}">
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/alljs.js') }}" defer></script>
   {{--  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
     {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

 --}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/forapp.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('css/indexhome.css')}}">
   


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm navbar-new sticky-top">
            <div class="container-fluid">
                <img src="{{asset('/upload/logo.png')}}">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>       
                

                {{-- search --}}
                <div class="search">
            
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg mr-sm-2" placeholder="What are you looking for?" />
                   {{--  <span>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span> --}}
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                           <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </span>
                </div>
            </div>
       {{--  --}}
                </div>
                {{-- search --}}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"> </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                           {{--  @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>


                                 @if (Auth::user())
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif



                        @endguest
                    </ul>
                </div>
            </div>
        </nav>






        {{-- start --}}


         {{-- container-fluid --}}
<div class="container-fluid" style="margin-top: 45px; border-top: 1px solid black;">
  {{-- row --}}
  <div class="row">
    {{-- column 3 --}}
    <div class="col-sm-2 n-vartical">
    {{-- report --}}
   {{--  <div class="report">  
      <h3 class="n-report-z n-attendancen-n-loop">Attendance</h3>
      
    </div> --}}
    {{-- end report --}}
      {{-- for attendance --}}
    <div class="row n-ruller">
      <a href="{{route('attendance')}}" class="n-double" style="text-decoration: none;">
        
        <i class="fa fa-bar-chart n-papper" aria-hidden="true"></i>
                <span class="n-attendance-for">Attendance</span>
          
        
      </a>
          </div>
    {{-- end for attendance --}}  
      {{-- for teachers --}}  
        <div class="row n-ruller">
      <a href="{{route('teacher')}}" class="n-double" style="text-decoration: none;">
        <i class="fa fa-suitcase n-papper" aria-hidden="true"></i>
        
      <span class="n-attendance-for n-teacher-for">Teachers</span>  
      </a>
        </div>
    
    {{-- end for teachers --}}  

      {{-- for students --}}  
      {{-- for students --}}  
      {{-- for students --}}
      <div class="row n-ruller n-second-rullerjs" id="show">
     {{-- second --}}
      <a href="{{route('stu_department')}}" class="n-double" style="text-decoration: none;"> 
          <i class="fa fa-users n-papper" aria-hidden="true"></i>
        <span class="n-student-for">Students</span>
        <i class="fa fa-caret-down n-back-lop" aria-hidden="true"></i> 
      </a>
      {{-- end second --}} 
           {{-- hide --}}
       <div class="n-forjs" id="hide">
          <ul>
            <li>
              <a href="{{route('stu_department')}}" id="departshow">Department</a>
            </li>
          </ul> 
              <ul style="margin-bottom: 0px;">
            <li>
              <a href="{{route('interfaceclass')}}" class="n-fomular" style="padding-right: 150px;">Class</a>
            </li>
          </ul>
        </div>
        {{--end hide --}}
        </div>
            {{-- end for students --}}
            
    
    {{-- end for students --}}  
      {{-- for report --}}  
        <div class="row n-ruller">
      <a href="{{route('report')}}" class="n-double" style="text-decoration: none;">
        
        <i class="fa fa-file-text n-papper" aria-hidden="true"></i>
        <span class="n-attendance-for n-report-forfor">Report</span>
          
        
      </a>
        </div>
    
    {{-- end for report --}}
       
                
    </div>


    {{-- end column 3 --}}  

      {{-- column 9 --}}
    <div class="col-sm-9">
      {{-- learn and play --}}
      <div class="n-learn-play" style="visibility: hidden;">
        <a href="#" class="n-play" style="text-decoration: none;">
          Learn & play
        </a>  
      </div>
      {{-- end learn and play --}}      {{-- learn and play --}}
      <div class="n-learn-play n-forstudents-2">
        <a href="{{route('onlyforstudentpage')}}" class="n-play" style="text-decoration: none;">
          Forstudents
        </a>
        
      </div>
      {{-- end learn and play --}}  

          {{-- learn and play --}}
      <div class="n-learn-play n-leave-out">
        <a href="{{route('leavestudentpage')}}" class="n-play" style="text-decoration: none;">
          Leave_Out
        </a>
        
      </div>
      {{-- end learn and play --}}   




       <main class="py-4">
            @yield('content')
        </main>















       
    </div>

    {{-- end column 9 --}}  
  </div>
  {{-- end row --}}
  
</div>
{{-- end container-fluid --}}

        {{-- end start --}}

       


        


    </div>
</body>
</html>
