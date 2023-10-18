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
                            <input type="text" placeholder="Username" name="username">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="account-form-group">
                            <input type="text" placeholder="Email" name="username">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="account-form-group">
                            <input type="text" placeholder="Phone Number" name="phone">
                            <i class="fa fa-sort-numeric-asc"></i>
                        </div>
                        <div class="account-form-group">
                            <input type="password" placeholder="Password" name="password">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="account-form-group">
                            <input type="password" placeholder="Confirm Password" name="password">
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
