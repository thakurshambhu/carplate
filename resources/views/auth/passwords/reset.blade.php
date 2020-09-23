
@include('layouts.header')

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{url('/')}}">home</a></li>
                        <li>Reset Password</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->


<!-- customer login start -->
<div class="customer_login mt-32">
    <div class="container">
        <div class="row justify-content-center align-items-center">
           

            <!--register area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form register">
                    <h2>Reset Password</h2>
                    <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                       
                        <p>
                            <label>Email <span>*</span></label>
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </p>

                        

                        <p>
                            <label>Password<span>*</span></label>
                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </p>

                        <p>
                            <label>Confirm Password<span>*</span></label>
                               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                               
                        </p>
                        <div class="login_submit">
                            <button type="submit">  {{ __('Reset Password') }}</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--register area end-->
        </div>
    </div>
</div>
<!-- customer login end -->
@include('layouts.footer')

