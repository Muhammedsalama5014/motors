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
    <title>Admin Dashborad </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assetsadmin/css/vendors/font-awesome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsadmin/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsadmin/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsadmin/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsadmin/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsadmin/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetsadmin/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetsadmin/css/vendors/date-picker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetsadmin/css/vendors/photoswipe.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsadmin/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsadmin/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assetsadmin/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsadmin/css/responsive.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assetsadmin/css/vendors/simple-mde.css')}}">
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
   

@include('adminlayouts.header')

@yield('adminContent')



@include('adminlayouts.footer')