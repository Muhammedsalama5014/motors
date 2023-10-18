
    @extends('web.ar.layout')
    @section('content')
        <?php
        $about = App\Models\About::find(1);
        ?>

      <!-- Hero Section HTML Start -->

      <section id="Hero">
        <div class="hero-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <div class="hero-content">
                  <h6>مرحبا بكم في القرين</h6>
                  <h1>استأجر معنا أفضل جودة للسيارات</h1>
                  <p>

                  </p>
                  <div class="hero-btn">
                    <a href="{{url('ar/cars')}}"> احجز الان </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-7">
                <div class="hero-img">
                  <img
                    draggable="false"
                    src={{asset("assetssmart/images/home/hero.png")}}
                    alt="hero"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Hero Section HTML End -->
    </header>

    <!-- Header Part HTML End -->

    <!-- Main Part HTML Start -->

    <main>
      <!-- Rental Products Section HTML Start -->

      <section style="direction: ltr !important;" id="Rental-products">
        <div class="rental-products-wrapper">
          <div class="container">
            <div class="rental-products-title">
              <h4>صفقات تأجير السيارات والمنتجات</h4>
              <a href="{{ url('ar/cars') }}">مشاهدة الكل</a>
            </div>
            <div class="rental-products-slider owl-carousel owl-theme">

                @foreach ($cars as $car)

                <div class="rental-products-slide item">

                    <div class="position-relative">
                      <img
                        src={{asset("uploads/$car->img")}}
                        alt="rental-car1"
                        style="height: 200px"
                      />
                      {{----<span class="rental-pdct-disc">30٪ بيع</span> --}}
                    </div>
                    <h6>{{$car->name}}</h6>
                    <p>start from {{$car->price}}</p>
                  </div>

                @endforeach


            </div>
          </div>
        </div>
      </section>

      <!-- Rental Products Section HTML End -->

      <!-- About Section HTML Start -->

      <section id="About">
        <div class="about-wrapper">
          <div class="container">
            <div class="row align-items-center flex-column-reverse flex-md-row">
              <div class="col-md-6 mt-5 mt-md-0">
                <div class="about-img">
                  <img src={{asset("uploads/$about->img")}} alt="about" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-content">
                  <h4>{{ $about->getTranslation('title_head', 'ar')}}</h4>
                  <p>
                      {{ $about->getTranslation('desc_head', 'ar')}}<a href="{{url('ar/about')}}">More</a>
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- About Section HTML End -->

      <!-- Car Category Section HTML Start -->

      <section id="Car-category">
        <div class="car-category-wrapper">
          <div class="container-fluid container-xxl">
            <div class="car-category-container">
              <div class="car-category-left">
                <div class="car-category-buttons">
                  <a href="#" class="car-cat-btn active">عربات الركاب</a>
                  <a href="#" class="car-cat-btn">ميني فان</a>
                  <a href="#" class="car-cat-btn">سيارات رياضية</a>
                  <a href="#" class="car-cat-btn">سيارات الدفع الرباعي</a>
                  <a href="#" class="car-cat-btn">مضمون</a>
                </div>
                <div class="car-category-left-wrapper">
                  <h5># عربات الركاب</h5>
                  <h2>
                    أفضل السيارات على الإطلاق
                  </h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt
                  </p>
                  <a href="{{url('ar/cars')}}"
                    >استكشاف المزيد
                    <img
                      src={{asset("assetssmart/images/home/right-arrow-white.svg")}}
                      alt="right-arrow-white"
                  /></a>
                </div>
              </div>
              <div class="car-category-right mt-5 mt-lg-0">
                <img
                  src={{asset("assetssmart/images/home/car-category-right-img.png")}}
                  alt="car-category-right-img"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Car Category Section HTML End -->





      <!-- Partner Section HTML Start -->

      <section id="Partner">
        <div class="partner-wrapper">
          <div class="container">
            <div class="partner-title">
              <h4>شركاؤنا</h4>
            </div>
            <div class="partners">
              <img src={{asset("assetssmart/images/home/partner1.png")}} alt="partner1" />
              <img src={{asset("assetssmart/images/home/partner2.png")}} alt="partner2" />
              <img src={{asset("assetssmart/images/home/partner3.png")}} alt="partner3" />
              <img src={{asset("assetssmart/images/home/partner4.png")}} alt="partner4" />
              <img src={{asset("assetssmart/images/home/partner5.png")}} alt="partner5" />
              <img src={{asset("assetssmart/images/home/partner6.png")}} alt="partner6" />
            </div>
          </div>
        </div>
      </section>

      <!-- Partner Section HTML End -->
    </main>

    <!-- Main Part HTML End -->

    <!-- Footer Part HTML Start -->


    @endsection
