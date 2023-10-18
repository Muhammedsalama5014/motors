
    @extends('web.layout')
    @section('content')


      <!-- Navigation Section HTML End -->

      <!-- Header Bredcrumb Section HTML Start -->

      <section id="Header-bredcrumb">
        <div class="header-bredcrumb-wrapper">
          <h4>My account</h4>
          <div class="header-bredcrumb-menu">
            <ul class="d-flex justify-content-center align-items-center">
              <li><a href="{{ url('home') }}">Home</a></li>
              <li><span> ></span></li>
              <li><a href="#">My account</a></li>
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

                      <li>
                        <img
                          src={{asset("assetssmart/images/account/car-icon.svg")}}
                          alt="car-icon"
                        /><a href="{{url("myrental")}}">My Rental</a>
                      </li>
                      <li class="active" >
                        <img
                          src={{asset("assetssmart/images/account/setting-icon-light.svg")}}
                          alt="setting-icon-light"
                        /><a href="{{route('siteuser.edit' , auth()->user()->id)}}">Account Setting</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="account-details">
                  <h4>My Detailes</h4>
                  <div class="account-form-title">
                    <h6>Edit Profile</h6>
                    <hr />
                  </div>

                  <div class="account-form-wrapper pt-4">
                    <form action="{{route('siteuser.update' , auth()->user()->id)}}" method="post">
                        @csrf
                        @method('PUT')
                      <div class="account-form">

                        <div class="form-input-field">
                          <label>Email</label>
                          <input
                            type="email"
                            placeholder="mail@mail.com"
                            required
                            name="email"
                            value="{{$user->email}}"
                          />
                        </div>
                      </div>
                        <div class="account-form-buttons py-4">
                            <div class="fill-btn">
                                <button type="submit" name="submit" class="btn btn-air-success" style="background-color: #fe9923">Save</button>
                            </div>
                        </div>
                    </form>
                  </div>
                  <div class="account-form-title pt-4">
                    <h6>Change password</h6>
                    <hr />
                  </div>
                  <div class="account-form-wrapper pt-4">
                    <form action="{{route('siteuser.update' , auth()->user()->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        @if(Session::has('error'))
                            <p class="alert alert-danger">{{ Session::get('error') }}</p>
                        @endif
                      <div class="account-form password-form">
                        <div class="form-input-field">

                          <label>New password</label>
                          <input
                            type="password"
                            placeholder="***********"
                            name="password"
                            required
                          />
                        </div>
                        <div class="form-input-field">
                          <label>Confirm password</label>
                          <input
                            type="password"
                            placeholder="***********"
                            name="password_confirmation"
                            required
                          />

                        </div>


                              <button type="submit" name="submit" class="btn btn-air-success" style="background-color: #fe9923">Save</button>

                      </div>
                    </form>
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

    <!-- Footer Part HTML Start -->

    @endsection
