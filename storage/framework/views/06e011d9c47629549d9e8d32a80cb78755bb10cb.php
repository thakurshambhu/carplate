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

<body class="home-page"> <!-- showmenu -->


    <header class="header_area header_padding">
        <!--header top start-->
        <!-- <div class="header_top top_two">
            <div class="container">
                <div class="top_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="follow_us">
                                <label>Follow Us:</label>
                                <ul class="follow_link">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-right">
                                <ul>
                                    <?php if(Route::has('login')): ?>
                                         <?php if(auth()->guard()->check()): ?>
                                        <li class="top_links"><a href="#"><i class="ion-android-person"></i> My Account<i class="ion-ios-arrow-down"></i></a>
                                            <ul class="dropdown_links">
                                                <li><a href="<?php echo e(url('profile')); ?>">Profile </a></li>
                                                <li><a href="<?php echo e(url('logout')); ?>">Logout </a></li>
                                            </ul>
                                        </li>
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
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--header top start-->
        <!--header middel start-->
        <!-- <div class="header_middle middle_two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="logo">
                            <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/VanityCLUB-Logotype-V2.png')); ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="middel_right">
                            <div class="search-container search_two">
                                <form method="POST" action="<?php echo e(url('searching_plates')); ?>">
                                <?php echo csrf_field(); ?>
                                    <div class="search_box">
                                        <input placeholder="Search number plates  here ..." type="text" class="inputTextBox" maxlength="7" name="search_filter">
                                        <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                    </div>
                                </form>
                            </div>

                            <div class="middel_right_info">

                                <div class="header_wishlist">
                                    <a href="<?php echo e(url('saved-plate')); ?>"><span class="lnr lnr-heart"></span> Wish list </a>
                                    <span class="wishlist_quantity saved_count"><?php echo e(session('saved_count')); ?></span>
                                </div>
                                <div class="mini_cart_wrapper">
                                    <a href="<?php echo e(url('cart')); ?>"><span class="lnr lnr-cart"></span>My Cart </a>
                                    <span class="cart_quantity cart_count"><?php echo e(session('cart_count')); ?></span>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--header middel end-->
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

                    <!-- <div class="col-12">
                        <div class="main_menu header_position">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo e(url('about-us')); ?>">About Us</a></li>
                                    <li><a href="<?php echo e(url('contact-us')); ?>"> Contact Us</a></li>
                                    <li><a href="<?php echo e(url('blogs')); ?>">Blogs</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div> -->
        </div>
        <!--header bottom end-->

    </header>

    <!--Offcanvas menu area start-->
    <!-- <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span>MENU</span>
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">

                        <div class="canvas_close">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>


                         <div class="top_right text-right">
                                <ul>
                                    <?php if(Route::has('login')): ?>
                                         <?php if(auth()->guard()->check()): ?>
                                        <li class="top_links"><a href="#"><i class="ion-android-person"></i> My Account<i class="ion-ios-arrow-down"></i></a>
                                            <ul class="dropdown_links">
                                                <li><a href="<?php echo e(url('profile')); ?>">Profile </a></li>
                                                <li><a href="<?php echo e(url('logout')); ?>">Logout </a></li>
                                            </ul>
                                        </li>
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
                      <div class="Offcanvas_follow">
                            <label>Follow Us:</label>
                            <ul class="follow_link">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="search-container">
                            <form method="POST" action="<?php echo e(url('searching_plates')); ?>">
                              <?php echo csrf_field(); ?>   
                                <div class="search_box">
                                    <input placeholder="Search number plates here ..." type="text" class="inputTextBox" maxlength="7" name="search_filter">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                               
                              
                                <li class="menu-item-has-children">
                                    <a href="<?php echo e(url('about-us')); ?>">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="<?php echo e(url('contact-us')); ?>"> Contact Us</a>
                                </li>
                                 <li class="menu-item-has-children">
                                    <a href="<?php echo e(url('blogs')); ?>">Blogs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> -->
    <!--Offcanvas menu area end--><?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views/layouts/header.blade.php ENDPATH**/ ?>