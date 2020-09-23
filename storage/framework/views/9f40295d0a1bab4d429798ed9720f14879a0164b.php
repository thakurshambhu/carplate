<div class="row shop_wrapper">
    <?php if(!empty($plates)): ?>
        <?php $__currentLoopData = $plates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$plate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
       <div class="col-lg-3 col-md-4 col-12 ">
            <div class="single_product">
                <div class="blog_thumb">
                    <a class="primary_img view_plate"  href="javascript:void()" data-toggle="modal" data-target="#modal_box" title="quick view" view-plate-id="<?php echo e($plate->id); ?>" ><?php echo e($plate->plate_number); ?></a>
                   <!-- <a class="primary_img" href="<?php echo e(url('/plate_detail')); ?>/<?php echo e($plate->id); ?>" style=""><?php echo e($plate->plate_number); ?></a> -->
                     <!-- <a class="primary_img" href="<?php echo e(url('/plate_detail')); ?>/<?php echo e($plate->id); ?>"><img src="<?php if(!empty($plate->plateimage->media_url)): ?><?php echo e($plate->plateimage->media_url); ?><?php endif; ?>" alt=""></a> -->
                 
                   
                    <!-- <div class="action_links">
                        <ul>
                            <li class="quick_button"><a href="javascript:void()" data-toggle="modal" data-target="#modal_box" title="quick view" view-plate-id="<?php echo e($plate->id); ?>" class="view_plate"> <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist"><a href="javascript:void(0)" class ="save_plate" data-plate-id="<?php echo e($plate->id); ?>" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                            
                        </ul>
                    </div> -->
                </div>
                <div class="product_content grid_content">
                    <div class="content_inner">
                        
                        <div class="product_footer d-flex align-items-center">
                            <div class="price_box">
                                 <a class="primary_img view_plate"  href="javascript:void()" data-toggle="modal" data-target="#modal_box" title="quick view" view-plate-id="<?php echo e($plate->id); ?>" >VIEW</a>
                            </div>
                            <div class="price_box">
                                <p><span class="current_price">&nbsp; $<?php echo e($plate->plate_price); ?></span>
                            </div>
                            
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
      
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    </div>
   <?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views/frontend/number_plates_list_ajax.blade.php ENDPATH**/ ?>