
    @extends('web.ar.layout')
    @section('content')

      <!-- Navigation Section HTML End -->

      <!-- Header Bredcrumb Section HTML Start -->

      <section id="Header-bredcrumb">
        <div class="header-bredcrumb-wrapper">
          <h4>Register</h4>
        </div>
      </section>
      <!-- Header Bredcrumb Section HTML End -->
    </header>

    <!-- Header Part HTML End -->

    <!-- Main Part HTML Start -->

    <main>
      <!-- Sign In Section HTML Start -->

      <section id="Sign-in">
        <div class="sign-in-wrapper">
          <div class="container">
            <div class="row sign-in-container">
              <div class="col-md-6">
                <div class="sign-in-form-wrapper">
                  <form method="POST" action="{{ url('en/register') }}">
                    @csrf
                    <div class="sign-in-form">
                      <h4>مستخدم جديد</h4>
                      <p>Create an account</p>
                      <div class="d-flex justify-content-between">
                        <div class="form-input-field ">
                          <label>الاسم</label>
                          <input
                            type="text"
                            name="name"
                            placeholder="First name"
                            required
                          />
                        </div>

                      </div>
                      <div class="form-input-field">
                        <label>الايميل</label>
                        <input
                          type="email" name="email"
                          placeholder="Enter your mail"
                          required
                        />
                      </div>
                      <div class="form-input-field">
                        <label>رقم الهاتف</label>
                        <input
                          type="text" name="mobile"
                          placeholder="Enter your phone number"
                          required
                        />
                      </div>
                      <div class="form-input-field">
                        <label>الباسورد</label>
                        <div class="position-relative">
                          <input
                            id="password" name="password"
                            type="password"
                            placeholder="******************"
                            required
                          />
                          <div class="eye">
                            <img
                              id="eye-off"
                              src={{asset("assetssmart/images/sing-in/eye-off.svg")}}
                              alt="eye-off"
                            />
                            <img
                              id="eye-on"
                              src={{asset("assetssmart/images/sing-in/eye-on.svg")}}
                              alt="eye-on"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="remember pb-3">
                        <input type="checkbox" />
                        <label> تذكرني</label><br />
                      </div>
                      <div class="form-btn-field">
                        <input type="submit" value="تسجيل" />
                      </div>
                      <div class="or">
                        <p>Or</p>
                      </div>

                      <div class="account-toggle pt-3">
                        <p>هل لديك حساب؟ <a href="{{url("signin")}}">تسجيل دخول </a></p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="sign-in-img float-end">
                  <img
                    src={{asset("assetssmart/images/sing-in/sign-in-img.png")}}
                    alt="sign-in-img"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Sign In Section HTML End -->
    </main>

    <!-- Main Part HTML End -->

    <!-- Footer Part HTML Start -->


    @endsection
