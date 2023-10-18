
    @extends('web.layout')
    @section('content')

      <!-- Navigation Section HTML End -->
    </header>

    <!-- Header Part HTML End -->

    <!-- Main Part HTML Start -->

    <main>
      <!-- Confirm Payment Section HTML Start -->

      <section id="Confirm-payment">
        <div class="confirm-payment-wrapper">
          <div class="confirm-payment-content">
            <div class="confirm-payment-icon">
              <img
                draggable="false"
                src={{asset("assetssmart/images/confirm-payment/check-big-icon.svg")}}
                alt="check-big-icon"
              />
            </div>
            <h4>Thank You !</h4>
            <span>
              <img
                src={{asset("assetssmart/images/confirm-payment/check-green-icon.svg")}}
                alt="check-green-icon"
              />
              Payment Done Successfully</span
            >
            <p>
              It is a long established fact that a reader will be distracted by
              the readable content of a page when looking
            </p>
            <div class="fill-btn">
              <a class="m-auto" href="{{url("cars")}}"
                >Back to cars
                <img
                  draggable="false"
                  src={{asset("assetssmart/images/confirm-payment/arrow-right-icon.svg")}}
                  alt="arrow-right-icon"
              /></a>
            </div>
          </div>
        </div>
      </section>

      <!-- Confirm Payment Section HTML End -->
    </main>

    <!-- Main Part HTML End -->

    <!-- Footer Part HTML Start -->

    @endsection
