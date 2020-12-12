<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <meta charset="utf-8">
     <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">


</head>
<body>

    <div class="content welcome-all">




                    {{-- wel-user --}}
                    <div class="wel-user">
                        <h1 class="n-page">Welcome To Our Page</h1>
                    </div>
                    {{-- end wel-user --}}

                           

                
                <div class="links">


                    @if (Route::has('login'))
                <div class="links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                         <a class="n-forlogin" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                           {{--  <a href="{{ route('register') }}">Register</a> --}}
                        @endif
                    @endauth
                </div>
                 @endif

                   {{--  <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                </div>
            </div>

</body>
</html>





   
        

            
        
   