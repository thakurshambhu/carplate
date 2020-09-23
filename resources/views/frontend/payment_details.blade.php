<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanity.Club</title>
    <link href="{{asset('assets/css/payment.css')}}" rel="stylesheet" />
</head>
<body class="details st-inputs-style st-blocks-style">
    <div class="st-content">
        <div id="st-block-standard-details" class="st-block-standard st-layout-clear">
            <div id="st-block-standard-orderdetails" class="st-layout-halfwidth st-layout-floatleft">
                <img id="merchant-logo" src="{{asset('images/VanityCLUB-Logotype-White.png')}}">
                <img id="st-logo" src="https://payments.securetrading.net/images/ST_4_160_2/st/st-logo-small-paymentsby-latest.png">
                <div id="st-block-orderdetailsdiv" class="st-block"><div class="st-field-div st-mainamount-value">  <label class="fieldlabel" for="st-mainamount-value" id="st-mainamount-label">Amount:</label><p id="st-mainamount-value">£100.00</p></div>
                <div class="st-field-div st-currencyiso3a-value">  <label class="fieldlabel" for="st-currencyiso3a-value" id="st-currencyiso3a-label">Currency:</label><p id="st-currencyiso3a-value">GBP</p></div>
                <div class="st-field-div st-orderreference-value">  <label class="fieldlabel" for="st-orderreference-value" id="st-orderreference-label">Order reference:</label><p id="st-orderreference-value">X33 RJP Registration [Invoice: #264940]</p></div>
                <div class="st-field-div st-paymenttypedescription-value">  <label class="fieldlabel" for="st-paymenttypedescription-value" id="st-paymenttypedescription-label">Payment type:</label><p id="st-paymenttypedescription-value">Visa Purchasing</p></div>
                <div class="st-field-div st-merchantname-value">  <label class="fieldlabel" for="st-merchantname-value" id="st-merchantname-label">Merchant name:</label><p id="st-merchantname-value">Classic Enterprises USA Ltd - Vanity.Club</p></div>
                </div>
            </div> 
            <div id="changepaymentmethod" class="st-layout-halfwidth st-layout-floatright"><div id="st-block-standard-applepay" class="st-applepay-hide st-wallet-wrapper" style="display: none;"> 
            <form id="applepaymentsdetails" method="post" action=" " > 
                <div class="st-applepay-button"></div><div class="st-block" id="st-block-hiddendiv">
            <input type="hidden" name="_charset_"><input type="hidden" name="sttoken" value="7-aa33273d2f1ee355abdea1d3095d73980c73506b74f760ad5b50eac4190189bf">
            <input type="hidden" name="stnonce" value="7-4d111720f895caeb43db9368239c1dc5">
            </div>
            </form>
          <span class="st-wallet-hr">or</span>
        </div>
        <div class="st-block" id="st-block-smallpaymentchoicesdiv">
         <div id="VISA-paymenttype" class="paymentlogo" style="">
          <form method="post" action="details" id="VISA">
            <input type="hidden" name="_charset_">
            <input type="hidden" name="sttoken" value="7-aa33273d2f1ee355abdea1d3095d73980c73506b74f760ad5b50eac4190189bf"><input required="required" type="hidden" name="paymenttypedescription" value="VISA"><input type="hidden" name="stnonce" value="7-4d111720f895caeb43db9368239c1dc5"><input src="https://payments.securetrading.net/images/ST_4_160_2/logos/VISA-S.png" title="Visa" value="" alt="Visa" type="image" class="paymentcard">
          </form>
        </div><div id="DELTA-paymenttype" class="paymentlogo" style="">
          <form method="post" action="details" id="DELTA">
            <input type="hidden" name="_charset_">
            <input type="hidden" name="sttoken" value="7-aa33273d2f1ee355abdea1d3095d73980c73506b74f760ad5b50eac4190189bf"><input required="required" type="hidden" name="paymenttypedescription" value="DELTA"><input type="hidden" name="stnonce" value="7-4d111720f895caeb43db9368239c1dc5"><input src="https://payments.securetrading.net/images/ST_4_160_2/logos/DELTA-S.png" title="Visa Debit" value="" alt="Visa Debit" type="image" class="paymentcard">
          </form>
        </div><div id="ELECTRON-paymenttype" class="paymentlogo" style="">
          <form method="post" action="details" id="ELECTRON">
            <input type="hidden" name="_charset_">
            <input type="hidden" name="sttoken" value="7-aa33273d2f1ee355abdea1d3095d73980c73506b74f760ad5b50eac4190189bf"><input required="required" type="hidden" name="paymenttypedescription" value="ELECTRON"><input type="hidden" name="stnonce" value="7-4d111720f895caeb43db9368239c1dc5"><input src="https://payments.securetrading.net/images/ST_4_160_2/logos/ELECTRON-S.png" title="Visa Electron" value="" alt="Visa Electron" type="image" class="paymentcard">
          </form>
        </div><div id="PURCHASING-paymenttype" class="paymentlogo" style="">
          <form method="post" action="details" id="PURCHASING">
            <input type="hidden" name="_charset_">
            <input type="hidden" name="sttoken" value="7-aa33273d2f1ee355abdea1d3095d73980c73506b74f760ad5b50eac4190189bf"><input required="required" type="hidden" name="paymenttypedescription" value="PURCHASING"><input type="hidden" name="stnonce" value="7-4d111720f895caeb43db9368239c1dc5"><input src="https://payments.securetrading.net/images/ST_4_160_2/logos/PURCHASING-S.png" title="Visa Purchasing" value="" alt="Visa Purchasing" type="image" class="paymentcard">
          </form>
        </div><div id="VPAY-paymenttype" class="paymentlogo" style="">
          <form method="post" action="details" id="VPAY">
            <input type="hidden" name="_charset_">
            <input type="hidden" name="sttoken" value="7-aa33273d2f1ee355abdea1d3095d73980c73506b74f760ad5b50eac4190189bf"><input required="required" type="hidden" name="paymenttypedescription" value="VPAY"><input type="hidden" name="stnonce" value="7-4d111720f895caeb43db9368239c1dc5"><input src="https://payments.securetrading.net/images/ST_4_160_2/logos/VPAY-S.png" title="VPay" value="" alt="VPay" type="image" class="paymentcard">
          </form>
        </div><div id="MASTERCARD-paymenttype" class="paymentlogo" style="">
          <form method="post" action="details" id="MASTERCARD">
            <input type="hidden" name="_charset_">
            <input type="hidden" name="sttoken" value="7-aa33273d2f1ee355abdea1d3095d73980c73506b74f760ad5b50eac4190189bf"><input required="required" type="hidden" name="paymenttypedescription" value="MASTERCARD"><input type="hidden" name="stnonce" value="7-4d111720f895caeb43db9368239c1dc5"><input src="https://payments.securetrading.net/images/ST_4_160_2/logos/MASTERCARD-S.png" title="Mastercard" value="" alt="Mastercard" type="image" class="paymentcard">
          </form>
        </div><div id="MASTERCARDDEBIT-paymenttype" class="paymentlogo" style="">
          <form method="post" action="details" id="MASTERCARDDEBIT">
            <input type="hidden" name="_charset_">
            <input type="hidden" name="sttoken" value="7-aa33273d2f1ee355abdea1d3095d73980c73506b74f760ad5b50eac4190189bf"><input required="required" type="hidden" name="paymenttypedescription" value="MASTERCARDDEBIT"><input type="hidden" name="stnonce" value="7-4d111720f895caeb43db9368239c1dc5"><input src="https://payments.securetrading.net/images/ST_4_160_2/logos/MASTERCARDDEBIT-S.png" title="Mastercard Debit" value="" alt="Mastercard Debit" type="image" class="paymentcard">
          </form>
        </div><div id="MAESTRO-paymenttype" class="paymentlogo" style="">
          <form method="post" action="details" id="MAESTRO">
            <input type="hidden" name="_charset_">
            <input type="hidden" name="sttoken" value="7-aa33273d2f1ee355abdea1d3095d73980c73506b74f760ad5b50eac4190189bf"><input required="required" type="hidden" name="paymenttypedescription" value="MAESTRO"><input type="hidden" name="stnonce" value="7-4d111720f895caeb43db9368239c1dc5"><input src="https://payments.securetrading.net/images/ST_4_160_2/logos/MAESTRO-S.png" title="Maestro" value="" alt="Maestro" type="image" class="paymentcard">
          </form>
        </div><div id="PAYPAL-paymenttype" class="paymentlogo" style="">
          <form method="post" action="details" id="PAYPAL">
            <input type="hidden" name="_charset_">
            <input type="hidden" name="sttoken" value="7-aa33273d2f1ee355abdea1d3095d73980c73506b74f760ad5b50eac4190189bf"><input required="required" type="hidden" name="paymenttypedescription" value="PAYPAL"><input type="hidden" name="stnonce" value="7-4d111720f895caeb43db9368239c1dc5"><input src="https://payments.securetrading.net/images/ST_4_160_2/logos/PAYPAL-S.png" title="PayPal" value="" alt="PayPal" type="image" class="paymentcard">
          </form>
        </div>
        </div>
        <p>Select a logo to choose a different payment method</p>
              </div>
          </div>

        <!--Payment Form Start-->
        <form name="paymentsdetails" id="paymentsdetails" method="post" action="details" onsubmit="return checkForm()">
            <div class="st-block" id="st-block-hiddendiv">
              <input type="hidden" name="_charset_"><input type="hidden" name="sttoken" value="7-a38135598e9625070c965be87363d04537c2c1c29b08723ef0f37bd821b9041e">
              <input type="hidden" name="stnonce" value="7-4fd4e01205af40bb5a094f480ef28ad0">
            </div>
            
           <div id="st-block-standard-paymentsdetails" class="st-block-standard st-layout-clear">
                <h2>Payment Details</h2>
                <div class="st-block" id="st-block-paymentdetailsdiv">
                    <div class="st-block st-layout-halfwidth st-layout-floatright" id="st-block-paymentlogosdiv">
                        <img src="https://payments.securetrading.net/images/ST_4_160_2/logos/PURCHASING.png" alt="PURCHASING" class="paymentlogo"><img src="https://payments.securetrading.net/images/ST_4_160_2/logos/VBV.png" alt="VBV" class="threedlogo">  
                    </div>  
                    <div class="st-block st-layout-halfwidth st-layout-floatleft" id="st-block-paymenttypediv">
                        <div class="form-input field_pan">  
                            <label class="fieldlabel" for="st-pan-textfield" id="labelpan">Card number&nbsp;<span class="ast" title="This field is mandatory.">*</span></label><input name="pan" required="required" value="" autocomplete="off" type="tel" id="st-pan-textfield">
                        </div>
                        <div class="form-input field_expiry">  
                            <label class="fieldlabel" for="st-expirydate-textfield" id="labelexpirydate">Expiry date&nbsp;<span class="ast" title="This field is mandatory.">*</span></label>
                            <select required="required" id="st-expirymonth-dropdown" name="expirymonth"><option selected="selected" value=""></option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select><select required="required" id="st-expiryyear-dropdown" name="expiryyear"><option selected="selected" value=""></option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option></select>
                        </div>
                        <div class="form-input field_securitycode">  
                            <label class="fieldlabel" for="st-securitycode-textfield" id="labelsecuritycode">Security code&nbsp;<span class="ast" title="This field is mandatory.">*</span></label>
                            <input name="securitycode" required="required" value="" autocomplete="off" type="tel" id="st-securitycode-textfield">
                        </div>
                    </div>
                    <div class="st-layout-clear">
                        <div class="st-block st-layout-clear">
                            <p>Security code is on the back of your card</p>
                        </div>
                        <div class="st-block st-layout-floatleft">
                            <div id="cvv2location">
                                <img src="https://payments.securetrading.net/images/ST_4_160_2/st/cvv2.png" alt="Your 3 digit security code is on the back of your card">
                            </div>
                        </div>
                        <div class="st-block st-layout-floatright" id="st-block-processpaymentdiv">
                            <div class="submit-button">          
                                <input type="hidden" name="process"><input value="Pay Securely" id="submit" onclick="return checkFormStatus(this);" type="submit" class="form-submit">
                            </div>                  
                        </div>
                    </div>
                </div>            
            </div>            
            <div id="st-block-requirednoticediv" class="st-block st-layout-clear">
              <span class="ast">*</span>
              <span class="notice"> Indicates a required field</span>
            </div>
        </form>
          <!--Payment Form Ends-->
    </div><!--st-content-->

    <footer id="st-block-footer">
        <div class="st-content">
            Secured by <a class="footerlink" href="https://www.securetrading.com">Secure Trading</a> online payments ©2020 - Ref: P7-bbcxv9wr/peu
        </div>
    </footer>
    
</body>
</html>