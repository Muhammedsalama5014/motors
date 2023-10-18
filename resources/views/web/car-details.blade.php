
    @extends('web.layout')
    @section('content')

      <!-- Navigation Section HTML End -->

      <!-- Car Details Hero Section HTML Start -->

      <section id="Car-hero">
        <div class="car-hero-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-10 p-0">
                <div class="car-hero-img">
                  <img
                    src={{asset("uploads/$car->img")}}
                    alt="car-details-hero-img"
                  />
                </div>
              </div>
              {{-----
              <div class="col-md-2">
                <div class="car-images">
                  <div class="car-image">
                    <img
                      src={{asset("assetssmart/images/car-details/car-details-img1.png")}}
                      alt="car-details-img1"
                    />
                  </div>
                  <div class="car-image pt-2">
                    <img
                      src={{asset("assetssmart/images/car-details/car-details-hero-img.png")}}
                      alt="car-details-img2"
                    />
                  </div>
                  <div class="car-image pt-2">
                    <img
                      src={{asset("assetssmart/images/car-details/car-details-img3.png")}}
                      alt="car-details-img3"
                    />
                  </div>
                  <div class="car-image pt-2">
                    <img
                      src={{asset("assetssmart/images/car-details/car-details-img4.png")}}
                      alt="car-details-img4"
                    />
                  </div>
                </div>
              </div>
              -----}}
            </div>
            <div class="row pt-4">
              <div class="col-md-10">
                <div class="row">
                  <div class="col-md-8 col-xxl-7">
                    <div class="car-details-text">
                      <div class="d-flex align-items-center">
                        <h3>{{$car->name}}</h3>
                      </div>
                      <p>
                       {{$car->desc}}
                      </p>
                      <div class="fill-btn">
                        <a href="{{url("checkout/en/$car->id")}}">Rent now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-xxl-5">
                    <div class="car-price float-end">
                      <h4>{{$car->price}} KWD/day</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Car Details Hero Section HTML End -->
    </header>

    <!-- Header Part HTML End -->

    <!-- Main Part HTML Start -->

    <main>
      <!-- Car Details info Section HTML Start -->

      <section id="Car-details-info">
        <div class="car-info-wrapper">
          <div class="container">
            <div class="car-info">
              <div class="car-info-tab-buttons">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="pills-description-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-description"
                      type="button"
                      role="tab"
                      aria-controls="pills-description"
                      aria-selected="true"
                    >
                      DESCRIPTION
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="pills-information-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-information"
                      type="button"
                      role="tab"
                      aria-controls="pills-information"
                      aria-selected="false"
                    >
                      INFORMATION
                    </button>
                  </li>

                    </button>
                  </li>
                </ul>
              </div>
              <div class="tab-content pt-5" id="pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="pills-description"
                  role="tabpanel"
                  aria-labelledby="pills-description-tab"
                  tabindex="0"
                >
                  <div class="description-text">
                   {{$car->desc}}
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-information"
                  role="tabpanel"
                  aria-labelledby="pills-information-tab"
                  tabindex="0"
                >
                  <h6>Color:{{$car->color}}</h6>
                  <h6>Model:{{$car->modelcar->name}}</h6>
                  <h6>Brand:{{$car->brand->name}}</h6>
                  <h6>Category:{{$car->cat->name}}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Car Details info Section HTML End -->
    </main>

    <!-- Main Part HTML End -->


    @endsection
