
    @extends('web.ar.layout')
    @section('content')

      <!-- Navigation Section HTML End -->

      <!-- Header Bredcrumb Section HTML Start -->

      <section id="Header-bredcrumb">
        <div class="header-bredcrumb-wrapper">
          <h4>تسجيل الدخول</h4>
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
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="sign-in-form">
                      <h4>تسجيل الدخول</h4>
                      <p>مرحبًا بعودتك</p>
                      <div class="form-input-field">
                        <label>الايميل</label>
                        <input
                          type="email"
                          name="email"
                          placeholder="Enter your mail"
                          required
                        />
                      </div>
                      <div class="form-input-field">
                        <label>الرقم السري</label>
                        <div class="position-relative">
                          <input
                            id="password"
                            type="password"
                            name="password"
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
                      <div
                        class="d-flex justify-content-between align-items-center pb-3"
                      >
                        <div class="remember">
                          <input type="checkbox" />
                          <label> تذكرني</label><br />
                        </div>
                        <div class="forgot-password">
                          <a href="#">نسيت الرقم السري</a>
                        </div>
                      </div>
                      <div class="form-btn-field">
                        <input type="submit" value="Sign in" />
                      </div>
                      <div class="or">
                        <p>Or</p>
                      </div>
                      {{-----
                      <div class="facebook-login">
                        <a href="#">
                          <img
                            src="assets/images/sing-in/facebook-icon.svg"
                            alt="facebook-icon"
                          />
                          Login with Facebook</a
                        >
                      </div>
                      <div class="google-login">
                        <a href="#">
                          <img
                            src="assets/images/sing-in/google-icon.svg"
                            alt="google-icon"
                          />
                          Login with Google</a
                        >
                      </div>
                      -------}}
                      <div class="account-toggle pt-3">
                        <p>Don’t have an account? <a href="{{url("register")}}">Sign up</a></p>
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
