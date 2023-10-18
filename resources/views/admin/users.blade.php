<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Karem Admin panal.">
    <meta name="keywords" content="Ahmed karem is the best">
    <meta name="author" content="Ahmed karem">
    <link rel="icon" href="https://alghazal.macaddress-eg.com/assets/img/logo.jpg" type="image/x-icon">
    <link rel="shortcut icon" href="https://alghazal.macaddress-eg.com/assets/img/logo.jpg" type="image/x-icon">
    <title>User Dashborad </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/photoswipe.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="assets/css/vendors/simple-mde.css">
</head>
<body>
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="loader">
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-ball"></div>
    </div>
</div>
<!-- Loader ends-->
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper">
                    <a href="index.html"><img class="img-fluid" src="https://alghazal.macaddress-eg.com/assets/img/logo.jpg" alt=""></a>
                </div>
            </div>
            <div class="left-side-header col ps-0 d-none d-md-block"></div>
            <div class="nav-right col-10 col-sm-6 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                        <div class="mode animated backOutRight">
                            <svg class="lighticon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M18.1377 13.7902C19.2217 14.8742 16.3477 21.0542 10.6517 21.0542C6.39771 21.0542 2.94971 17.6062 2.94971 13.3532C2.94971 8.05317 8.17871 4.66317 9.67771 6.16217C10.5407 7.02517 9.56871 11.0862 11.1167 12.6352C12.6647 14.1842 17.0537 12.7062 18.1377 13.7902Z"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                            <svg class="darkicon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"></path>
                                <path d="M18.3117 5.68834L18.4286 5.57143M5.57144 18.4286L5.68832 18.3117M12 3.07394V3M12 21V20.9261M3.07394 12H3M21 12H20.9261M5.68831 5.68834L5.5714 5.57143M18.4286 18.4286L18.3117 18.3117"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </li>
                    <li class="d-md-none resp-serch-input">
                        <div class="resp-serch-box"><i data-feather="search"></i></div>
                        <div class="form-group search-form">
                            <input type="text" placeholder="Search here...">
                        </div>
                    </li>
                    <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path d="M2.99609 8.71995C3.56609 5.23995 5.28609 3.51995 8.76609 2.94995"
                                          stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path d="M8.76616 20.99C5.28616 20.41 3.56616 18.7 2.99616 15.22L2.99516 15.224C2.87416 14.504 2.80516 13.694 2.78516 12.804"
                                          stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path d="M21.2446 12.804C21.2246 13.694 21.1546 14.504 21.0346 15.224L21.0366 15.22C20.4656 18.7 18.7456 20.41 15.2656 20.99"
                                          stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path d="M15.2661 2.94995C18.7461 3.51995 20.4661 5.23995 21.0361 8.71995"
                                          stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </a></li>
                    <li class="profile-nav onhover-dropdown pe-0 py-0 me-0">
                        <div class="media profile-media">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M9.55851 21.4562C5.88651 21.4562 2.74951 20.9012 2.74951 18.6772C2.74951 16.4532 5.86651 14.4492 9.55851 14.4492C13.2305 14.4492 16.3665 16.4342 16.3665 18.6572C16.3665 20.8802 13.2505 21.4562 9.55851 21.4562Z"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M9.55849 11.2776C11.9685 11.2776 13.9225 9.32356 13.9225 6.91356C13.9225 4.50356 11.9685 2.54956 9.55849 2.54956C7.14849 2.54956 5.19449 4.50356 5.19449 6.91356C5.18549 9.31556 7.12649 11.2696 9.52749 11.2776H9.55849Z"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path d="M16.8013 10.0789C18.2043 9.70388 19.2383 8.42488 19.2383 6.90288C19.2393 5.31488 18.1123 3.98888 16.6143 3.68188"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path d="M17.4608 13.6536C19.4488 13.6536 21.1468 15.0016 21.1468 16.2046C21.1468 16.9136 20.5618 17.6416 19.6718 17.8506"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="user-profile.html"><i data-feather="user"></i><span>حسابي </span></a></li>
                            <li><a href="edit-profile.html"><i data-feather="settings"></i><span>الأعدادات</span></a>
                            </li>
                            <li><a href="login.html"><i data-feather="log-in"> </i><span>تسجيل خروج</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper">
                    <a href="index.html">
                        <img style="width:186px;height:86px" class="img-fluid for-light" src="https://alghazal.macaddress-eg.com/assets/img/logo.jpg" alt="">
                        <img class="img-fluid for-dark" src="https://alghazal.macaddress-eg.com/assets/img/logo.jpg" alt="">
                    </a>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="index.html">
                        <img class="img-fluid" src="assets/images/logo-icon.png" alt="">
                    </a>
                </div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn">
                                <a href="index.html">
                                    <img class="img-fluid" src="assets/images/logo-icon.png" alt="">
                                </a>
                                <div class="mobile-back text-end">
                                    <span>Back</span>
                                    <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                </div>
                            </li>
                            <li style="margin-top: 40px" class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="index.html">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">لوحه التحكم</span></a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="requested-cars.html">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M21.4399 13.9939C18.7789 13.9939 18.7789 9.87952 21.4399 9.87952C21.4399 5.11236 21.4399 3.41089 12.0449 3.41089C2.6499 3.41089 2.6499 5.11236 2.6499 9.87952C5.3109 9.87952 5.3109 13.9939 2.6499 13.9939C2.6499 18.762 2.6499 20.4635 12.0449 20.4635C21.4399 20.4635 21.4399 18.762 21.4399 13.9939Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M12.0449 9.17114C11.3619 9.17114 11.2969 10.2606 10.8909 10.6462C10.4839 11.0308 9.22087 10.5912 9.04487 11.2743C8.86987 11.9583 10.0069 12.1904 10.1479 12.7768C10.2879 13.3632 9.59387 14.1875 10.1869 14.5986C10.7809 15.0079 11.4199 14.0804 12.0449 14.0804C12.6699 14.0804 13.3089 15.0079 13.9029 14.5986C14.4969 14.1875 13.8019 13.3632 13.9419 12.7768C14.0829 12.1904 15.2199 11.9583 15.0449 11.2743C14.8689 10.5912 13.6059 11.0308 13.1989 10.6462C12.7929 10.2606 12.7279 9.17114 12.0449 9.17114Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">السيارات التي تم طلبها</span></a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="history.html">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M21.4399 13.9939C18.7789 13.9939 18.7789 9.87952 21.4399 9.87952C21.4399 5.11236 21.4399 3.41089 12.0449 3.41089C2.6499 3.41089 2.6499 5.11236 2.6499 9.87952C5.3109 9.87952 5.3109 13.9939 2.6499 13.9939C2.6499 18.762 2.6499 20.4635 12.0449 20.4635C21.4399 20.4635 21.4399 18.762 21.4399 13.9939Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M12.0449 9.17114C11.3619 9.17114 11.2969 10.2606 10.8909 10.6462C10.4839 11.0308 9.22087 10.5912 9.04487 11.2743C8.86987 11.9583 10.0069 12.1904 10.1479 12.7768C10.2879 13.3632 9.59387 14.1875 10.1869 14.5986C10.7809 15.0079 11.4199 14.0804 12.0449 14.0804C12.6699 14.0804 13.3089 15.0079 13.9029 14.5986C14.4969 14.1875 13.8019 13.3632 13.9419 12.7768C14.0829 12.1904 15.2199 11.9583 15.0449 11.2743C14.8689 10.5912 13.6059 11.0308 13.1989 10.6462C12.7929 10.2606 12.7279 9.17114 12.0449 9.17114Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">الطلبات القديمه</span></a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="setting.html">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M11.1437 17.8829H4.67114" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M15.205 17.8839C15.205 19.9257 15.8859 20.6057 17.9267 20.6057C19.9676 20.6057 20.6485 19.9257 20.6485 17.8839C20.6485 15.8421 19.9676 15.1621 17.9267 15.1621C15.8859 15.1621 15.205 15.8421 15.205 17.8839Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                <path d="M14.1765 7.39439H20.6481" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M10.1153 7.39293C10.1153 5.35204 9.43436 4.67114 7.39346 4.67114C5.35167 4.67114 4.67078 5.35204 4.67078 7.39293C4.67078 9.43472 5.35167 10.1147 7.39346 10.1147C9.43436 10.1147 10.1153 9.43472 10.1153 7.39293Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">الأعدادات</span></a>
                            </li>
                        </ul>
                        <div class="sidebar-img-section">
                            <div class="sidebar-img-content">
                                <img class="img-fluid" src="assets/images/side-bar.png" alt="">
                                <h4 style=" font-family: 'Cairo', sans-serif !important;">هل تحتاج المساعده؟</h4>
                                <a class="txt" href="mailto:info@elghazal.com">Raise ticket at "info@elghazal.com"</a>
                            </div>
                        </div>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Dashboard</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="home-item" href="index.html"><i
                                        data-feather="home"></i></a></li>
                                <li class="breadcrumb-item"> Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid default-dash">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Requested Cars</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone number</th>
                                        <th scope="col">State</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Ahmed Karem</td>
                                        <td>
                                            ak@gmail.com
                                        </td>
                                        <td>01207807796</td>
                                        <td style="color: green">Active</td>
                                        <td>
                                            <div>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Details</button>
                                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">More Details</h4>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table">
                                                                    <thead>
                                                                    <tr>
                                                                        <th scope="col">Data</th>
                                                                        <th scope="col">Information</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>ID Number</th>
                                                                            <td>BMW X6</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>ID Name</th>
                                                                            <td><a href="#">Ahmed karem</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Birthday</th>
                                                                            <td>5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>License Expiry Date</th>
                                                                            <td>500 RS</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Job</th>
                                                                            <td>Paid</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Work Address</th>
                                                                            <td>Paid</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Home Address</th>
                                                                            <td>Paid</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Number Of Requested</th>
                                                                            <td>15</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Requested Cars</th>
                                                                            <td><button class="btn btn-success">Open</button></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>History</th>
                                                                            <td><button class="btn btn-success">Open</button></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-success">Active</button>
                                                <button class="btn btn-danger">Refuse</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- footer start-->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2022 © Ahmed Karem </p>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<!-- latest jquery-->
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="assets/js/icons/feather-icon/feather.min.js"></script>
<script src="assets/js/icons/feather-icon/feather-icon.js"></script>
<script src="assets/js/scrollbar/simplebar.js"></script>
<script src="assets/js/scrollbar/custom.js"></script>
<script src="assets/js/config.js"></script>
<script src="assets/js/sidebar-menu.js"></script>
<script src="assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="assets/js/dropzone/dropzone.js"></script>
<script src="assets/js/dropzone/dropzone-script.js"></script>
<script src="assets/js/typeahead/handlebars.js"></script>
<script src="assets/js/typeahead/typeahead.bundle.js"></script>
<script src="assets/js/typeahead/typeahead.custom.js"></script>
<script src="assets/js/typeahead-search/handlebars.js"></script>
<script src="assets/js/typeahead-search/typeahead-custom.js"></script>
<script src="assets/js/editor/simple-mde/simplemde.min.js"></script>
<script src="assets/js/editor/simple-mde/simplemde.custom.js"></script>
<script src="assets/js/script.js"></script>
<script>
    setInterval(function time(){
        var d = new Date();
        var hours = 24 - d.getHours();
        var min = 60 - d.getMinutes();
        if((min + '').length == 1){
            min = '0' + min;
        }
        var sec = 60 - d.getSeconds();
        if((sec + '').length == 1){
            sec = '0' + sec;
        }
        jQuery('#the-final-countdown p').html(hours+':'+min+':'+sec)
    }, 1000);
</script>
</body>
</html>