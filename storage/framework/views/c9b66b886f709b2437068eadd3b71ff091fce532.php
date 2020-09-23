<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>">home</a></li>
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
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                      <?php echo csrf_field(); ?>
                        <p>
                            <label>Username or email <span>*</span></label>
                             <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </p>
                        
                        <div class="login_submit">
                           
                            <button type="submit"><?php echo e(__('Send Password Reset Link')); ?></button>

                        </div>

                    </form>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- customer login end -->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views\auth\passwords\email.blade.php ENDPATH**/ ?>