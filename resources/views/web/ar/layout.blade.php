<!DOCTYPE html>
<html lang="ar" class="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Qurain Motors</title>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href={{ asset('assetssmart/css/owl.carousel.min.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/owl.theme.default.min.css') }} />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset('assetssmart/css/bootstrap.min-ar.css') }} />

    <link rel="stylesheet"
        href="https://intl-tel-input.com/node_modules/intl-tel-input/build/css/intlTelInput.css?1549804213570" />

    <!-- Common CSS -->
    <link rel="stylesheet" href={{ asset('assetssmart/css/common.css') }} />

    <!-- Home Page CSS -->
    <link rel="stylesheet" href={{ asset('assetssmart/css/home.css') }} />

    <!-- Responsive CSS -->
    <link rel="stylesheet" href={{ asset('assetssmart/css/responsive.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/car2.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/about.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/account-setting.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/account.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/car-details.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/cars.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/common.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/checkout.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/confirm-payment.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/contact.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/my-rental.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/owl.carousel.min.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/owl.theme.default.min.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/privacy.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/responsive.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/sign-in.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/checkout.css') }} />
    <link rel="stylesheet" href={{ asset('assetssmart/css/rtl.css') }} />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a,
        span,
        input,
        button {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>

<body>
    <!-- Header Part HTML Start -->

    <header>
        <!-- Navigation Section HTML Start -->

        <section id="Header">
            <nav class="navbar navbar-expand-xl light-header">
                <div style="direction: rtl" class="container">

                    <a class="logo" href="{{ url('home') }}"><img
                            src={{ asset('assetssmart/images/header/logo.svg') }} alt="logo" /></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="toggler-icon top-bar"></span>
                        <span class="toggler-icon middle-bar"></span>
                        <span class="toggler-icon bottom-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav pl-md-5 mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('ar/home') }}">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('ar/about') }}">عن الشركه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('ar/cars') }}">السيارات</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('ar/contact') }}">تواصل معنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('home') }}"> English</a>
                            </li>
                        </ul>
                        <div class="navbar-nav ml-auto mt-2 mt-xl-0">
                            <div class="nav-buttons d-flex align-items-center">

                                @if( !empty(auth()->user()->id) && auth()->user()->type == 'client')
                                <a class="ps-4" href="{{ url('ar/myrental') }}">
                                    <img draggable="false" src={{ asset('assetssmart/images/header/user.svg') }}
                                        alt="user" />
                                </a>
                                <a href="#">
                                    <form action="{{url("logout")}}" method="post" >
                                        @csrf
                                        <button type="submit">تسجيل الخروج</button>
                                    </form>
                                </a>

                                @elseif (!empty(auth()->user()->id) && auth()->user()->type == 'admin')
                                <a href="{{url("en/Cats")}}">
                                     Admin Dashboard
                                </a>
                                @else
                                <a href="{{url("login")}}">
                                    تسجيل دخول
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </section>

        <!-- Navigation Section HTML End -->




        @yield('content')




        <!-- Footer Part HTML Start -->

        <?php $setting = \App\Models\Setting::find(1);
        $about = \App\Models\About::find(1);
        ?>
        <footer id="Footer">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-lg-5">
                            <div class="footer-about">
                                <div class="footer-logo">
                                    <a href="#">
                                        <img src={{ asset('assetssmart/images/footer/logo.svg') }} alt="logo" />
                                    </a>
                                </div>
                                <p>
                                    {{$about->getTranslation('desc_bottom', 'ar')}}
                                </p>

                            </div>
                        </div>
                        <div class="col-lg-7 mt-4 mt-lg-0">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 mt-4 mt-sm-0">
                                    <div class="footer-nav">
                                        <h4>روابط هامه</h4>
                                        <div class="footer-menu">
                                            <li>
                                                <img draggable="false"
                                                    src={{ asset('assetssmart/images/footer/check-icon.svg') }}
                                                    alt="check-icon" />
                                                <a href="{{url('ar/home')}}">الرئيسية</a>
                                            </li>
                                            <li>
                                                <img draggable="false"
                                                    src="{{ asset('assetssmart/images/footer/check-icon.svg') }}"
                                                    alt="check-icon" />
                                                <a href="{{url('ar/about')}}">عن الشركة</a>
                                            </li>
                                            <li>
                                                <img draggable="false"
                                                    src="{{ asset('assetssmart/images/footer/check-icon.svg') }}"
                                                    alt="check-icon" />
                                                <a href="{{url('ar/cars')}}">السيارات</a>
                                            </li>
                                            <li>
                                                <img draggable="false"
                                                    src="{{ asset('assetssmart/images/footer/check-icon.svg') }}"
                                                    alt="check-icon" />
                                                <a href="{{url('ar/contact')}}">تواصل معنا</a>
                                            </li>
                                            <li>
                                                <img draggable="false"
                                                    src="{{ asset('assetssmart/images/footer/check-icon.svg') }}"
                                                    alt="check-icon" />
                                                <a href="{{url('home')}}">English</a>
                                            </li>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 mt-4 mt-md-0">

                                    <div class="footer-nav">
                                        <h4>تواصل معنا</h4>
                                        <div class="footer-contact-details">
                                            @if($setting->phone != null)
                                            <li>
                                                <a href="tel:{{$setting->phone}}">
                                                    <img draggable="false"
                                                         src={{ asset('assetssmart/images/footer/phone.svg') }}
                                                alt="phone" />
                                                    {{$setting->phone}}
                                                </a>
                                            </li>
                                            @endif
                                            @if($setting->mobile != null)
                                            <li>
                                                <a href="tel:{{$setting->mobile}}">
                                                    <img draggable="false"
                                                         src={{ asset('assetssmart/images/footer/phone.svg') }}
                                                alt="phone" />
                                                    {{$setting->mobile}}
                                                </a>
                                            </li>
                                                @endif
                                            @if($setting->email != null)
                                            <li>
                                                <a href="mailto:{{$setting->email}}">
                                                    <img draggable="false"
                                                         src={{ asset('assetssmart/images/footer/email.svg') }}
                                                alt="email" />
                                                    {{$setting->email}}
                                                </a>
                                            </li>
                                            @endif
                                                @if($setting->address1 != null)
                                            <li>
                                                <a href="{{url('contact')}}">
                                                    <img draggable="false"
                                                         src={{ asset('assetssmart/images/footer/loacation-small.png') }}
                                                alt="loacation-small" />
                                                    {{$setting->address1}}
                                                </a>
                                            </li>
                                                @endif
                                                @if($setting->address2 != null)
                                            <li>
                                                <a href="{{url('contact')}}">
                                                    <img draggable="false"
                                                         src={{ asset('assetssmart/images/footer/loacation-small.png') }}
                                                alt="loacation-small" />
                                                    {{$setting->address2}}
                                                </a>
                                            </li>
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />
                <div class="container">
                    <div class="footer-copyright">
                        <div class="copyright-text">
                            <p>جميع الحقوق محفوظة © شركة القرين 2023.</p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>

        <!-- Footer Part HTML End -->

        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <!-- Owl Carousel JavaScript -->
        <script src={{ asset('assetssmart/js/owl.carousel.min.js') }}></script>

        <script src="https://intl-tel-input.com/node_modules/intl-tel-input/build/js/intlTelInput.js?1549804213570"></script>


        <!-- Bootstrap JavaScript -->
        <script src={{ asset('assetssmart/js/bootstrap.min.js') }}></script>

        <!-- Custom JavaScript -->
        <script src={{ asset('assetssmart/js/script.js') }}></script>

        <script>
            function getVals() {
                // Get slider values
                let parent = this.parentNode;
                let slides = parent.getElementsByTagName("input");
                let slide1 = parseFloat(slides[0].value);
                let slide2 = parseFloat(slides[1].value);
                // Neither slider will clip the other, so make sure we determine which is larger
                if (slide1 > slide2) {
                    let tmp = slide2;
                    slide2 = slide1;
                    slide1 = tmp;
                }

                let displayElement = parent.getElementsByClassName("range-values")[0];

                //innerHTML property allows Javascript code to manipulate a website being displayed
                displayElement.innerHTML = "$" + slide1 + " - " + "$" + slide2;
            }

            window.onload = function() {
                // Initialize Sliders
                let sliderSections = document.getElementsByClassName("range-slider");
                for (let x = 0; x < sliderSections.length; x++) {
                    let sliders = sliderSections[x].getElementsByTagName("input");
                    for (let y = 0; y < sliders.length; y++) {
                        if (sliders[y].type === "range") {
                            //oninput attribute fires when the value of an <input> element is changed
                            sliders[y].oninput = getVals;
                            // Manually trigger event first time to display values
                            sliders[y].oninput();
                        }
                    }
                }
            };
        </script>


        <script>
            var countryData = window.intlTelInputGlobals.getCountryData(),
                input = document.querySelector("#phone"),
                addressDropdown = document.querySelector("#address-country");

            // init plugin
            var iti = window.intlTelInput(input, {
                hiddenInput: "full_phone",
                utilsScript: "https://intl-tel-input.com/node_modules/intl-tel-input/build/js/utils.js?1549804213570",
            });

            // populate the country dropdown
            for (var i = 0; i < countryData.length; i++) {
                var country = countryData[i];
                var optionNode = document.createElement("option");
                optionNode.value = country.iso2;
                var textNode = document.createTextNode(country.name);
                optionNode.appendChild(textNode);
                addressDropdown.appendChild(optionNode);
            }
            // set it's initial value
            addressDropdown.value = iti.getSelectedCountryData().iso2;

            // listen to the telephone input for changes
            input.addEventListener("countrychange", function(e) {
                addressDropdown.value = iti.getSelectedCountryData().iso2;
            });

            // listen to the address dropdown for changes
            addressDropdown.addEventListener("change", function() {
                iti.setCountry(this.value);
            });
        </script>

        <script>
            var countryData = window.intlTelInputGlobals.getCountryData(),
                input = document.querySelector("#phone"),
                addressDropdown = document.querySelector("#address-country");

            // init plugin
            var iti = window.intlTelInput(input, {
                hiddenInput: "full_phone",
                utilsScript: "https://intl-tel-input.com/node_modules/intl-tel-input/build/js/utils.js?1549804213570",
            });

            // populate the country dropdown
            for (var i = 0; i < countryData.length; i++) {
                var country = countryData[i];
                var optionNode = document.createElement("option");
                optionNode.value = country.iso2;
                var textNode = document.createTextNode(country.name);
                optionNode.appendChild(textNode);
                addressDropdown.appendChild(optionNode);
            }
            // set it's initial value
            addressDropdown.value = iti.getSelectedCountryData().iso2;

            // listen to the telephone input for changes
            input.addEventListener("countrychange", function(e) {
                addressDropdown.value = iti.getSelectedCountryData().iso2;
            });

            // listen to the address dropdown for changes
            addressDropdown.addEventListener("change", function() {
                iti.setCountry(this.value);
            });
        </script>

        <script>
            // Eye On Off on Password

            const eye = document.querySelector(".eye");
            const password = document.getElementById("password");
            const eyeOff = document.getElementById("eye-off");
            const eyeOn = document.getElementById("eye-on");

            eye.addEventListener("click", function() {
                if (password.type === "password") {
                    password.type = "text";
                    eyeOff.style.display = "block";
                    eyeOn.style.display = "none";
                } else {
                    password.type = "password";
                    eyeOff.style.display = "none";
                    eyeOn.style.display = "block";
                }
            });
        </script>
</body>

</html>
