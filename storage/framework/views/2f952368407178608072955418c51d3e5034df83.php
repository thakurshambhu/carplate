

<?php echo $__env->make('layouts.home-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--breadcrumbs area start-->
<!--div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>">home</a></li>
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
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>
                        <p>
                            <label>First Name <span>*</span></label>
                            <input id="first_name" type="text" class="form-control <?php if ($errors->has('first_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('first_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="first_name" value="<?php echo e(old('first_name')); ?>" required autocomplete="first_name" autofocus>

                                <?php if ($errors->has('first_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('first_name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </p>
                        <p>
                            <label>Last Name <span>*</span></label>
                            <input id="last_name" type="text" class="form-control <?php if ($errors->has('last_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('last_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="last_name" value="<?php echo e(old('last_name')); ?>" required autocomplete="last_name" autofocus>

                                <?php if ($errors->has('last_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('last_name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </p>

                        <p>
                            <label>Email <span>*</span></label>
                             <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

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
                            <label>Select User Type <span>*</span></label>
                              <!-- <input id="role" type="text" class="form-control <?php if ($errors->has('role')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('role'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="role" value="<?php echo e(old('role')); ?>" required autocomplete="role" placeholder="Buyer/Seller"> -->
                            <select name='role' class="form-control">
                                <option value="seller">Seller</option>
                                <option value="buyer">Buyer</option>
                            </select>

                                <?php if ($errors->has('role')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('role'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </p>

                        <p>
                            <label>Password<span>*</span></label>
                              <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">

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

                        <!-- <p>
                            <label>Confirm Password<span>*</span></label>
                               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                               
                        </p> -->
                        <div class="login_submit">
                            <button type="submit"> <?php echo e(__('Register')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
            <!--register area end-->
        </div>
    </div>
</div>
<!-- customer login end -->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views/auth/register.blade.php ENDPATH**/ ?>