@extends('web.ar.layout')
@section('content')
    <!-- Navigation Section HTML End -->

    <!-- Header Bredcrumb Section HTML Start -->

    <section id="Header-bredcrumb">
        <div class="header-bredcrumb-wrapper">
            <h4>حسابي</h4>
            <div class="header-bredcrumb-menu">
                <ul class="d-flex justify-content-center align-items-center">
                    <li><a href="#">الرئيسيه</a></li>
                    <li><span> ></span></li>
                    <li><a href="#">حسابي</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Header Bredcrumb Section HTML End -->
    </header>

    <!-- Header Part HTML End -->

    <!-- Main Part HTML Start -->

    <main>
        <!-- My Rental Section HTML Start -->

        <section id="Account">
            <div class="account-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="account-sidebar">
                                <h4>حسابي</h4>
                                <div class="account-sidebar-menu">
                                    <ul>

                                        <li class="active">
                                            <img src={{ asset('assetssmart/images/account/car-icon.svg') }}
                                                alt="car-icon" /><a href="{{ url('ar/myrental') }}">إيجاري</a>
                                        </li>
                                        <li>
                                            <img src={{ asset('assetssmart/images/account/setting-icon-light.svg') }}
                                                alt="setting-icon-light" /><a href="{{ url('ar/accountsetting') }}">إعدادات
                                                الحساب</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="my-rental">
                                <div class="rental-wrapper">
                                    <h4>إيجاري</h4>
                                    <div class="rental-item-wrapper">
                                        <div class="rental-tag">
                                            <span>القادمة</span>
                                        </div>
                                        @foreach ($orders as $order)


                                        <div class="rental-item d-flex justify-content-between align-items-lg-start">
                                            <div class="rental-item-content d-flex align-items-center">
                                                @php
                                                    $img=$order->car->img;
                                                    $name=$order->car->name;
                                                    $cat=$order->car->cat->name;
                                                @endphp
                                                <div class="rental-item-img">
                                                    <img src={{ asset("uploads/$img") }}
                                                        alt="rental-img1" />
                                                </div>
                                                <div class="rental-item-text">
                                                    <span>{{$cat}}</span>
                                                    <h6>{{$name}}</h6>
                                                    <div class="rental-item-color">

                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="rental-item-price d-flex justify-content-between align-items-center">
                                                <h5>{{$order->total_price}}</h5>
                                                <a href="{{url("cancel/$order->id")}}">Cancel</a>
                                            </div>
                                        </div>
                                        @endforeach
                                       {{--
                                        @foreach ($old_orders as $order)


                                        <div class="rental-item d-flex justify-content-between align-items-lg-start">
                                            <div class="rental-item-content d-flex align-items-center">
                                                @php
                                                    $img=$order->car->img;
                                                    $name=$order->car->name;
                                                    $cat=$order->car->cat->name;
                                                @endphp
                                                <div class="rental-item-img">
                                                    <img src={{ asset("uploads/$img") }}
                                                        alt="rental-img1" />
                                                </div>
                                                <div class="rental-item-text">
                                                    <span>{{$cat}}</span>
                                                    <h6>{{$name}}</h6>
                                                    <div class="rental-item-color">

                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="rental-item-price d-flex justify-content-between align-items-center">
                                                <h5>{{$order->total_price}}</h5>
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        @endforeach--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- My Rental Section HTML End -->
    </main>

    <!-- Main Part HTML End -->

    <!-- Footer Part HTML Start -->
@endsection
