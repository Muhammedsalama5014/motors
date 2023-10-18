

    @extends('web.layout')
    @section('content')

      <!-- Navigation Section HTML End -->

      <!-- Header Bredcrumb Section HTML Start -->

      <section id="Header-bredcrumb">
        <div class="header-bredcrumb-wrapper">
          <h4>About</h4>
          <div class="header-bredcrumb-menu">
            <ul class="d-flex justify-content-center align-items-center">
              <li><a href="{{ url('home') }}">Home</a></li>
              <li><span> ></span></li>
              <li><a href="#">About</a></li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Header Bredcrumb Section HTML End -->
    </header>

    <!-- Header Part HTML End -->

    <!-- Main Part HTML Start -->

    <main>
      <!-- About Section HTML Start -->

      <section id="About">
        <div class="about-wrapper">
          <div class="container">
            <div class="about-content">
              <h3>
                  {{ $about->getTranslation('title_head', 'en')}}
              </h3>
              <p>
                  {{ $about->getTranslation('desc_head', 'en')}}
              </p>
              <div class="about-img">
                <img
                  draggable="false"
                  src={{asset("uploads/$about->img")}}
                  alt="about-img"
                />
              </div>
              <h3>{{ $about->getTranslation('title_bottom', 'en')}}</h3>
              <p>
                  {{ $about->getTranslation('desc_bottom', 'en')}}
              </p>
            </div>

          </div>
        </div>
      </section>

      <!-- About Section HTML End -->
    </main>

    <!-- Main Part HTML End -->

    <!-- Footer Part HTML Start -->

    @endsection
