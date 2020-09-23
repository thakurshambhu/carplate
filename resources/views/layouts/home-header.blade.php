<?php 
    use \App\Http\Controllers\HomeController;
    HomeController::header_counter(); 
    // echo "<pre>";
    // print_r(Session::get('saved_count')); die;

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vanity.Club</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet"> 

     <!-- CSS 
    ========================= -->
     <!--bootstrap min css-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!--slick min css-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!--font awesome css-->
    <link rel="stylesheet" href="{{asset('assets/css/font.awesome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/fontawesome.min.css"  />
    <!--ionicons min css-->
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    <!--animate css-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
    <!--slinky menu css-->
    <link rel="stylesheet" href="{{asset('assets/css/slinky.menu.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/stylesheet.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/custom-style.css')}}">
    
    <!--modernizr min js here-->
    <script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/toastr.css')}}">
    <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css')  }}">

</head>

<body class=""> <!-- showmenu -->


    <header class="header_area header_padding">
        <!--header bottom satrt-->
        <div class="header_bottom header_b_three sticky-header d-flex align-items-center">
            <div class="logo">
                <a href="{{url('/')}}"><img src="{{asset('images/VanityCLUB-Logotype-White.png')}}" alt=""></a>
            </div>
            <div class="ml-auto">
              <button class="menu-button menu-toggle" role="button" aria-label="Toggle Navigation">
                <b>
                  <span class="line"></span>
                  <span class="line"></span>
                  <span class="line"></span>
                </b>
              </button>
            </div>

            <nav class="menu">
              <div class="menu-background">
                <ul>
                  <li><a href="{{url('about-us')}}">About Us</a></li>
                  <li><a href="{{url('contact-us')}}"> Contact Us</a></li>
                  <li><a href="{{url('blogs')}}">Blogs</a></li>
                  @if (Route::has('login'))
                     @auth
                        <li><a href="{{url('profile')}}">Profile </a></li>
                        <li><a href="{{url('logout')}}">Logout </a></li>
                    @else
                        <li class="language">
                            <a href="{{ route('login') }}">Sign In</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="currency">
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                  @endif
                </ul>
              </div>
            </nav>
        </div>
        <!--header bottom end-->

    </header>
    <div class="header-pad"></div>