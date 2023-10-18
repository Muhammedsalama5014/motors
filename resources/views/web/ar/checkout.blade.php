
    @extends('web.ar.layout')
    @section('content')

      <!-- Navigation Section HTML End -->

      <!-- Checkout Hero Section HTML Start -->

      <section id="Checkout-hero">
        <div class="checkout-hero-wrapper">
          <div class="container">
            <div
              class="checkout-steps d-flex justify-content-center align-items-center"
            >
              <div class="checkout-step d-flex align-items-center">
                <img src={{asset("assetssmart/images/checkout/check.svg")}} alt="check" />
                <span>معلومات شخصية</span>
              </div>
              <div class="checkout-step d-flex align-items-center">
                <p>2</p>
                <span>تفاصيل الإيجار</span>
              </div>
              <div class="checkout-step d-flex align-items-center">
                <p>3</p>
                <span>الدفع</span>
              </div>
              <div class="checkout-step d-flex align-items-center">
                <p>4</p>
                <span>التأكيد</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Checkout Hero Section HTML End -->
    </header>

    <!-- Header Part HTML End -->

    <!-- Main Part HTML Start -->

    <main>
      <!-- Checkout Section HTML Start -->

      <section id="Checkout">
        <div class="checkout-wrapper">
          <div class="container">
            <div class="checkout-form-wrapper">
              <p>هل لديك حساب؟ <a href="#"> تسجيل الدخول</a></p>
              <form>
                <div class="checkout-form">
                  <div class="form-input-field">
                    <label>الأيميل</label>
                    <input
                      type="email"
                      placeholder="Enter your mail"
                      required
                    />
                  </div>
                  <div class="d-flex">
                    <div class="form-input-field form-field-50 pe-2">
                      <label>الأسم الاول</label>
                      <input
                        type="text"
                        placeholder="Enter your name"
                        required
                      />
                    </div>
                    <div class="form-input-field form-field-50 ps-2">
                      <label>الاسم الثاني</label>
                      <input
                        type="text"
                        placeholder="Enter your name"
                        required
                      />
                    </div>
                  </div>
                  <div class="fill-btn form-btn-field float-end">
                    <a href="{{url("checkout2")}}">
                      التالي
                      <img
                        src={{asset("assets/images/checkout/arrow-right-icon.svg")}}
                        alt="arrow-right-icon"
                      />
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Checkout Section HTML End -->
    </main>

    <!-- Main Part HTML End -->


    @endsection
