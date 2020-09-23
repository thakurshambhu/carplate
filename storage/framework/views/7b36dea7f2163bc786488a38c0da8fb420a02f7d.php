
<?php echo $__env->make('layouts.home-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <!--breadcrumbs area start-->
    <!-- <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?php echo e(url('/')); ?>">home</a></li>
                            <li>Add Plate</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--breadcrumbs area end-->

    <!--wishlist area start -->
    <div class="wishlist_area mt-30">
        <div class="container">
           
            <div class="message-alert-top">
                <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                  <?php echo e(session('status')); ?>

                </div>
                <?php endif; ?>
                <?php if(session('password_status')): ?>
                <div class="alert alert-success" role="alert">
                  <?php echo e(session('password_status')); ?>

                </div>
                <?php endif; ?>
                <?php if(Session::has('validation')): ?>
                <div class="alert alert-danger">
                  <span class="glyphicon glyphicon-ok"></span>
                  <em> <?php echo session('success_message'); ?></em>
                </div>
                <?php endif; ?>

                <?php if(Session::has('success_message')): ?>
                <div class="alert alert-success">
                <span class="glyphicon glyphicon-ok"></span>
                  <em> <?php echo session('success_message'); ?></em>
                </div>
                <?php endif; ?>


                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                </div>
                <?php endif; ?>
            </div>
        <form method="post"  action="<?php echo e(url('/seller/upload_platenumber')); ?>" enctype="multipart/form-data" id="buyer-profile-form">
            <?php echo csrf_field(); ?>
            <div class="col-sm-12">

                    
                <div class="row">
                    
                   
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="plate_number">Plate number:</label>
                            <input type="text" class="form-control inputTextBox"  placeholder="Enter Alphabets, Numbers and Space." value="" name="plate_number" id="plate_number" maxlength="7">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="search_keywords">Plate Title:</label>
                            <input type="text" class=" form-control"  placeholder="Title for plate" value="" name="plate_title" id="plate_title">
                        </div>
                    </div>
                        <div class="col-sm-4">
                        <div class="form-group">
                            <label for="plate_price">Plate Price:</label>
                            <input type="number" class=" form-control"  value="" placeholder="e.g: $20" name="plate_price" id="plate_price">
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="postal_code">Description:</label>
                            <textarea class="form-control" rows="2"  value="" name="description" id="plate-description"></textarea>
                        </div>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="postal_code">Is Feature plate?:</label>
                            <input type="radio" name="is_featured" value="yes" > Yes
                            <input type="radio" name="is_featured" value="no" checked="checked"> No
                        </div>
                    </div>
                </div> 

                

                <div class="row">
                    <div class="col-sm-12 text-center" >
                        <button type="submit" class="btn btn-default" id="update-profile">Save</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
  
      
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>





<?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views\seller\add_plate.blade.php ENDPATH**/ ?>