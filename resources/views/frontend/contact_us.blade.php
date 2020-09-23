 @include('layouts.home-header')
 <!--breadcrumbs area start-->
  <!-- <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <ul>
                          <li><a href="{{url('/')}}">home</a></li>
                          <li>contact us</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div> -->
<!--breadcrumbs area end-->

  <section class="banner large" style="background-image:url(images/14-contact-header.jpg);">
    <div class="caption">
      <h2 class="heading">Contact Us</h2>
      <p>Please call us on <a href="tel:1111222333"><b>1111 222 333</b></a> for friendly advice &amp; assistance or complete online enquiry form below. We are here to help…</p>    
    </div>
  </section>

  <section class="intro pb-0 text-center">
    <div class="inner">
      <h2 class="heading">Make an enquiry</h2>
      <p>Our offices are open from 9am to 5pm, Monday to Saturday, so feel free to call us. However if you can’t make a call during those hours or would prefer to connect with us online, please use our contact form below.</p>   
    </div>
  </section>

  <!--contact area start-->
  <div class="contact-area">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8 col-lg-9">
          <div class="contact_message form">
            <h3>Your Details</h3>
            <form  method="POST" action="{{url('/save_contact_form')}}" id="contact-us-form">
              @csrf
                <div class="form-row">
                  <label class="form-label"> Title<sup>*</sup></label>
                  <div class="form-input">
                    <select name="title" data-validation="required">
                      <option value="Mr">Mr</option>
                      <option value="Mrs">Mrs</option>
                      <option value="Miss">Miss</option>
                      <option value="Ms">Ms</option>
                      <option value="Dr">Dr</option>
                      <option value="Prof">Prof</option>
                    </select>
                  </div>
                </div>

                <div class="form-row">
                  <label class="form-label"> First Name<sup>*</sup></label>
                  <div class="form-input">
                    <input name="first_name" type="text" id="first_name" class="form-control">
                  </div>
                </div>

                <div class="form-row">
                  <label class="form-label"> Surname<sup>*</sup></label>
                  <div class="form-input">
                    <input name="surname" type="text" id="surname" class="form-control">
                  </div>
                </div>

                <div class="form-row">
                  <label class="form-label"> Email<sup>*</sup></label>
                  <div class="form-input">
                    <input name="email" type="email" id="email" class="form-control">
                  </div>
                </div>

                <div class="form-row">
                  <label class="form-label">Confirm Email<sup>*</sup></label>
                  <div class="form-input">
                    <input name="email" type="email" id="confirmemail" class="form-control">
                  </div>
                </div>

                <div class="form-row">
                  <label class="form-label"> Phone<sup>*</sup></label>
                  <div class="form-input">
                    <input name="telephone" type="tel" id="telephone" class="form-control">
                  </div>
                </div>

                
                <div class="form-row textarea">
                  <label class="form-label"> Message<sup>*</sup></label>
                  <div class="form-input">
                    <textarea name="message" class="form-control" id="message"></textarea>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" id="contact-form"> Send</button>
                </div>
                <p class="form-messege"></p>
            </form>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-3">
          <div class="contact_message content">
            <aside class="sidebar">
                  <h3>Useful Numbers</h3>
                  <div class="phone">
                  <p>Enquiries: <a href="tel:01902791997"><strong>202-555-0191</strong></a></p>
                  <p>Aftersales: <a href="tel:01902791985"><strong>1 202 555 0191</strong></a></p>
                  </div>
                  <hr>
                  <h3>Our Offices</h3>
                  <address><strong>Postal Address:</strong><br>711 Charcot Unit A&nbsp;.&nbsp;<br>San Jose, CA 95131<br></address>
                  <address><strong>Trading Address:</strong><br>711 Charcot Unit A&nbsp;.&nbsp;<br>San Jose, CA 95131<br></address>
                  <address><strong>Registered Office:</strong><br>711 Charcot Unit A&nbsp;.&nbsp;<br>San Jose, CA 95131<br></address>
          </aside>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--contact area end-->
@include('layouts.footer')

<script type="text/javascript">
  $(document).ready(function() {
    $('#contact-form').click(function(e) {
      e.preventDefault();
	  var title = $('#title').val();
      var first_name = $('#first_name').val();
      var surname = $('#surname').val();
      var telephone = $('#telephone').val();
      var msg = $('#message').val();
      var contact_email = $('#email').val();
      var email_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      // var mobile_filter = /^[0-9-+]+$/;
      if($.trim(first_name) == ''){
        toastr.options.timeOut = 1500; // 2s
        toastr.error('This is a required field');
        return false;
      }else if($.trim(surname)==''){
              toastr.options.timeOut = 1500; // 2s
              toastr.error('This is a required field');
              return false;
      }
      else if($.trim(telephone)==''){
              toastr.options.timeOut = 1500; // 2s
              toastr.error('This is a required field');
              return false;
      }else if($.trim(msg)==''){
              toastr.options.timeOut = 1500; // 2s
              toastr.error('This is a required field');
              return false;
      }else if ($.trim(contact_email)==''){
              toastr.options.timeOut = 1500; // 2s
              toastr.error('This is a required field');
              return false;
      }else if(!email_filter.test(contact_email)){
              toastr.options.timeOut = 1500; // 1.5s
              toastr.error('Please Enter Valid Email.');
              return false;
	  }else if($("#email").val() != $("#confirmemail").val()){
			  toastr.options.timeOut = 1500; // 1.5s
              toastr.error('emails not match');
              return false;
             
      }else{
            toastr.options.timeOut = 3000; // 1.5s
            toastr.success('Plase check your email.We will Contact You Soon....!');
            setTimeout(function(){
               document.getElementById("contact-us-form").submit();
               // <%= form_tag charges_path, id: 'chargesForm' do %>
            }, 2000);
            
           
      }
    });
  });
</script>
