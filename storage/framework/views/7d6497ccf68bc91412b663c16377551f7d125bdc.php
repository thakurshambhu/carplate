<?php echo $__env->make('layouts.home-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <article class="page-content pageConWidth">
        <h1>Choose your payment method</h1>
        <p style="font-weight:300;margin-bottom:.5em;">You are about to make a payment of <strong>£100.00</strong> for:</p>
        <p>Deposit for registration <strong class="no-wrap">X33 RJP</strong> - Total price £819.80</p>

        <div class="payment-types">
            <div class="cards">
                <a href="<?php echo e(url('payment_details')); ?>" title="Visa" data-type="VISA"><img src="<?php echo e(asset('images/pay-visa.png')); ?>" alt="Visa Credit"></a>
                <a href="<?php echo e(url('payment_details')); ?>" title="Mastercard" data-type="MASTERCARD"><img src="<?php echo e(asset('images/pay-mcard.png')); ?>" alt="Mastercard"></a>
				<a href="<?php echo e(url('payment_details')); ?>" title="Visa Debit" data-type="DELTA"><img src="<?php echo e(asset('images/pay-visa-debit.png')); ?>" alt="Visa Debit"></a>
                <a href="<?php echo e(url('payment_details')); ?>" title="Mastercard Debit" data-type="MASTERCARDDEBIT"><img src="<?php echo e(asset('images/pay-mcard-debit.png')); ?>" alt="Mastercard Debit"></a>
				<a href="<?php echo e(url('payment_details')); ?>" title="Maestro" data-type="MAESTRO"><img src="<?php echo e(asset('images/pay-maestro.png')); ?>" alt="Maestro"></a>
				 <a href="<?php echo e(url('payment_details')); ?>" title="American Express" data-type="AMEX"><img src="<?php echo e(asset('images/pay-amex.png')); ?>" alt="American Express"></a>
                <a href="<?php echo e(url('payment_details')); ?>" title="Visa Electron" data-type="ELECTRON"><img src="<?php echo e(asset('images/pay-visa-electron.png')); ?>" alt="Visa Electron"></a>
                <a href="<?php echo e(url('payment_details')); ?>" title="JCB" data-type="JCB"><img src="<?php echo e(asset('images/pay-jcb.png')); ?>" alt="JCB"></a>
                <a href="<?php echo e(url('payment_details')); ?>" title="Visa Purchasing" data-type="PURCHASING"><img src="<?php echo e(asset('images/pay-visa-purchasing.png')); ?>" alt="Visa Purchasing"></a>
                <a href="<?php echo e(url('payment_details')); ?>" title="Visa VPay" data-type="VPAY"><img src="<?php echo e(asset('images/pay-vpay.png')); ?>" alt="Visa VPay"></a>
               
                
                
            </div>
            <div class="alt">					
                <a href="<?php echo e(url('payment_details')); ?>" title="ApplePay" data-type="VISA"><img src="<?php echo e(asset('images/pay-applepay.png')); ?>" alt="ApplePay"></a>
                <a href="<?php echo e(url('payment_details')); ?>" title="PayPal" data-type="PAYPAL"><img src="<?php echo e(asset('images/pay-paypal.png')); ?>" alt="PayPal"></a>
            </div>
        </div>

    </article>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views/frontend/payment.blade.php ENDPATH**/ ?>