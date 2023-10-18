@extends('pagesLayout.layout')
@section('content')
 <!-- Breadcromb Area Start -->
<section class="elgazal-breadcromb-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>Car Booking</h3>
                    <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>car Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcromb Area End -->


<!-- Car Booking Area Start -->
<section class="elgazal-car-booking section_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="car-booking-image">
                   <div class = "card">
                      <!-- card left -->
                      <div class = "product-imgs">
                         <div style="height: 280px;" class = "img-display">
                            <div class = "img-showcase">
                               <img src = '{{asset("uploads/$car->img")}}' alt = "Car image">
                            
                            </div>
                         </div>
                         <div class = "img-select">
                            @foreach ($car->images as $img )
                                
                            <div class = "img-item">
                               <a href = "#" data-id = "1">
                                  <img src = "{{asset("uploads/$img->filename")}}" alt = "Car Image">
                               </a>
                            </div>
                            @endforeach

                        {{--     <div class = "img-item">
                               <a href = "#" data-id = "2">
                                   <img src = "assets/img/marcedes-offer.png" alt = "Car image">
                               </a>
                            </div>
                            <div class = "img-item">
                               <a href = "#" data-id = "3">
                                   <img src = "assets/img/toyota-offer-2.png" alt = "Car image">
                               </a>
                            </div>
                            <div class = "img-item">
                               <a href = "#" data-id = "4">
                                   <img src = "assets/img/marcedes-offer.png" alt = "Car image">
                               </a>
                            </div> --}}

                         </div>
                      </div>
                   </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="car-booking-right">
                    <p class="rental-tag">rental</p>
                    <h3>{{$car->name}}</h3>
                    <div class="price-rating">
                        <div class="price-rent">
                            <h4>{{$car->price}}<span>/ Day</span></h4>
                        </div>
                        <div class="car-rating">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                            <p>(123 rating)</p>
                        </div>
                    </div>
                    <p>{{$car->desc}}</p>
                    <div class="car-features clearfix">
                        <ul>
                            <li><i class="fa fa-car"></i> Model: {{$car->modelcar->name}}</li>
                            <li><i class="fa fa-cogs"></i> {{$car->type}}</li>
                            <li><i class="fa fa-dashboard"></i> 20kmpl</li>
                            <li><i class="fa fa-empire"></i> V-6 Cylinder</li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-eye"></i> GPS Navigation</li>
                            <li><i class="fa fa-lock"></i> Anti-Lock Brakes</li>
                            <li><i class="fa fa-key"></i> Remote Keyless</li>
                            <li><i class="fa fa-desktop"></i> Rear-Seat DVD</li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-car"></i> Category: {{$car->cat->name}}</li>
                            <li><i class="fa fa-cogs"></i> Color: {{$car->color}}</li>
                            <li><i class="fa fa-dashboard"></i>Seats Number: {{$car->seatts}}</li>
                            <li><i class="fa fa-empire"></i>Lime type: Test</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Car Booking Area End -->


<!-- Booking Form Area Start -->
<section class="elgazal-booking-form section_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="booking-right">
                    <div class="action-btn">
                        <a style="width: 100%" href="{{route('car.reserve',$car->id)}}" class="elgazal-btn">Reserve Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Booking Form Area End -->


@endsection
