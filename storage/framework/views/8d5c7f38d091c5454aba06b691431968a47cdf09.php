 <?php echo $__env->make('layouts.home-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <!--breadcrumbs area start-->
  <!-- <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <ul>
                          <li><a href="<?php echo e(url('/')); ?>">home</a></li>
                          <li>contact us</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div> -->
<!--breadcrumbs area end-->

  <!--<section class="text-banner">
    <div class="inner">
      <h2 class="heading">Contact us about a number plate</h2>
      <hr>
      <div class="block">
        <p class="plate">CRZ 227</p>
      </div>
          </div>
  </section> -->

  <div class="intro grayBg">
        <h2 class="heading">Contact us about a number plate</h2>
        <div class="priceBlock">
          <h3 class="plate">CRZ 227</h3>
        </div>
  </div>


  <!--contact area start-->
  <div class="contact-area">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8 col-lg-9">
          <div class="contact_message form">
            <h3>Your Details</h3>
            <form  method="POST" action="<?php echo e(url('/save_contact_form')); ?>" id="contact-us-form">
              <?php echo csrf_field(); ?>
                <div class="form-row">
                  <label class="form-label"> TITLE<sup>*</sup></label>
                  <div class="form-input">
                    <select name="title" data-validation="required" id="title">
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
                  <label class="form-label"> FIRST NAME<sup>*</sup></label>
                  <div class="form-input">
                    <input name="first_name" type="text" id="first_name" class="form-control">
                  </div>
                </div>

                <div class="form-row">
                  <label class="form-label"> SURNAME<sup>*</sup></label>
                  <div class="form-input">
                    <input name="surname" type="text" id="surname" class="form-control">
                  </div>
                </div>

                <div class="form-row">
                  <label class="form-label"> EMAIL<sup>*</sup></label>
                  <div class="form-input">
                    <input name="email" type="email" id="email" class="form-control">
                  </div>
                </div>

                <div class="form-row">
                  <label class="form-label">CONFIRM EMAIL<sup>*</sup></label>
                  <div class="form-input">
                    <input name="email" type="email" id="confirmemail" class="form-control">
                  </div>
                </div>

                <div class="form-row">
                  <label class="form-label"> PHONE<sup>*</sup></label>
                  <div class="form-input">
                    <input name="telephone" type="tel" id="telephone" class="form-control">
                  </div>
                </div>

                
                <div class="form-row textarea">
                  <label class="form-label"> MESSAGE<sup>*</sup></label>
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
            <div class="promo">
              <h3 class="">Call us about this number plate</h3>
              <p>During Office Hours <strong>(Mon-Sat 9am-5pm)</strong> - Prefer to talk to us about this number plate? Please call one of our friendly team to discuss.</p>
              <div class="phone"><p><strong>Sales Help &amp; Advice:</strong> <a href="tel:202-555-0191">202-555-0191</a></p>
              </div>
            </div>
            <div class="promo ">
              <h3 class="">Recognised resellers of DVLA Registrations</h3>               <p>Beware of cheaper prices, it could mean corners have been cut and you may not be covered.&nbsp; We are a recognised reseller of DVLA Registrations and a DVLA registered number plate supplier.</p>

              <p>We also provide a <strong>full money back guarantee.</strong></p>
            </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--contact area end-->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
</script><?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views/frontend/enquiry.blade.php ENDPATH**/ ?>