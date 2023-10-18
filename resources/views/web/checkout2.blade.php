
    @extends('web.layout')
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
                <span>Personal Information</span>
              </div>
              <div class="checkout-step d-flex align-items-center">
                <img src={{asset("assetssmart/images/checkout/check.svg")}} alt="check" />
                <span>Rent details</span>
              </div>
              <div class="checkout-step d-flex align-items-center">
                <p>3</p>
                <span>Payment</span>
              </div>
              <div class="checkout-step d-flex align-items-center">
                <p>4</p>
                <span>Confirmation</span>
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
              <form action="{{url("checkout3")}}" method="POST" >
                @csrf

                  @error("start_date")
                  <div class="alert alert-danger">
                      {{$message}}
                  </div>
                  @enderror
                  @error("end_date")
                  <div class="alert alert-danger">
                      {{$message}}
                  </div>
                  @enderror
                <div class="checkout-form">
                  <div class="form-input-field">
                    <label>Country</label>
                    <select name="country">
                      <option value="kuwait">kuwait</option>

                    </select>
                  </div>

                  <div class="d-flex">
                    <div class="form-input-field form-field-50 pe-2">
                      <label>Pickup date</label>
                      <input type="date" name="start_date" required />
                    </div>

                    <div class="form-input-field form-field-50 ps-2">
                      <label>Return date</label>
                      <input type="date" name="end_date" required />
                    </div>
                  </div>
                  <div class="d-flex">

                    <div class="form-input-field form-field-50 ps-2">
                      <label>Phone number</label>
                      <input type="text" name="phone" placeholder="+965" required />
                    </div>

                  </div>
                  <div class="remember">
                          <input type="checkbox" required/>
                          <label> I accept <a href="{{url('/privacy')}}">terms and conditions</a></label><br />
                        </div>
                  <div class="form-btn-field d-flex justify-content-between">

                   {{------
                    <div class="outline-btn">
                      <a href="{{url("checkout")}}">
                        <img
                          src={{asset("assetssmart/images/checkout/arrow-left-icon.svg")}}
                          alt="arrow-left-icon"
                        />
                        Back
                      </a>
                    </div>
                    --------}}
                    <div class="fill-btn">
                      <button type="submit" href="">
                        Next Step
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
