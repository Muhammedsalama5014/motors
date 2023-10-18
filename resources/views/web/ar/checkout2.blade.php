
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
                <img src={{asset("assetssmart/images/checkout/check.svg")}} alt="check" />
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
              <form action="{{url("ar/checkout3")}}"  method="post">
                @csrf
                <div class="checkout-form">
                  <div class="form-input-field">
                    <label>الدوله</label>
                    <select name="country">
                      <option value="kuwait">kuwait</option>

                    </select>
                  </div>
                  <div class="form-input-field">
                    <label>العنوان</label>
                    <input
                      type="text" name="address"
                      placeholder="Enter your address"
                      required
                    />
                  </div>
                  <div class="d-flex">
                    <div class="form-input-field form-field-50 pe-2">
                      <label>تاريخ الاستلام</label>
                      <input name="start" type="date" required />
                    </div>
                    <div class="form-input-field form-field-50 ps-2">
                      <label>تاريخ الرجوع</label>
                      <input name="end" type="date" required />
                    </div>
                  </div>
                  <div class="d-flex">

                    <div class="form-input-field form-field-50 ps-2">
                        <label>الرقم القومي</label>
                        <input type="text" name="id" required />
                    </div>

                    <div class="form-input-field form-field-50 ps-2">
                      <label>رقم الهاتف</label>
                      <input type="text" name="phone" placeholder="+965" required />
                    </div>
                  </div>
                  <div class="form-btn-field d-flex justify-content-between">

                    <div class="fill-btn">
                      <button  type="submit">
                        الخطوه التاليه
                        <img
                          src={{asset("assetssmart/images/checkout/arrow-right-icon.svg")}}
                          alt="arrow-right-icon"
                        />
                      </button>
                    </div>
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
