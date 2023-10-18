

    @extends('web.ar.layout')
    @section('content')
        <?php
            $about = App\Models\About::find(1);
        ?>

      <!-- Navigation Section HTML End -->

      <!-- Header Bredcrumb Section HTML Start -->

      <section id="Header-bredcrumb">
        <div class="header-bredcrumb-wrapper">
          <h4>عن الشركه</h4>
          <div class="header-bredcrumb-menu">
            <ul class="d-flex justify-content-center align-items-center">
              <li><a href="{{url('ar/home')}}">الرئيسية</a></li>
              <li><span> ></span></li>
              <li><a href="#">عن الشركه</a></li>
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
                  {{ $about->getTranslation('title_head', 'ar')}}
              </h3>
              <p>
                  {{ $about->getTranslation('desc_head', 'ar')}}
              </p>
              <div class="about-img">
                <img
                  draggable="false"
                  src={{asset("uploads/$about->img")}}
                  alt="about-img"
                />
              </div>
              <h3>{{ $about->getTranslation('title_bottom', 'ar')}}</h3>
              <p>
                  {{ $about->getTranslation('desc_bottom', 'ar')}}
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
