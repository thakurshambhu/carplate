<?php echo $__env->make('layouts.home-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--breadcrumbs area start-->
<!-- <div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>">home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--breadcrumbs area end-->

<!--Checkout Page Start-->
<div class="container">
    <div class="intro  grayBg">
        <h2 class="heading">Order Your Plate</h2>
        <?php if(!empty($plate_record)): ?>
        <div class="priceBlock">
            <h3 class="plate"><?php echo e($plate_record->plate_number); ?></h3>
            <div class="priceSummary pt-2">
                <ul>
                    <li>
                        <label>Plate number Price:</label>
                        <span class="value">$<?php echo e($plate_record->plate_price); ?></span>
                    </li>
                    <li>
                        <label>DVLA Transfer Fee:</label>
                        <span class="value">$0.00</span>
                    </li>
                  
                    <li>
                        <label><strong>Total Amount:</strong></label>
                        <span class="value"><strong>$<?php echo e($plate_record->plate_price); ?></strong></span>
                    </li>
                </ul>
            </div>
        </div>
        <?php endif; ?>
    </div><!--ORDER YOUR PLATE-->
   
   <div class="contact-area">
    <div class="row">
        <div class="col-md-8 col-lg-9">
            <div class="contact_message form">
            <h3 class="h3-title">Purchaser Details</h3>
            <form  method="POST" action="<?php echo e(url('/shipping_address')); ?>" id="contact-us-form">
              <?php echo csrf_field(); ?>
                <div class="form-row">
                  <label class="form-label">TITLE<sup>*</sup></label>
                  <div class="form-input">
                    <select name="title" data-validation="required" id ='title'>
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
                    <input name="last_name" type="text" id="last_name" class="form-control">
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
                    <input name="phone_no" type="tel" id="telephone" class="form-control">
                  </div>
                </div>

                <div class="form-row">
                  <label class="form-label"> POSTCODE LOOKUP<sup>*</sup></label>
                  <div class="form-input">
                    <input name="postcode" type="text" id="postcode" class="form-control">
                  </div>
                </div>

                <div class="form-row">
                  <label class="form-label"> ADDRESS<sup>*</sup></label>
                  <div class="form-input">
                    <input name="address1" type="text" id="address1" class="form-control"><br/>
                     <input name="address2" type="text" id="address2" class="form-control">
                  </div>
                </div>

                <div class="form-row">
                  <label class="form-label"> TOWN<sup>*</sup></label>
                  <div class="form-input">
                    <input name="city" type="text" id="twon" class="form-control">
                  </div>
                </div>

                <div class="form-row">
                    <label class="form-label"> COUNTRY<sup>*</sup></label>
                    <div class="form-input">
                        <select name="country" id="county" data-validation="required">
                            <option value="" selected="selected">Select county</option>
                            <optgroup label="England">
                            <option value="1">Avon</option>
                            <option value="2">Bedfordshire</option>
                            <option value="3">Berkshire</option>
                            <option value="4">Buckinghamshire</option>
                            <option value="5">Cambridgeshire</option>
                            <option value="121">Channel Isles</option>
                            <option value="6">Cheshire</option>
                            <option value="7">Cleveland</option>
                            <option value="8">Cornwall</option>
                            <option value="9">County Durham</option>
                            <option value="10">Cumbria</option>
                            <option value="11">Derbyshire</option>
                            <option value="12">Devon</option>
                            <option value="13">Dorset</option>
                            <option value="14">East Sussex</option>
                            <option value="118">East Yorkshire</option>
                            <option value="15">Essex</option>
                            <option value="16">Gloucestershire</option>
                            <option value="17">Hampshire</option>
                            <option value="18">Herefordshire</option>
                            <option value="19">Hertfordshire</option>
                            <option value="122">Isle of Man</option>
                            <option value="20">Isle of Wight</option>
                            <option value="123">Isles of Scilly</option>
                            <option value="21">Kent</option>
                            <option value="22">Lancashire</option>
                            <option value="23">Leicestershire</option>
                            <option value="24">Lincolnshire</option>
                            <option value="25">London</option>
                            <option value="26">Merseyside</option>
                            <option value="27">Middlesex</option>
                            <option value="28">Norfolk</option>
                            <option value="29">North Humberside</option>
                            <option value="30">North Yorkshire</option>
                            <option value="31">Northamptonshire</option>
                            <option value="32">Northumberland</option>
                            <option value="33">Nottinghamshire</option>
                            <option value="34">Oxfordshire</option>
                            <option value="35">Shropshire</option>
                            <option value="36">Somerset</option>
                            <option value="37">South Humberside</option>
                            <option value="38">South Yorkshire</option>
                            <option value="39">Staffordshire</option>
                            <option value="40">Suffolk</option>
                            <option value="41">Surrey</option>
                            <option value="42">Tyne and Wear</option>
                            <option value="43">Warwickshire</option>
                            <option value="44">West Midlands</option>
                            <option value="45">West Sussex</option>
                            <option value="46">West Yorkshire</option>
                            <option value="47">Wiltshire</option>
                            <option value="48">Worcestershire</option>
                            </optgroup>
                            <optgroup label="Scotland">
                            <option value="49">Aberdeenshire</option>
                            <option value="50">Angus</option>
                            <option value="51">Argyll</option>
                            <option value="52">Ayrshire</option>
                            <option value="53">Banffshire</option>
                            <option value="54">Berwickshire</option>
                            <option value="55">Caithness</option>
                            <option value="56">Clackmannanshire</option>
                            <option value="57">Dumfriesshire</option>
                            <option value="58">Dunbartonshire</option>
                            <option value="59">East Lothian</option>
                            <option value="60">Fife</option>
                            <option value="61">Inverness-shire</option>
                            <option value="62">Isle of Arran</option>
                            <option value="63">Isle of Barra</option>
                            <option value="64">Isle of Benbecula</option>
                            <option value="65">Isle of Bute</option>
                            <option value="66">Isle of Canna</option>
                            <option value="67">Isle of Coll</option>
                            <option value="68">Isle of Colonsay</option>
                            <option value="69">Isle of Cumbrae</option>
                            <option value="70">Isle of Eigg</option>
                            <option value="71">Isle of Gigha</option>
                            <option value="72">Isle of Harris</option>
                            <option value="73">Isle of Iona</option>
                            <option value="74">Isle of Islay</option>
                            <option value="75">Isle of Jura</option>
                            <option value="76">Isle of Lewis</option>
                            <option value="77">Isle of Mull</option>
                            <option value="78">Isle of North Uist</option>
                            <option value="79">Isle of Rum</option>
                            <option value="80">Isle of Scalpay</option>
                            <option value="81">Isle of Skye</option>
                            <option value="82">Isle of South Uist</option>
                            <option value="83">Isle of Tiree</option>
                            <option value="84">Kincardineshire</option>
                            <option value="85">Kinross-shire</option>
                            <option value="86">Kirkcudbrightshire</option>
                            <option value="87">Lanarkshire</option>
                            <option value="88">Midlothian</option>
                            <option value="89">Morayshire</option>
                            <option value="90">Nairnshire</option>
                            <option value="91">Orkney</option>
                            <option value="92">Peeblesshire</option>
                            <option value="93">Perthshire</option>
                            <option value="94">Renfrewshire</option>
                            <option value="95">Ross-shire</option>
                            <option value="96">Roxburghshire</option>
                            <option value="97">Selkirkshire</option>
                            <option value="98">Shetland Islands</option>
                            <option value="99">Stirlingshire</option>
                            <option value="100">Sutherland</option>
                            <option value="101">West Lothian</option>
                            <option value="102">Wigtownshire</option>
                            </optgroup>
                            <optgroup label="Wales">
                            <option value="119">Ceredigion</option>
                            <option value="103">Clwyd</option>
                            <option value="104">Dyfed</option>
                            <option value="105">Gwent</option>
                            <option value="106">Gwynedd</option>
                            <option value="107">Mid Glamorgan</option>
                            <option value="109">Powys</option>
                            <option value="108">South Glamorgan</option>
                            <option value="110">West Glamorgan</option>
                            </optgroup>
                            <optgroup label="Northern Ireland">
                            <option value="111">County Antrim</option>
                            <option value="112">County Armagh</option>
                            <option value="113">County Down</option>
                            <option value="120">County Dublin</option>
                            <option value="114">County Fermanagh</option>
                            <option value="115">County Londonderry</option>
                            <option value="116">County Tyrone</option>
                            </optgroup>
                            <optgroup label="Other">
                            <option value="117">Other</option>
                            </optgroup>
                            </select>
                        </div>
                </div>

                <div class="form-row">
                    <label class="form-label"> POSTCODE<sup>*</sup></label>
                    <div class="form-input">
                        <input type="text" value="" name="postal_code" id="postcode" class="form-control" data-validation="required">
                    </div>
                </div>

                
                <h3 class="h3-title mt-5">Nominee Details</h3>
                <div class="form-row">
                  <label class="form-label"> NOMINEE NAME:</label>
                  <div class="form-input">
                    <input name="nominee" type="text" id="nominee" class="form-control">
                  </div>
                </div>

                <h3 class="h3-title mt-5">Optional Extras</h3>
                
                <div class="checkbox">
                    <input type="checkbox" name="plates" id="plates" value="Y">
                    <label for="plates">
                        <strong>Perspex number plates:</strong> £<span class="plates-holder">0.00</span>
                    </label>
                    <p>Click here to save and buy now!&nbsp;Professionally made acrylic plates to the highest quality British Standards, posted to your door in just 2 working days.</p>                </div>
                    <hr>
                    <div class="checkbox">
                    <input type="checkbox" id="transfer" name="transfer" value="Y">
                    <label for="transfer">
                        <strong>DVLA transfer service:</strong> £25.00                  </label>
                    <p>Hassle free - Let the CarReg experts transfer the reg quickly for you. (You just have to send us a copy of your V5C Registration Document)</p>               </div>
                    <hr>

                    <h3 class="h3-title mt-5">Order Summary</h3>
                    <div class="form-summary">
                        <table class="money">
                        <tbody>
                            <tr>
                                <td>
                                    <strong class="no-wrap"><?php echo e($plate_record->plate_number); ?></strong>
                                        <span class="warning">For use on vehicles first registered on or after <b>1st August 1989</b></span>                            
                                </td>
                                <td>$<?php echo e($plate_record->plate_price); ?></td>
                            </tr>
                            <tr>
                                <td>DVLA Transfer Fee</td>
                                <td>$0.00</td>
                            </tr>
                            <tr id="plates-main-holder" style="display: none;">
                                <td>Perspex Number Plates</td>
                                <td>£<span class="plates-holder">0.00</span></td>
                            </tr>
                            <tr id="transfer-main-holder" style="display:none;">
                                <td>Transfer Service</td>
                                <td>£25.00</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="total-table clearfix">
                        <table class="total payment">
                           <!--  <tbody>
                                <tr>
                                    <td>VAT</td>
                                    <td>£<span id="vat-holder">0.00</span></td>
                                </tr>
                                <tr>
                                    <td>Buy Online Discount</td>
                                    <td>-£25.00</td>
                                </tr>
                                <tbody> -->
                            <tfoot>
                                <tr>
                                    <td>TOTAL</td>
                                    <td>
                                        $<b id="total-holder"><?php echo e($plate_record->plate_price); ?></b>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="agree-checkbox button-row text-center">
                        <div class="checkbox">
                            <input type="checkbox" id="agreed_terms" name="agreed_terms" value="Y" data-validation="required">
                            <label for="agreed_terms">I agree to the terms as stated below</label>
                        </div>
                    </div>
                    <div class="button-row text-center"><button type="submit" class="btn btn-minwidth btn-purchase" id ="checkout-form">Secure checkout</button></div>
                </div>

            </form>
      </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="contact_message content">
                <aside class="sidebar">
                    <h3>PROUD MEMBERS OF</h3>
                    <img src="<?php echo e(asset('images/37-affiliate-logos.png')); ?>" width="330" height="53" alt="Proud Members of" class="mb-3">
                    <p>Federation of Small Businesses<br>
                    Members Inst. of Reg. Agents &amp; Dealers<br>
                    Cherished Numbers Guild<br>
                    Cherished Numbers Dealers Association<br>
                    Registration Numbers Club</p>
                    <hr>
                    <h3>YOU ARE SAFE & SECURE</h3>
                    <img src="<?php echo e(asset('images/14-sectigo-ssl.png')); ?>" width="210" height="83" alt="You Are Safe &amp; Secure" class="mb-3">
                    <p>We use the highest level of encryption possible to ensure your details are 100% safe and secure. Buying through our website is actually more secure than using a telephone.</p>

                </aside>
            </div>
        </div>
    </div>
    </div>
     
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script type="text/javascript">
  $(document).ready(function() {
    $('#checkout-form').click(function(e) {
      e.preventDefault();
      var first_name = $('#first_name').val();
      var last_name = $('#last_name').val();
      var telephone = $('#telephone').val();
      var postcode = $('#postcode').val();
	  var address1 = $('#address1').val();
	  var town = $('#town').val();
	  var county = $('#county').val();
      var contact_email = $('#email').val();
      var email_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      // var mobile_filter = /^[0-9-+]+$/;
      if($.trim(first_name) == ''){
        toastr.options.timeOut = 1500; // 2s
        toastr.error('This is a required field');
        return false;
      }else if($.trim(last_name)==''){
              toastr.options.timeOut = 1500; // 2s
              toastr.error('This is a required field');
              return false;
      }else if($.trim(address1)==''){
			toastr.options.timeOut = 1500; // 2s
            toastr.error('This is a required field');
            return false;
	  }else if($.trim(twon)==''){
			toastr.options.timeOut = 1500; // 2s
            toastr.error('This is a required field');
            return false;
	  }else if($.trim(county)==''){
			toastr.options.timeOut = 1500; // 2s
            toastr.error('Please select county');
            return false;
		  
      }else if($.trim(telephone)==''){
              toastr.options.timeOut = 1500; // 2s
              toastr.error('This is a required field');
              return false;
      }else if($.trim(postcode)==''){
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
            toastr.success('Information save successfuly');
            setTimeout(function(){
               document.getElementById("contact-us-form").submit();
               // <%= form_tag charges_path, id: 'chargesForm' do %>
            }, 2000);
            
           
      }
    });
  });
</script><?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views/frontend/checkout.blade.php ENDPATH**/ ?>