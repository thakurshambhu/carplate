
<?php echo $__env->make('layouts.home-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--breadcrumbs area start-->
<!--div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>">home</a></li>
                        <li>Login</li>
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
            <!--login area start-->
            <div class="col-lg-6">
                <div class="account_form">
                    <h2>login</h2>
                    <form method="POST" action="<?php echo e(url('submit_login')); ?>">
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
                        <p>
                            <label>Passwords <span>*</span></label>
                             <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </p>
                        <div class="login_submit d-flex justify-content-between align-items-center">
                            <!-- <div>
                                          <label for="remember">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                 <?php echo e(__('Remember Me')); ?>

                            </label>
                           
                            </div> -->
                    
                            <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
                          

                        </div>
                         <div class="col-md-12 my-3">
                          <button type="submit btn-block">login</button>
                     </div>
  
                    </form>

                     <div class="col-md-12 my-3">
                          <a href="<?php echo e(route('register')); ?>" class="text-danger btn-block text-center">Create Account</a>
                     </div>
                    
                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- customer login end -->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views/auth/login.blade.php ENDPATH**/ ?>