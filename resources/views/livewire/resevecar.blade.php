<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Elghazal Website Description">
    <meta name="keyword" content="Website Keywords">
    <meta name="author" content="Elghazal">
      <!-- Title -->
    <title>ALGHAZAL Website | Home Page</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assetscar/img/favicon/favicon-32x32.png')}}">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{asset('assetscar/css/bootstrap.css')}}">
    <!--Font Awesome css-->
    <link rel="stylesheet" href="{{asset('assetscar/css/font-awesome.min.css')}}">
    <!--Magnific css-->
    <link rel="stylesheet" href="{{asset('assetscar/css/magnific-popup.css')}}">
    <!--Owl-Carousel css-->
    <link rel="stylesheet" href="{{asset('assetscar/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetscar/css/owl.theme.default.min.css')}}">
    <!--Animate css-->
    <link rel="stylesheet" href="{{asset('assetscar/css/animate.min.css')}}">
    <!--Datepicker css-->
    <link rel="stylesheet" href="{{asset('assetscar/css/jquery.datepicker.css')}}">
    <!--Nice Select css-->
    <link rel="stylesheet" href="{{asset('assetscar/css/nice-select.css')}}">
    <!-- Lightgallery css -->
    <link rel="stylesheet" href="{{asset('assetscar/css/lightgallery.min.css')}}">
    <!--ClockPicker css-->
    <link rel="stylesheet" href="{{asset('assetscar/css/jquery-clockpicker.min.css')}}">
    <!--Slicknav css-->
    <link rel="stylesheet" href="{{asset('assetscar/css/slicknav.min.css')}}">
    <!--Site Main Style css-->
    <link rel="stylesheet" href="{{asset('assetscar/css/style.css')}}">
    <!--Responsive css-->
    <link rel="stylesheet" href="{{asset('assetscar/css/responsive.css')}}">
      @livewireStyles
      
       
</head>
<body>
<!-- Header Top Area Start -->
<section class="elgazal-header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="header-top-left">
                    <p>Need Help?: <i class="fa fa-phone"></i> Call: +965 12345678</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="header-top-right">
                    <a href="login.html">
                        <i class="fa fa-key"></i>
                        login
                    </a>
                    <a href="register.html">
                        <i class="fa fa-user"></i>
                        register
                    </a>
                    <div class="dropdown">

                      {{--   <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang"
                                data-toggle="dropdown" aria-haspopup="true"> English
                        </button> --}}

                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Header Top Area End -->


<!-- Main Header Area Start -->
<header class="elgazal-main-header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="site-logo">
                    <a href="index.html">
                        <img style="width: 234px;margin-top: -16px !important;margin-bottom: -14px;" src="{{asset('assetscar/img/logo.jpg')}}" alt="elgazal"/>
                    </a>
                </div>
            </div>
            <div style="margin-top: 15px;" class="col-lg-6 col-sm-9">
                <div class="header-promo">
                    <div class="single-header-promo">
                        <div class="header-promo-icon">
                            <img src="{{asset('assetscar/img/globe.png')}}" alt="globe"/>
                        </div>
                        <div class="header-promo-info">
                            <h3>Saudi Arabia</h3>
                            <p>King Khalid Airport Terminal 2 - Riyadh</p>
                        </div>
                    </div>
                    <div class="single-header-promo">
                        <div class="header-promo-icon">
                            <img src="{{asset('assetscar/img/clock.png')}}" alt="clock"/>
                        </div>
                        <div class="header-promo-info">
                            <h3>Saturday to Thursday</h3>
                            <p>9:00am - 6:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="header-action">
                    <a href="contact.html"><i class="fa fa-phone"></i> Request a call</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Header Area End -->


<!-- Mainmenu Area Start -->
<section class="elgazal-mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="mainmenu">
                    <nav>
                        <ul id="elgazal_navigation">
                            <li class="active"><a href="index.html">home</a></li>
                            <li><a href="about.html">about</a></li>
                            <li><a href="cars.html">Our Fleet</a></li>
                            <li><a href="deals.html">Deals</a></li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="main-search-right">
                    <!-- Responsive Menu Start -->
                    <div class="elgazal-responsive-menu"></div>
                    <!-- Responsive Menu Start -->
                    <!-- Search Box Start -->
                    <div class="search-box">
                        <form>
                            <input type="search" placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Search Box End -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Mainmenu Area End -->

<!-- Breadcromb Area Start -->
<section class="elgazal-breadcromb-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>Reservation</h3>
                    <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcromb Area End -->
@livewire('reserve')

@livewireScripts
@include('pagesLayout.footer')
@yield('scripts')