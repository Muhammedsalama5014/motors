
    @extends('web.ar.layout')
    @section('content')
        <?php
        $setting = \App\Models\Setting::find(1);
        ?>

      <!-- Navigation Section HTML End -->

      <!-- Header Bredcrumb Section HTML Start -->

      <section id="Header-bredcrumb">
        <div class="header-bredcrumb-wrapper">
          <h4>تواصل معنا</h4>
          <div class="header-bredcrumb-menu">
            <ul class="d-flex justify-content-center align-items-center">
              <li><a href="{{url('ar/home')}}">الرئيسيه</a></li>
              <li><span> ></span></li>
              <li><a href="#">تواصل معنا</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Header Bredcrumb Section HTML End -->
    </header>

    <!-- Header Part HTML End -->

    <!-- Main Part HTML Start -->

    <main>
      <!-- Contact Section HTML Start -->

      <section id="Contact">
        <div class="contact-wrapper">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-8">
                <div class="contact-form-wrapper">
                  <form action="{{url("ar/contact")}}"  method="post">
                    @csrf
                    <div class="contact-form">
                      <div class="form-input-field">
                        <label>الاسم</label>
                        <input type="text" name="name" placeholder="name" required />
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="form-input-field form-field-50 pe-2">
                          <label>الايميل</label>
                          <input
                            type="email"
                            placeholder="email@mail.com"
                            name="email"
                            required
                          />
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
                            value="+965 "
                            name="phone"
                            required
                          />
                        </div>
                      </div>
                      <div class="form-input-field">
                        <label>العنوان</label>
                        <input type="text" name="sybject" placeholder="Subject" required />
                      </div>
                      <div class="form-input-field">
                        <label>رسالتك</label>
                        <textarea name="msg" required></textarea>
                      </div>
                      <div class="form-btn-field float-end pt-2">
                        <input type="submit" value="ارسال" />
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="contact-details">
                      <p>تواصل معنا مباشرة</p>
                      <div class="contact-info">
                          <ul>
                              @if($setting->email != null)
                                  <li>
                                      <img src={{asset("assetssmart/images/contact/sms.svg")}} alt="sms" /><a
                                          href="mailto:{{$setting->email}}"
                                      >{{$setting->email}}</a
                                      >
                                  </li>
                              @endif
                              @if($setting->phone != null)
                                  <li>
                                      <img
                                          src={{asset("assetssmart/images/contact/call.svg")}}
                          alt="call"
                                      /><a href="tel:{{$setting->phone}}">{{$setting->phone}}</a>
                                  </li>
                              @endif
                              @if($setting->mobile != null)
                                  <li>
                                      <img
                                          src={{asset("assetssmart/images/contact/call.svg")}}
                          alt="call"
                                      /><a href="tel:{{$setting->mobile}}">{{$setting->mobile}}</a>
                                  </li>
                              @endif

                              @if($setting->address1 != null)
                                  <li>
                                      <img
                                          src={{asset("assetssmart/images/contact/location.svg")}}
                          alt="location"
                                      /><a>{{$setting->address1}}</a>
                                  </li>
                              @endif
                              @if($setting->address2 != null)
                                  <li>
                                      <img
                                          src={{asset("assetssmart/images/contact/location.svg")}}
                          alt="location"
                                      /><a>{{$setting->address2}}</a>
                                  </li>
                              @endif
                              @if($setting->open != null)
                                  <li>
                                      <img
                                          src={{asset("assetssmart/images/contact/clock.svg")}}
                          alt="clock"
                                      />
                                      <span>{{$setting->open}}</span> <br /><span
                                          style="padding-left: 40px"
                                      >

                                  </li>
                              @endif
                          </ul>
                      </div>
                      @if($setting->map != null)
                          <div class="contact-map pt-5">
                              <iframe
                                  src="{{$setting->map}}"
                                  style="border: 0"
                                  allowfullscreen=""
                                  loading="lazy"
                                  referrerpolicy="no-referrer-when-downgrade"
                              ></iframe>
                          </div>
                      @endif
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Section HTML End -->
    </main>

    <!-- Main Part HTML End -->

    <!-- Footer Part HTML Start -->


    @endsection
