<!DOCTYPE html>
<html lang="en">
<head>
<title>Mobile Saatasaat</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="MobileSaatasaat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/main_style.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/register_and_add_post_style.css')}}">
<link rel="stylesheet" href="{{asset('css/font_awesome/css/font-awesome.min.css')}}">
@yield('css')
</head>

<body>

<div class="super_container">
    
    <!-- Header -->
    
    <header class="header">

        <!-- Top Bar -->

        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_user">
                                    @auth
                                            <a href='/admin/dashboard' class="fa fa-home" aria-hidden="true">Home | </a>
                                            <div class="fa fa">{{auth()->user()->name}} | <a href="{{route('logout')}}" class="fa fa-sign-out" aria-hidden="true">Logout</a></div>
                                        @else
                                            <div><a href="{{route('register')}}" class="fa fa-user-o" aria-hidden="true"> Register</a></div>
                                            <div><a href="{{route('login')}}" class="fa fa-sign-in" aria-hidden="true"> Member Login</a></div>
                                     @endauth
                                 </div> 
                            
                            </div>
                       
                    </div>
                </div>
            </div>      
        </div>

   
            @yield('content')
    

   


<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/bootstrap1.min.js')}}"></script>
@yield('scripts')

</body>

</html>