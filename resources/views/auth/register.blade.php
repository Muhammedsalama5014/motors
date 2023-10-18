{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}








 @extends('pagesLayout.layout')
@section('content')
    
<!-- Breadcromb Area Start -->
<section class="elgazal-breadcromb-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>Register Page</h3>
                    <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Register</li>
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
                        <h3>sign Up</h3>
                    </div>


                     @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            
                 <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="account-form-group">
                            <input type="text" placeholder="Username" name="name">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="account-form-group">
                            <input type="text" placeholder="Email" name="email">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="account-form-group">
                            <input type="text" placeholder="Phone Number" name="mobile">
                            <i class="fa fa-sort-numeric-asc"></i>
                        </div>
                        <div class="account-form-group">
                            <input type="password" placeholder="Password" name="password">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="account-form-group">
                            <input type="password" placeholder="Confirm Password" name="password_confirmation">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="remember-row">
                            <p class="checkbox remember signup">
                                <input class="checkbox-spin" type="checkbox" id="Freelance">
                                <label for="Freelance"><span></span>accept terms & condition</label>
                            </p>
                        </div>
                        <p>
                            <button type="submit" class="elgazal-theme-btn">Register now</button>
                        </p>
                    </form>
                    <div class="login-sign-up">
                        <a href="login.html">Already have an account?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Area End -->


@endsection
