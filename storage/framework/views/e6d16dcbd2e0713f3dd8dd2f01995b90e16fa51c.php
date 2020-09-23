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
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vanity.Club</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('images/favicon.ico')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet"> 

     <!-- CSS 
    ========================= -->
     <!--bootstrap min css-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <!--slick min css-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick.css')); ?>">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>">
    <!--font awesome css-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font.awesome.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/fontawesome.min.css"  />
    <!--ionicons min css-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ionicons.min.css')); ?>">
    <!--animate css-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.css')); ?>">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.min.css')); ?>">
    <!--slinky menu css-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slinky.menu.css')); ?>">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins.css')); ?>">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/stylesheet.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom-style.css')); ?>">
    
    <!--modernizr min js here-->
    <script src="<?php echo e(asset('assets/js/vendor/modernizr-3.7.1.min.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/toastr.css')); ?>">
    <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/sweetalert.css')); ?>">

</head>

<body class=""> <!-- showmenu -->


    <header class="header_area header_padding">
        <!--header bottom satrt-->
        <div class="header_bottom header_b_three sticky-header d-flex align-items-center">
            <div class="logo">
                <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/VanityCLUB-Logotype-White.png')); ?>" alt=""></a>
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
                  <li><a href="<?php echo e(url('about-us')); ?>">About Us</a></li>
                  <li><a href="<?php echo e(url('contact-us')); ?>"> Contact Us</a></li>
                  <li><a href="<?php echo e(url('blogs')); ?>">Blogs</a></li>
                  <?php if(Route::has('login')): ?>
                     <?php if(auth()->guard()->check()): ?>
                        <li><a href="<?php echo e(url('profile')); ?>">Profile </a></li>
                        <li><a href="<?php echo e(url('logout')); ?>">Logout </a></li>
                    <?php else: ?>
                        <li class="language">
                            <a href="<?php echo e(route('login')); ?>">Sign In</a>
                        </li>
                        <?php if(Route::has('register')): ?>
                            <li class="currency">
                                <a href="<?php echo e(route('register')); ?>">Register</a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                  <?php endif; ?>
                </ul>
              </div>
            </nav>
        </div>
        <!--header bottom end-->

    </header>
    <div class="header-pad"></div><?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views/layouts/home-header.blade.php ENDPATH**/ ?>