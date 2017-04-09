<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <title>Timer Agency Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="{{ themosis_theme_assets() }}/css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="{{ themosis_theme_assets() }}/css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="{{ themosis_theme_assets() }}/css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="{{ themosis_theme_assets() }}/css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="{{ themosis_theme_assets() }}/css/owl.carousel.css">
        <link rel="stylesheet" href="{{ themosis_theme_assets() }}/css/owl.theme.css">
        <link rel="stylesheet" href="{{ themosis_theme_assets() }}/css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="{{ themosis_theme_assets() }}/css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ themosis_theme_assets() }}/css/responsive.css">
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="{{ themosis_theme_assets() }}/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="{{ themosis_theme_assets() }}/js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="{{ themosis_theme_assets() }}/js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="{{ themosis_theme_assets() }}/js/wow.min.js"></script>
        <!-- slider js -->
        <script src="{{ themosis_theme_assets() }}/js/slider.js"></script>
        <script src="{{ themosis_theme_assets() }}/js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="{{ themosis_theme_assets() }}/js/main.js"></script>

        <?php wp_head(); ?>

        {!! Option::get('theme-settings', 'google-analytics') !!}   
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="{{ get_home_url() }}" >
                            <img src="{{ themosis_theme_assets() }}/images/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                        @php
                        wp_nav_menu([
                            'theme_location' => 'main-nav',
                            'container' => false,
                            'items_wrap' => '%3$s'
                        ])
                        @endphp
                        </ul>
                        {{-- <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="{{ get_home_url() }}" >Home</a>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="service.html">Service</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="blog-fullwidth.html">Blog Full</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul> --}}
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>