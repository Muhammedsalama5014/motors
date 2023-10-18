<!doctype html>
<html dir="rtl" lang="ar">
<head>
        <title>دكتور فواز الخطيب </title>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="description" content="" />

        <meta name="keywords" content="" />

        <meta name="developer" content="Smart Target">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="{{asset("assets/images/favicon.ico")}}">

        <link rel="shortcut icon" href="{{asset("assets/images/apple-icon.png")}}">

        <link rel="shortcut icon" sizes="72x72" href="{{asset("assets/images/apple-icon-72x72.png")}}">

        <link rel="shortcut icon" sizes="114x114" href="{{asset("assets/images/apple-icon-114x114.png")}}">

        <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset("assets/icons/font-awesome-4.7.0/css/font-awesome.min.css")}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset("assets/plugins/css/bootstrap.min.css")}}">
        <!-- Animate CSS-->
        <link rel="stylesheet" href="{{asset("assets/plugins/css/animate.css")}}">
        <!-- Owl Carousel CSS-->
        <link rel="stylesheet" href="{{asset("assets/plugins/css/owl.css")}}">
        <!-- Fancybox-->
        <link rel="stylesheet" href="{{asset("assets/plugins/css/jquery.fancybox.min.css")}}">
        <!-- Custom CSS-->
        <link rel="stylesheet" href="{{asset("assets/css/styles.css")}}">

        <link rel="stylesheet" href="{{asset("assets/css/responsive.css")}}">
    </head>
    <body class="dark-vertion black-bg mh-rtl">

        <!-- Start Loader -->
        <div class="section-loader">
            <div class="loader">
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- End Loader -->


        <!--
        ===================
           NAVIGATION
        ===================
        -->
        <header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav" id="mh-header">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg mh-nav nav-btn">
                        <a class="navbar-brand" href="#">
                            <img style="width: 200px" src="{{asset("assets/images/smart.png")}}" alt="" class="img-fluid">
                            <!-- <h2>Maha</h2> -->
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto ml-auto">
                                <li class="nav-item ">
                                    <a style="font-family: 'Amiri', serif;" class="nav-link" href="{{url("home")}}">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a style="font-family: 'Amiri', serif;" class="nav-link" href="{{url("biography")}}">السيره الذاتية</a>
                                </li>
                                <li class="nav-item">
                                   <a style="font-family: 'Amiri', serif;" class="nav-link" href="{{url("media")}}">ميديا</a>
                                </li>
                                <li class="nav-item">
                                   <a style="font-family: 'Amiri', serif;" class="nav-link" href="{{url("articles")}}">آراء ودراسات</a>
                                </li>
                                <li class="nav-item">
                                    <a style="font-family: 'Amiri', serif;" class="nav-link" href="{{url("contact")}}">تواصل معنا</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <!-- home 2 -->
        <section class="mh-home image-bg home-2-img" id="mh-home">
            <div class="img-foverlay img-color-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="mh-page-title text-center col-sm-12">
                            <h2>آراء ودراسات</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
            PORTFOLIO
        ===================
        -->
        <section class="mh-portfolio" id="mh-portfolio">
            <div class="container">
                <div class="row section-separator">
                    <div class="part col-sm-12">
                        <div class="portfolio-nav col-sm-12" id="filter-button">
                            <ul>
                                 <li data-filter="*" class="current"> <span>جميع الفئات</span></li>
                                 @foreach ($cats as $cat)

                                <li data-filter=".amgad{{$cat->id}}"><span> {{$cat->name}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mh-project-gallery col-sm-12" id="project-gallery">
                            <div class="portfolioContainer row">
                                @foreach ($articles as $a)

                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 amgad{{$a->cat_id}}">
                                    <figure>
                                        <img src="{{asset("uploads/$a->img_main")}}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">التصميم الإبداعي</h5>
                                            <span class="sub-title">التصوير</span>
                                            <a data-fancybox data-src="#mh{{$a->id}}"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                @endforeach
                            </div> <!-- End: .grid .project-gallery -->
                        </div> <!-- End: .grid .project-gallery -->
                    </div> <!-- End: .part -->
                </div> <!-- End: .row -->
            </div>

            @foreach ($articles as $a)
            <div class="mh-portfolio-modal" id="mh{{$a->id}}">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>{{$a->name}} </h2>
                            <p>
                                {{$a->desc}}
                            </p>



                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <img src="{{asset("uploads/$a->img_sub")}}" alt="" class="img-fluid">
                                <p>{{$a->name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </section>

        <!--
        ===================
            FOOTER
        ===================
        -->
        <footer class="mh-footer" id="mh-contact">
            <div class="map-image">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 mh-copyright">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="text-center text-xs-center">
                                        <p>جميع الحقوق محفوظة Smart Target @ 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!--
        ==============
        * JS Files *
        ==============
        -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <!-- jQuery -->
        <script src="{{asset("assets/plugins/js/jquery.min.js")}}"></script>
        <!-- popper -->
        <script src="{{asset("assets/plugins/js/popper.min.js")}}"></script>
        <!-- bootstrap -->
        <script src="{{asset("assets/plugins/js/bootstrap.min.js")}}"></script>
        <!-- owl carousel -->
        <script src="{{asset("assets/plugins/js/owl.carousel.js")}}"></script>
        <!-- validator -->
        <script src="{{asset("assets/plugins/js/validator.min.js")}}"></script>
        <!-- wow -->
        <script src="{{asset("assets/plugins/js/wow.min.js")}}"></script>
        <!-- mixin js-->
        <script src="{{asset("assets/plugins/js/jquery.mixitup.min.js")}}"></script>
        <!-- circle progress-->
        <script src="{{asset("assets/plugins/js/circle-progress.js")}}"></script>
        <!-- jquery nav -->
        <script src="{{asset("assets/plugins/js/jquery.nav.js")}}"></script>
        <!-- Fancybox js-->
        <script src="{{asset("assets/plugins/js/jquery.fancybox.min.js")}}"></script>
        <!-- isotope js-->
        <script src="{{asset("assets/plugins/js/isotope.pkgd.js")}}"></script>
        <script src="{{asset("assets/plugins/js/packery-mode.pkgd.js")}}"></script>
        <!-- Map api -->
        <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCRP2E3BhaVKYs7BvNytBNumU0MBmjhhxc"></script>
        <!-- Custom Scripts-->
        <script src="{{asset("assets/js/map-init.js")}}"></script>
        <script src="{{asset("assets/js/custom-scripts.js")}}"></script>
    </body>
</html>
