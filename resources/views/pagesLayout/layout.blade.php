<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Elghazal Website Description">
    <meta name="keyword" content="Website Keywords">
    <meta name="author" content="Elghazal">
    @yield('css')
        @include('pagesLayout.header')
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
                    <a href="{{route('login')}}">
                        <i class="fa fa-key"></i>
                        login
                    </a>
                    <a href="{{route('register')}}">
                        <i class="fa fa-user"></i>
                        register
                    </a>





                    {{-- 
                    
                       <div class="btn-group mb-1">
            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @if (App::getLocale() == 'ar')
              {{ LaravelLocalization::getCurrentLocaleName() }}
             <img src="{{ URL::asset('assets/images/flags/EG.png') }}" alt="">
              @else
              {{ LaravelLocalization::getCurrentLocaleName() }}
              <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
              @endif
              </button>
            <div class="dropdown-menu">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                @endforeach
            </div>
        </div>
                    
                     --}}

                  

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
@component('components.navbarcomponent')
    
@endcomponent
<!-- Mainmenu Area End -->
@yield('content')


@include('pagesLayout.footer')
@yield('scripts')