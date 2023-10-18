
    @extends('web.ar.layout')
    @section('content')

      <!-- Navigation Section HTML End -->

      <!-- Header Bredcrumb Section HTML Start -->

      <section id="Header-bredcrumb">
        <div class="header-bredcrumb-wrapper">
          <h4>إعادة تعيين كلمة المرور</h4>
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
                  <form>
                    <div class="sign-in-form">
                      <h4>إعادة تعيين كلمة المرور</h4>
                      <p>إعادة تعيين كلمة المرور</p>
                      <div class="form-input-field">
                        <label>الباسورد</label>
                        <div class="position-relative">
                          <input
                            id="password"
                            type="password"
                            placeholder="Password"
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
                      <div class="form-input-field">
                        <label>تاكيد الباسورد</label>
                        <div class="position-relative">
                          <input
                            id="password"
                            type="password"
                            placeholder="Password"
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
                      <div class="form-btn-field">
                        <input type="submit" value="ارسال" />
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
