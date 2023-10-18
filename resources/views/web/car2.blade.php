
    @extends('web.layout')
    @section('content')

      <!-- Navigation Section HTML End -->
    </header>

    <!-- Header Part HTML End -->

    <!-- Main Part HTML Start -->

    <main>
      <!-- Cars Section HTML Start -->

      <section id="Cars">
        <div class="cars-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="car-sidebar">

                  <div class="product-category">
                    <h4>Product categories</h4>
                  </div>
                  <div class="cars-categories">
                    <p>Cars categories</p>
                    <div class="category-item">
                      <ul class="pt-4">
                        @foreach ($cats as $cat)


                        <li>
                          <a href="{{url("cat/en/$cat->id")}}"
                            ><span>{{$cat->name}}</span
                            ><img
                              src={{asset("assetssmart/images/cars/chevron-right.svg")}}
                              alt="chevron-right"
                          /></a>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="car-filter">
                    <p>Filter by Brands</p>
                    <ul class="pt-4">
                        @foreach ($brands as $brand)
                        <li>
                            <a href="{{url("brand/en/$brand->id")}}">
                            <label>{{$brand->name}}</label>
                            </a>
                            <a href="{{url("brand/en/$brand->id")}}">
                            <input type="checkbox" />
                            </a>

                        </li>
                        @endforeach


                    </ul>
                  </div>
                  {{--------
                  <div class="color-filter">
                    <p>Filter By Color</p>
                    <ul class="pt-4">
                      <li class="red"></li>
                      <li class="blue"></li>
                      <li class="gray"></li>
                      <li class="black"></li>
                    </ul>
                  </div>
                  ----------}}
                  {{--------
                  <div class="price-filter">
                    <p>Filter by Prices</p>
                    <div class="range-slider position-relative pt-4 pb-0">
                      <input type="range" value="0" min="0" max="10000" />
                      <input type="range" value="3000" min="0" max="5000" />
                      <div class="range-price d-flex">
                        <span>Price:</span>
                        <span class="range-values">$47 - $275</span>
                      </div>
                      <div class="filter-btn float-end">
                        <a href="#">Filter</a>
                      </div>
                    </div>
                  </div>
                  -------}}
                  {{--------
                  <div class="car-tags">
                    <p>Tags</p>
                    <div class="tags pt-4">
                      <div class="tag">
                        <li class="tag-left">BMW</li>
                      </div>
                      <div
                        class="tag d-flex justify-content-between align-items-center"
                      >
                        <li class="tag-left">cars</li>
                        <li class="tag-right">sports</li>
                      </div>
                      <div
                        class="tag d-flex justify-content-between align-items-center"
                      >
                        <li class="tag-left">uniqe</li>
                        <li class="tag-right">jeep</li>
                      </div>
                    </div>
                  </div>
                  --------}}
                </div>
              </div>
              <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="car-bredcrumb d-flex align-items-center">
                    <h4>Cars</h4>
                    <div class="header-bredcrumb-menu ps-4">
                      <ul class="d-flex align-items-center">
                        <li><a href="{{ url('home') }}">Home</a></li>
                        <li><span> ></span></li>
                        <li><a href="#">Cars</a></li>
                      </ul>
                    </div>
                  </div>
                  {{--------
                  <div class="car-sorted d-flex align-items-center">
                    <p>Sorted by:</p>
                    <select>
                      <option value="Popular">Popular</option>
                      <option value="Popular2">Popular2</option>
                    </select>
                  </div> --------}}
                </div>
                <div class="row">
                    @foreach ($cars as $car)


                  <div class="col-md-6 col-lg-4">
                    <div class="car-card text-center">
                      <div class="car-card-img">
                        <img src={{asset("uploads/$car->img")}} alt="car1" style="height: 150px" />
                      </div>
                      <div class="car-card-content">
                        <h5>{{$car->name}} </h5>
                        <p>start from {{$car->price}} KWD/Day</p>
                        <a href="{{url("car-details/en/$car->id")}}">Rent Car</a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Cars Section HTML End -->
    </main>

    <!-- Main Part HTML End -->

    <!-- Footer Part HTML Start -->


    @endsection
