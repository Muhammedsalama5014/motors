
    @extends('web.layout')
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
                  <h6>Welcome to Al-Qurain</h6>
                  <h1>Rent The Best Quality Car’s with us</h1>
                  <p>

                  </p>
                  <div class="hero-btn">
                    <a href="{{ url('cars') }}"> Rent Now </a>
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

      <!-- Rent Process Section HTML Start -->



      <!-- Rent Process Section HTML End -->
    </header>

    <!-- Header Part HTML End -->

    <!-- Main Part HTML Start -->

    <main>
      <!-- Rental Products Section HTML Start -->

      <section id="Rental-products">
        <div class="rental-products-wrapper">
          <div class="container">
            <div class="rental-products-title">
              <h4>Car rental deals and products</h4>
              <a href="{{ url('cars') }}">View All</a>
            </div>
            <div class="rental-products-slider owl-carousel owl-theme">

                @foreach ($cars as $car)
                <div class="rental-products-slide item">
                    <div class="position-relative">
                        <a href="{{url("car-details/en/$car->id")}}">
                      <img
                        src={{asset("uploads/$car->img")}}
                        alt="rental-car1"
                        style="height: 200px"
                      />
                    </a>
                      {{----<span class="rental-pdct-disc">30% sale</span> --}}
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
                  <h4>{{ $about->getTranslation('title_head', 'en')}}</h4>
                  <p>
                      {{ $about->getTranslation('desc_head', 'en')}} <a href="{{ url('about') }}">More</a>
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
                      @foreach ($brands as $brand )
                      <a href="{{url("brand/en/$brand->id")}}" class="car-cat-btn">{{$brand->name}}</a>
                            @endforeach
                  </div>
                  <div class="car-category-content">
                    <div class="car-category-left-wrapper active" id="passenger-vans">
                      <h5>#Passenger vans</h5>
                      <h2>
                        Best cars <br />
                        ever
                      </h2>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt
                      </p>
                      <a href="{{ url('cars') }}"
                        >EXPLORE MORE
                        <img
                          src={{asset("assetssmart/images/home/right-arrow-white.svg")}}
                          alt="right-arrow-white"
                      /></a>
                    </div>
                  </div>
                </div>
                <script>
  // Get all the tab buttons and content wrappers
  const tabs = document.querySelectorAll('.car-cat-btn');
  const tabContents = document.querySelectorAll('.car-category-left-wrapper');
  
  // Add a click event listener to each tab button
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // Remove the 'active' class from all tab buttons and content wrappers
      tabs.forEach(tab => tab.classList.remove('active'));
      tabContents.forEach(content => content.classList.remove('active'));
      
      // Add the 'active' class to the clicked tab button and its associated content wrapper
      const tabId = tab.getAttribute('data-tab');
      const targetContent = document.querySelector(`#${tabId}`);
      tab.classList.add('active');
      targetContent.classList.add('active');
    });
  });
</script>
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
              <h4>Our Partners</h4>
            </div>
            <div class="partners">
              <img src="{{asset("assetssmart/images/home/partner1.png")}}" alt="partner1" />
              <img src="{{asset("assetssmart/images/home/partner2.png")}}" alt="partner2" />
              <img src="{{asset("assetssmart/images/home/partner3.png")}}" alt="partner3" />
              <img src="{{asset("assetssmart/images/home/partner4.png")}}" alt="partner4" />
              <img src="{{asset("assetssmart/images/home/partner5.png")}}" alt="partner5" />
              <img src="{{asset("assetssmart/images/home/partner6.png")}}" alt="partner6" />
            </div>
          </div>
        </div>
      </section>

      <!-- Partner Section HTML End -->
    </main>

    <!-- Main Part HTML End -->

    <!-- Footer Part HTML Start -->


    @endsection
