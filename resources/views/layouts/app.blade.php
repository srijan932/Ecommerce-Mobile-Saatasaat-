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
                        <div class="top_bar_contact_item"><div class="top_bar_icon">
                            <!-- <img src="images/phone.png" alt=""> -->
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>9843519975</div>
                        <div class="top_bar_contact_item"><div class="top_bar_icon">
                            <!-- <img src="images/mail.png" alt=""> -->
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>mobilesaatasaat@gmail.com</div>
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_user">
                                    @auth
                                            <div><a href="{{route('posts.index')}}" class="fa fa">My Ads | </a></div>
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

        <!-- Header Main -->

        <div class="header_main">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo"><a href='/'>Mobile Saatasaat</a></div>
                        </div>
                    </div>

                    <!-- Search -->
                    
                    <div id = 'search' class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                        <input type="search" required="required" class="header_search_input" placeholder="Search for products..." id="search_items">
                                        
                                        <button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
        
        <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col">
                        
                        <div class="main_nav_content d-flex flex-row">

                            <!-- Main Nav Menu -->

                            <div class="main_nav_menu ml-auto">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href='/' class="fa fa-home" aria-hidden="true">Home</a></li>
                                    <li><a href="{{route('posts.create')}}" class="fa fa-adn" aria-hidden="true">Post new ad</a></li>
                                    <li><a href="/contact" class="fa fa-phone" aria-hidden="true"> Contact Us</a></li>
                                </ul>
                            </div>

    </header>
    
   
            @yield('content')
    

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 footer_col">
                    <div class="footer_column footer_contact">
                        <div class="logo_container">
                            <div class="logo"><a href="#">Mobile Saatasaat</a></div>
                        </div>
                        <div class="footer_title">Got Question? Call Us 24/7</div>
                        <div class="footer_phone">9843519975</div>
                        <div class="footer_contact_text">
                            <p>44800 Bansgopal</p>
                            <p>Bhaktapur,Nepal</p>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Srijan | Use of this web site constitutes acceptance of the Terms Of Use , Safety Tips, Ad Posting Rules.</a>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/bootstrap1.min.js')}}"></script>
  <script src="{{mix('/js/app.js')}}"></script>
@yield('scripts')

</body>

</html>