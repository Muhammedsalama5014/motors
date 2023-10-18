
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
                <p>2</p>
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
              <p>Already have an account? <a href="#">Log in</a></p>
              <form>
                <div class="checkout-form">
                  <div class="form-input-field">
                    <label>E-mail</label>
                    <input
                      type="email"
                      placeholder="Enter your mail"
                      required
                    />
                  </div>
                  <div class="d-flex">
                    <div class="form-input-field form-field-50 pe-2">
                      <label>First Name</label>
                      <input
                        type="text"
                        placeholder="Enter your name"
                        required
                      />
                    </div>
                    <div class="form-input-field form-field-50 ps-2">
                      <label>Last Name</label>
                      <input
                        type="text"
                        placeholder="Enter your name"
                        required
                      />
                    </div>
                  </div>
                  <div class="fill-btn form-btn-field float-end">
                    <a href="{{url("checkout2")}}">
                      Next Step
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
