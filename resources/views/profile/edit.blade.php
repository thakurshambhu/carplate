

@include('layouts.home-header')

<!--breadcrumbs area start-->
<!-- <div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{url('/')}}">home</a></li>
                        <li>profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--breadcrumbs area end-->


<!-- customer login start -->
<div class="customer_login mt-32">
    <div class="container">
        <div class="message-alert-top">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif @if (session('password_status'))
            <div class="alert alert-success" role="alert">
                {{ session('password_status') }}
            </div>
            @endif @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
           @if(Session::has('success_message'))
            <div>
                <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('success_message') !!}</em></div>
            </div>
            @endif @if(Session::has('error_message'))
            <div>
                <div class="alert alert-danger"><em> {!! session('error_message') !!}</em></div>
            </div>
            @endif
        </div>

        <div class="row">
           

            <!--register area start-->
            <div class="col-lg-12 ">

                <div class="account_form register">
                     
                    <h2>Pofile</h2>
                    <div class="row">

                    <div class="col-lg-12">
                      <div class="image">
                                        <img src="{{ Auth::user()->media_url ? Auth::user()->media_url : url('/images/carplate.jpeg') }}" alt="..." class="img-circle profile_img"  id="blah">
                                    </div>   
                    </div>
                        <div class="col-lg-6 col-sm-6">
                                  <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            <div class="">
                                @csrf @method('PUT')
                                
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                   
                                    <!-- <input type="file" name="media_urls" class="btn btn-primary"  id="imgInp"/> -->
                                    <div class="custom-file mb-2">
                                      <input type="file" class="custom-file-input" name="media_urls" id="customFile">
                                      <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                               
                            </div>
                            <div class="">

                               
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="title">{{ __('Edit Profile') }}</h5>
                                    </div>

                                    <div class="col-12 categorySection">
                                     <div class="d-flex justify-content-between cat-sub">
                                        <div class="form-group">
                                           <label>First Name: <span>*</span></label>
                                           <input type="text" name=" first_name" placeholder="First Name" class="form-control" value="{{$user->first_name}}">
                                       </div>
                                        <div class="form-group">
                                           <label>Last Name: <span>*</span></label>
                                           <input  type="text" name="last_name" placeholder="Last Name" class="form-control" value="{{$user->last_name}}">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                           <label>Email: <span>*</span></label>
                                           <input  type="email" name="email" placeholder="Email" class="form-control" value="{{$user->email}}">
                                     </div>

                                     <div class="form-group">
                                           <label>Phone No: <span>*</span></label>
                                           <input  type="textuser" name="phone_no" placeholder="Phone No" class="form-control" value="{{$user->phone_no}}">
                                     </div>
                                   
                                     <div class="d-flex justify-content-between cat-sub">
                                        <div class="form-group">
                                           <label>Address / Street name: <span>*</span></label>
                                           <input type="text" name="address" placeholder="Address / Street name" class="form-control" value="{{$user->address}}">
                                        </div>
                                        <div class="form-group">

                                           <label>Postal code: <span>*</span></label>
                                           <input  type="text" name=" postal_code" placeholder="Postal code" class="form-control" value="{{$user->postal_code}}">

                                        </div>
                                     </div>
                                      <div class="d-flex justify-content-between cat-sub">
                                        <div class="form-group">
                                           <label>City: <span>*</span></label>
                                           <input type="text" name="state" placeholder="City" class="form-control" value="{{$user->state}}">
                                        </div>
                                        <div class="form-group">
                                           <label>Country: <span>*</span></label>
                                           <input  type="text" name=" country" placeholder="Country" class="form-control" value="{{$user->country}}">
                                        </div>
                                     </div>
                                  </div>
                                    <div class="card-footer ">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-success">{{ __('Save Changes') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>

                         <div class="col-lg-6 col-sm-6">

                              <form class="" action="{{ route('profile.password') }}" method="POST">
                            @csrf @method('PUT')
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="title">{{ __('Change Password') }}</h5>
                                </div>

                                <div class="col-12 categorySection">
                                     
                                     <div class="form-group">
                                           <label>Old Password: <span>*</span></label>
                                            <input type="password" name="old_password" class="form-control" maxlength="50" placeholder="Old password" required>
                                     </div>

                                     <div class="form-group">
                                           <label>New Password: <span>*</span></label>
                                          <input type="password" name="password" class="form-control" maxlength="50" placeholder="Password" required>
                                     </div>

                                    <div class="form-group">
                                           <label>Password Confirmation: <span>*</span></label>
                                           <input type="password" name="password_confirmation" class="form-control" maxlength="50" placeholder="Password Confirmation" required>
                                     </div>
                                   
                                     
                                  </div>
                                <div class="card-footer ">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-success">{{ __('Save Changes') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
              
                      
                </div>
            </div>
            <!--register area end-->
        </div>
    </div>
</div>
<!-- customer login end -->
@include('layouts.footer')

<script type="text/javascript">
    $("#customFile").change(function(event) {  
      RecurFadeIn();
      readURL(this);    
    });
    $("#customFile").on('click',function(event){
      RecurFadeIn();
    });
    function readURL(input) {    
      if (input.files && input.files[0]) {   
        var reader = new FileReader();
        var filename = $("#customFile").val();
        filename = filename.substring(filename.lastIndexOf('\\')+1);
        reader.onload = function(e) {
          //debugger;      
          $('#blah').attr('src', e.target.result);
          $('#blah').hide();
          $('#blah').fadeIn(500);      
          $('.custom-file-label').text(filename);             
        }
        reader.readAsDataURL(input.files[0]);    
      } 
      $(".alert").removeClass("loading").hide();
    }
    function RecurFadeIn(){ 
      console.log('ran');
      FadeInAlert("Wait for it...");  
    }
    function FadeInAlert(text){
      $(".alert").show();
      $(".alert").text(text).addClass("loading");  
    }
</script>


