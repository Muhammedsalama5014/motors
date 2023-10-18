@extends('pagesLayout.layout')
@section('content')







  <!-- Breadcromb Area Start -->
<section class="elgazal-breadcromb-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>Our Deals</h3>
                    <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Our Deals</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcromb Area End -->


<!-- Car Listing Area Start -->
<section class="elgazal-car-listing section_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="car-list-left">
                    <div class="sidebar-widget">
                         <form action="{{ route('car.search') }}" method="get">
                                    @csrf
                            <p>
                                <input type="text" placeholder="Car Name" name='name'/>
                            </p>
                            <p>
                                <select name='cat'>
                                                    <option>Car Category</option>
                                                   
                                                    @foreach ($cats as $cat )
                                                          <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                            </p>
                            <p>
                             <select name='model'>
                                                    <option>Car Model</option>
                                                    
                                                   @foreach ($models as $model )
                                                          <option value="{{$model->id}}">{{$model->name}}</option>
                                                    @endforeach
                                                </select>
                            </p>
                            <p>
                                  <select>
                                                    <option name='brand'>Car Brand</option>
                                                    
                                                   @foreach ($brands as $brand )
                                                          <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                    @endforeach
                                                </select>
                            </p>
                            <p>
                                <button type="submit" class="elgazal-theme-btn">Find Car</button>
                            </p>
                        </form>
                    </div>
                    <div class="sidebar-widget">

                    </div>
                    <div class="sidebar-widget display">
                        <ul class="service-menu">
                            <li class="active">
                                <a href="#">All Brands<span>({{$brands->count()}})</span></a>
                            </li>

                            @foreach ($brands as $brand )
                                  <li>
                                <a href="#">{{$brand->name}}<span>
                          
                                   ({{$brand->cars->count()}})
                                   
                              
                                
                                </span></a>
                            </li>
                            @endforeach
                          
                      
                        </ul>
                    </div>
                    <div class="sidebar-widget display">
                        <ul class="service-menu">
                            <li class="active">
                                <a href="#">All Categories<span>({{$cats->count()}})</span></a>
                            </li>
                            @foreach ($cats as $cat )
                                  <li>
                                <a href="#">{{$cat->name}}<span>
                                 ({{$cat->cars->count()}})
                                
                                </span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar-widget display">
                        <ul class="service-menu">
                            <li class="active">
                                <a href="#">All Models<span>({{$models->count()}})</span></a>
                            </li>
                                @foreach ($models as $model )
                                  <li>
                                <a href="#">{{$model->name}}<span>
                               ({{$model->cars->count()}})
                                
                                </span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="car-listing-right">
                    <div class="property-page-heading">
                        <div class="paging_status">
                            <p>1-10 of 25 results</p>
                        </div>
                        <div class="propertu-page-shortby">
                            <label><i class="fa fa-sort-amount-asc"></i>Sort By</label>
                            <select class="chosen-select-no-single">
                                <option>Default</option>
                                <option>Price (Low to High)</option>
                                <option>Price (High to Low)</option>
                                <option>Featured</option>
                            </select>
                        </div>
                    </div>
                    <div class="car-grid-list">
                        <div class="row">
                        @foreach ($cars as $car_dis ) {{-- foreach loop start --}}
                              <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src='{{asset("uploads"."/".$car_dis->car->img)}}' alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>  {{$car_dis->car->name}} </h3>
                                         
                                        </a>
                                        <h4><del>$ {{$car_dis->car->price}}</del>

                                      @if ($car_dis->discount_type == 'precent')
                                            
                                                ${{$car_dis->car->price - ($car_dis->discount_value / 100)* $car_dis->car->price}}
                                        @elseif ($car_dis->discount_type  == 'flat')
                                         ${{$car_dis->car->price - $car_dis->discount_value}}

                                        @endif
                                         
                                         <span> Day / {{$car_dis->dicount_days}}</span></h4>
                                        <ul>
                                           {{--  <li><i class="fa fa-car"></i>Model:{{$car_p->modelcar->name}}</li> --}}
                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="{{route('car.reserve',$car_dis->car->id)}}" class="offer-btn-1">Rent Car</a>
                                            <a href="{{route('car.details',$car_dis->car->id)}}" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach   {{-- foreach loop end --}}


                           @foreach ($cars_Cat as $car_p ) {{-- foreach loop start --}}
                           @foreach ($car_p->cat->cars as $car_pp )
                         
                               
                              <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src='{{asset("uploads"."/".$car_p->img)}}' alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>  {{$car_p->name}} </h3>
                                        </a>
                                        <h4><del>${{$car_pp->price}}</del>
                                        @if ($car_p->discount_type == 'precent')
                                            
                                                ${{$car_pp->price - ($car_p->discount_value / 100)* $car_pp->price}}
                                        @elseif ($car_p->discount_type == 'flat')
                                         ${{$car_pp->price - $car_p->discount_value}}

                                        @endif

                                        <span> Day / {{$car_p->discount_days}}</span></h4>
                                        <ul>
                                            <li><i class="fa fa-car"></i>Model:{{$car_p->name}}</li>
                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="{{route('car.reserve',$car_p->id)}}" class="offer-btn-1">Rent Car</a>
                                            <a href="{{route('car.details',$car_p->id)}}" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @endforeach

                        @endforeach 
                          
                         {{--    <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src="assets/img/audi-offer.png" alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>Audi Q3</h3>
                                        </a>
                                        <h4><del>$75.00</del> $60.00<span>/ Day</span></h4>
                                        <ul>
                                            <li><i class="fa fa-car"></i>Model:2017</li>
                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="reserve.html" class="offer-btn-1">Rent Car</a>
                                            <a href="car-details.html" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                      {{--   <div class="row">
                            <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src="assets/img/bmw-offer.png" alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>BMW X3</h3>
                                        </a>
                                        <h4><del>$75.00</del> $60.00<span>/ Day</span></h4>
                                        <ul>
                                            <li><i class="fa fa-car"></i>Model:2017</li>
                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="reserve.html" class="offer-btn-1">Rent Car</a>
                                            <a href="car-details.html" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src="assets/img/toyota-offer-2.png" alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>Toyota Camry</h3>
                                        </a>
                                        <h4><del>$75.00</del> $60.00<span>/ Day</span></h4>
                                        <ul>
                                            <li><i class="fa fa-car"></i>Model:2017</li>
                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="reserve.html" class="offer-btn-1">Rent Car</a>
                                            <a href="car-details.html" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src="assets/img/marcedes-offer.png" alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>marcedes S-class</h3>
                                        </a>
                                        <h4><del>$75.00</del> $60.00<span>/ Day</span></h4>
                                        <ul>
                                            <li><i class="fa fa-car"></i>Model:2017</li>
                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="reserve.html" class="offer-btn-1">Rent Car</a>
                                            <a href="car-details.html" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src="assets/img/audi-offer.png" alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>Audi Q3</h3>
                                        </a>
                                        <h4><del>$75.00</del> $60.00<span>/ Day</span></h4>
                                        <ul>
                                            <li><i class="fa fa-car"></i>Model:2017</li>
                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="reserve.html" class="offer-btn-1">Rent Car</a>
                                            <a href="car-details.html" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                  
                       
                     {{--   {{ $cars_p->links() }}  --}}
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Car Listing Area End -->

  
@endsection
