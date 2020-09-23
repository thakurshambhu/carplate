

@include('layouts.home-header')

<!--breadcrumbs area start-->
<!--div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{url('/')}}">home</a></li>
                        <li>Registration</li>
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
           

            <!--register area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form register">
                    <h2>Register</h2>
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <p>
                            <label>First Name <span>*</span></label>
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </p>
                        <p>
                            <label>Last Name <span>*</span></label>
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </p>

                        <p>
                            <label>Email <span>*</span></label>
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </p>

                        <p>
                            <label>Select User Type <span>*</span></label>
                              <!-- <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" placeholder="Buyer/Seller"> -->
                            <select name='role' class="form-control">
                                <option value="seller">Seller</option>
                                <option value="buyer">Buyer</option>
                            </select>

                                @error('role')
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

                        <!-- <p>
                            <label>Confirm Password<span>*</span></label>
                               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                               
                        </p> -->
                        <div class="login_submit">
                            <button type="submit"> {{ __('Register') }}</button>
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

