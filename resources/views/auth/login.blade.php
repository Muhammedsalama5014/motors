{{-- @extends('pagesLayout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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




 @extends('web.layout')
 @section('content')

   <!-- Navigation Section HTML End -->

   <!-- Header Bredcrumb Section HTML Start -->

   <section id="Header-bredcrumb">
     <div class="header-bredcrumb-wrapper">
       <h4>Sign in</h4>
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
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
             <div class="sign-in-form-wrapper">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                 <div class="sign-in-form">
                   <h4>Sign in</h4>
                   <p>Welcome Back</p>
                   <div class="form-input-field">
                     <label>E-mail</label>
                     <input
                       type="email"
                       name="email"
                       placeholder="Enter your mail"
                       required
                     />
                   </div>
                   <div class="form-input-field">
                     <label>Password</label>
                     <div class="position-relative">
                       <input
                         id="password"
                         name="password"
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
                   <div
                     class="d-flex justify-content-between align-items-center pb-3"
                   >
                     <div class="remember">
                       <input type="checkbox" />
                       <label> Remember me</label><br />
                     </div>
                     <div class="forgot-password">
                       <a href="#">Forget Password?</a>
                     </div>
                   </div>
                   <div class="form-btn-field">
                     <input type="submit" value="Sign in" />
                   </div>
                   <div class="or">
                     <p>Or</p>
                   </div>
                   {{---------
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
                   ---------}}
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



