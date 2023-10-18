
    @extends('web.ar.layout')
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
            <h4>شكرا لك !</h4>
            <span>
              <img
                src={{asset("assetssmart/images/confirm-payment/check-green-icon.svg")}}
                alt="check-green-icon"
              />
              Payment Done Successfully</span
            >
            <p>
              هناك حقيقة مثبتة منذ زمن طويل وهي أن القارئ سيلهي القارئ
              المحتوى المقروء للصفحة عند البحث
            </p>
            <div class="fill-btn">
              <a class="m-auto" href="{{url("cars")}}"
                >العوده
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
