
@include('layouts.home-header')

<!--breadcrumbs area start-->
<!--div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{url('/')}}">home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div-->
<!--breadcrumbs area end-->


<!-- customer login start -->
<div class="customer_login mt-32">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <!--login area start-->
            <div class="col-lg-6">
                <div class="account_form">
                    <h2>login</h2>
                    <form method="POST" action="{{url('submit_login')}}">
                      @csrf
                        <p>
                            <label>Username or email <span>*</span></label>
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </p>
                        <p>
                            <label>Passwords <span>*</span></label>
                             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </p>
                        <div class="login_submit d-flex justify-content-between align-items-center">
                            <!-- <div>
                                          <label for="remember">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                 {{ __('Remember Me') }}
                            </label>
                           
                            </div> -->
                    
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                          

                        </div>
                         <div class="col-md-12 my-3">
                          <button type="submit btn-block">login</button>
                     </div>
  
                    </form>

                     <div class="col-md-12 my-3">
                          <a href="{{ route('register') }}" class="text-danger btn-block text-center">Create Account</a>
                     </div>
                    
                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- customer login end -->
@include('layouts.footer')
