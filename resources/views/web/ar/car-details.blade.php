
    @extends('web.ar.layout')
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
                        <div class="star">
                          <img
                            src={{asset("assetssmart/images/car-details/star-icon.svg")}}
                            alt="star-icon"
                          />
                          <img
                            src={{asset("assetssmart/images/car-details/star-icon.svg")}}
                            alt="star-icon"
                          />
                          <img
                            src={{asset("assetssmart/images/car-details/star-icon.svg")}}
                            alt="star-icon"
                          />
                          <img
                            src={{asset("assetssmart/images/car-details/star-icon.svg")}}
                            alt="star-icon"
                          />
                          <img
                            src={{asset("assetssmart/images/car-details/half-star-icon.png")}}
                            alt="half-star-icon"
                          />
                        </div>
                        <span>مراجعات</span>
                      </div>
                      <p>
                       {{$car->desc}}
                      </p>
                      <div class="fill-btn">
                        <a href="{{url("checkout/ar/$car->id")}}">أحجز الأن</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-xxl-5">
                    <div class="car-price float-end">
                      <h2>{{$car->price}}</h2>
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
                      التفاصيل
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
                      معلومات
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="pills-reviews-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-reviews"
                      type="button"
                      role="tab"
                      aria-controls="pills-reviews"
                      aria-selected="false"
                    >
                      مراجعات
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
                  <h2>اللون:{{$car->color}}</h2>
                  <h2>النموذج:{{$car->modelcar->name}}</h2>
                  <h2>الماركة:{{$car->brand->name}}</h2>
                  <h2>التصنيف:{{$car->cat->name}}</h2>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-reviews"
                  role="tabpanel"
                  aria-labelledby="pills-reviews-tab"
                  tabindex="0"
                >
                  <h2>مراجعه </h2>
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
