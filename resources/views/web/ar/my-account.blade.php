
    @extends('web.ar.layout')
    @section('content')

      <!-- Navigation Section HTML End -->

      <!-- Header Bredcrumb Section HTML Start -->

      <section id="Header-bredcrumb">
        <div class="header-bredcrumb-wrapper">
          <h4>حسابي</h4>
          <div class="header-bredcrumb-menu">
            <ul class="d-flex justify-content-center align-items-center">
              <li><a href="#">الرئيسيه</a></li>
              <li><span> ></span></li>
              <li><a href="#">حسابي</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Header Bredcrumb Section HTML End -->
    </header>

    <!-- Header Part HTML End -->

    <!-- Main Part HTML Start -->

    <main>
      <!-- My account Section HTML Start -->

      <section id="Account">
        <div class="account-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="account-sidebar">
                  <h4>My Account</h4>
                  <div class="account-sidebar-menu">
                    <ul>
                        <li class="active">
                          <img
                            src={{asset("assetssmart/images/account/profile-icon.svg")}}
                            alt="profile-icon"
                          /><a href="{{url("ar/myaccount")}}">تفاصيلي</a>
                        </li>
                        <li>
                          <img
                            src={{asset("assetssmart/images/account/car-icon.svg")}}
                            alt="car-icon"
                          /><a href="{{url("ar/myrental")}}">إيجاري</a>
                        </li>
                        <li >
                          <img
                            src={{asset("assetssmart/images/account/setting-icon-light.svg")}}
                            alt="setting-icon-light"
                          /><a href="{{url("ar/accountsetting")}}">إعدادات الحساب</a>
                        </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="account-details">
                  <h4>My Detailes</h4>
                  <div class="account-form-title">
                    <h6>Personal Information</h6>
                    <hr />
                  </div>
                  <div class="d-flex pt-4">
                    <div class="account-form-text">
                      <p>
                        المعلومات الشخصية هي أي معلومات يمكن
                        تحديد شخص ، من اسم شخص ما وعنوانه
                        معرّف الجهاز ورقم الحساب
                      </p>
                    </div>
                    <div class="account-form-wrapper">
                      <form>
                        <div class="account-form">
                          <div class="d-flex justify-content-between">
                            <div class="form-input-field form-field-50 pe-2">
                              <label>الاسم الأول</label>
                              <input
                                type="text"
                                placeholder="Ibrahim"
                                required
                              />
                            </div>
                            <div class="form-input-field form-field-50 ps-2">
                              <label>اسم العائلة</label>
                              <input type="text" placeholder="Mhmd" required />
                            </div>
                          </div>
                          <div class="d-flex justify-content-between">
                            <div class="form-input-field form-field-50 pe-2">
                              <label>تاريخ الميلاد</label>
                              <input type="date" required />
                            </div>
                            <div
                              class="form-input-field form-field-50 form-group md-group show-label ps-2"
                            >
                              <label class="pb-2">رقم الهاتف</label>
                              <br />
                              <input
                                type="tel"
                                id="phone"
                                placeholder="+20123 456 78"
                                value="+1 "
                                required
                              />
                            </div>
                          </div>
                          <div class="form-input-field">
                            <label>العنوان</label>
                            <select>
                              <option value="Address">Address</option>
                              <option value="Address2">Address2</option>
                            </select>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="account-form-title pt-4">
                    <h6>الايميل</h6>
                    <hr />
                  </div>
                  <div class="d-flex pt-4">
                    <div class="account-form-text">
                      <p>
                        المعلومات الشخصية هي أي معلومات يمكن
                        تحديد شخص ، من اسم شخص ما وعنوانه
                        معرّف الجهاز ورقم الحساب
                      </p>
                    </div>
                    <div class="account-form-wrapper">
                      <form>
                        <div class="account-form">
                          <div class="form-input-field">
                            <label>Email</label>
                            <input
                              type="email"
                              placeholder="mail@mail.com"
                              required
                            />
                          </div>
                          <div
                            class="account-form-buttons d-flex justify-content-end pt-5 pb-4"
                          >
                            <div class="outline-btn pe-3">
                              <a href="#">تعديل</a>
                            </div>
                            <div class="fill-btn">
                              <a href="">حفظ</a>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- My account Section HTML End -->
    </main>

    <!-- Main Part HTML End -->

    @endsection
