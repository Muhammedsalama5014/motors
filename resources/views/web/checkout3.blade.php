
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
                <img src={{asset("assetssmart/images/checkout/check.svg")}} alt="check" />
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
              <div class="payment-method">
                <div class="payment-method-buttons">
                  <ul
                    class="nav nav-pills justify-content-center align-items-center mb-3"
                    id="pills-tab"
                    role="tablist"
                  >
                  {{--------
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link "
                        id="pills-master-card-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-master-card"
                        type="button"
                        role="tab"
                        aria-controls="pills-master-card"
                        aria-selected="true"
                      >
                        <span></span>
                        <img
                          draggable="false"
                          src={{asset("assetssmart/images/checkout/master-card-icon.svg")}}
                          alt="master-card-icon"
                        />
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        id="pills-visa-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-visa"
                        type="button"
                        role="tab"
                        aria-controls="pills-visa"
                        aria-selected="false"
                      >
                        <span></span>
                        <img
                          draggable="false"
                          src={{asset("assetssmart/images/checkout/visa-card-icon.svg")}}
                          alt="visa-card-icon"
                        />
                      </button>
                    </li>
                    ------}}
                    <li class="nav-item" role="presentation">
                      <button style="width:200px"
                        class="nav-link active"
                        id="pills-cod-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-cod"
                        type="button"
                        role="tab"
                        aria-controls="pills-cod"
                        aria-selected="false"
                      >
                        <span></span>
                        Cash On site
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
              <form>
                <div class="tab-content" id="pills-tabContent">
                  <div
                    class="tab-pane fade show "
                    id="pills-master-card"
                    role="tabpanel"
                    aria-labelledby="pills-master-card-tab"
                    tabindex="0"
                  >
                    <div class="checkout-form">
                      <div class="form-input-field">
                        <label>Name on card</label>
                        <input
                          type="text"
                          placeholder="Enter your name"
                          required
                        />
                      </div>
                      <div class="d-flex">
                        <div class="form-input-field form-field-65 pe-2">
                          <label>Card Number</label>
                          <input
                            type="text"
                            placeholder="0000-0000-0000-0000"
                            required
                          />
                        </div>
                        <div class="form-input-field form-field-35 ps-2">
                          <label>Cvv</label>
                          <input
                            type="text"
                            placeholder="Enter your CVV"
                            required
                          />
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="form-input-field form-field-50 pe-2">
                          <label>Exp-month</label>
                          <select>
                            <option value="May">May</option>
                            <option value="June">June</option>
                          </select>
                        </div>
                        <div class="form-input-field form-field-50 ps-2">
                          <label>Exp-Year</label>
                          <select>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                          </select>
                        </div>
                      </div>
                      <div
                        class="form-btn-field d-flex justify-content-between"
                      >
                        <div class="outline-btn">
                          <a href="{{url("checkout2")}}">
                            <img
                              src={{asset("assetssmart/images/checkout/arrow-left-icon.svg")}}
                              alt="arrow-left-icon"
                            />
                            Back
                          </a>
                        </div>
                        <div class="fill-btn">
                          <a href="{{url("payment")}}">
                            Next Step
                            <img
                              src={{asset("assetssmart/images/checkout/arrow-right-icon.svg")}}
                              alt="arrow-right-icon"
                            />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="pills-visa"
                    role="tabpanel"
                    aria-labelledby="pills-visa-tab"
                    tabindex="0"
                  >
                    <h2>Visa Card Content Goes Here</h2>
                  </div>
                  <div
                    class="tab-pane fade show active"
                    id="pills-cod"
                    role="tabpanel"
                    aria-labelledby="pills-cod-tab"
                    tabindex="0"
                  >
                    <h2>Cash On Site Content Goes Here</h2>
                    days {{$days}} <br>
                    price per day {{$price}} <br>
                    total price {{$totalprice}} <br>

                    <div
                    class="form-btn-field d-flex justify-content-between mt-5"
                  >
                    <div class="outline-btn">
                      <a href="{{url("checkout2")}}">
                        <img
                          src={{asset("assetssmart/images/checkout/arrow-left-icon.svg")}}
                          alt="arrow-left-icon"
                        />
                        Back
                      </a>
                    </div>
                    <div class="fill-btn">
                      <a href="{{url("payment")}}">
                       Confirm
                        <img
                          src={{asset("assetssmart/images/checkout/arrow-right-icon.svg")}}
                          alt="arrow-right-icon"
                        />
                      </a>
                    </div>
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

    <!-- Footer Part HTML Start -->

    @endsection
