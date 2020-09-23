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
            <!--login area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form">
                    <h2>login</h2>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
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
                        
                        <div class="login_submit">
                           
                            <button type="submit">{{ __('Send Password Reset Link') }}</button>

                        </div>

                    </form>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- customer login end -->
@include('layouts.footer')

