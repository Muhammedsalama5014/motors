@extends('pagesLayout.layout')

@section('content')

<!-- Breadcromb Area Start -->
<section class="elgazal-breadcromb-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>Login Page</h3>
                    <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcromb Area End -->


<!-- Login Area Start -->
<section class="elgazal-login-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login-box">
                    <div class="login-page-heading">
                        <i class="fa fa-key"></i>
                        <h3>sign in</h3>
                    </div>
                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="account-form-group">
                            <input type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email"
                             value="{{ old('email') }}"
                             required autocomplete="email" autofocus>
                            <i class="fa fa-user"></i>
                               @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="account-form-group">
                            <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <i class="fa fa-lock"></i>
                               @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="remember-row">


                                @if (Route::has('password.request'))
                                 <p class="lost-pass">
                                <a href="{{ route('password.request') }}">forgot password?</a>
                            </p>

                                @endif

                            <p class="checkbox remember">
                                <input class="checkbox-spin" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="Freelance"><span></span>Keep Me Signed In</label>
                            </p>
                        </div>
                        <p>
                            <button type="submit" class="elgazal-theme-btn">Login now</button>
                        </p>
                    </form>
                    <div class="login-sign-up">
                        <a href="register.html">Do you need an account?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Area End -->

@endsection
