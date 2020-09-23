@include('layouts.home-header')
    <article class="page-content pageConWidth">
        <h1>Choose your payment method</h1>
        <p style="font-weight:300;margin-bottom:.5em;">You are about to make a payment of <strong>£100.00</strong> for:</p>
        <p>Deposit for registration <strong class="no-wrap">X33 RJP</strong> - Total price £819.80</p>

        <div class="payment-types">
            <div class="cards">
                <a href="{{url('payment_details')}}" title="Visa" data-type="VISA"><img src="{{asset('images/pay-visa.png')}}" alt="Visa Credit"></a>
                <a href="{{url('payment_details')}}" title="Mastercard" data-type="MASTERCARD"><img src="{{asset('images/pay-mcard.png')}}" alt="Mastercard"></a>
				<a href="{{url('payment_details')}}" title="Visa Debit" data-type="DELTA"><img src="{{asset('images/pay-visa-debit.png')}}" alt="Visa Debit"></a>
                <a href="{{url('payment_details')}}" title="Mastercard Debit" data-type="MASTERCARDDEBIT"><img src="{{asset('images/pay-mcard-debit.png')}}" alt="Mastercard Debit"></a>
				<a href="{{url('payment_details')}}" title="Maestro" data-type="MAESTRO"><img src="{{asset('images/pay-maestro.png')}}" alt="Maestro"></a>
				 <a href="{{url('payment_details')}}" title="American Express" data-type="AMEX"><img src="{{asset('images/pay-amex.png')}}" alt="American Express"></a>
                <a href="{{url('payment_details')}}" title="Visa Electron" data-type="ELECTRON"><img src="{{asset('images/pay-visa-electron.png')}}" alt="Visa Electron"></a>
                <a href="{{url('payment_details')}}" title="JCB" data-type="JCB"><img src="{{asset('images/pay-jcb.png')}}" alt="JCB"></a>
                <a href="{{url('payment_details')}}" title="Visa Purchasing" data-type="PURCHASING"><img src="{{asset('images/pay-visa-purchasing.png')}}" alt="Visa Purchasing"></a>
                <a href="{{url('payment_details')}}" title="Visa VPay" data-type="VPAY"><img src="{{asset('images/pay-vpay.png')}}" alt="Visa VPay"></a>
               
                
                
            </div>
            <div class="alt">					
                <a href="{{url('payment_details')}}" title="ApplePay" data-type="VISA"><img src="{{asset('images/pay-applepay.png')}}" alt="ApplePay"></a>
                <a href="{{url('payment_details')}}" title="PayPal" data-type="PAYPAL"><img src="{{asset('images/pay-paypal.png')}}" alt="PayPal"></a>
            </div>
        </div>

    </article>
@include('layouts.footer')