<div class="car-image">
    <img src="<?php echo e(asset('/images/AB16 BRC.jpg')); ?>" alt="View your actual number plate">
</div>
<div class="content">
    <div class="text">
        <h2 class="heading"><?php echo e($view_plate->plate_title); ?></h2>
        <h3 class="price">$<?php echo e($view_plate->plate_price); ?></h3>
        <p>
            <a href="<?php echo e(url('checkout')); ?>/<?php echo e($view_plate->id); ?>" class="btn btn-success" title="Buy now">Buy now</a>
            <a href="<?php echo e(url('enquiry')); ?>" class="btn btn-default" title="Enquire now">Make an enquiry</a>
           <!--  <a href="javascript:void(0);" class="btn btn-secondary" title="Finance options">Finance options</a> -->
        </p>
        <p>
            <a href="javascript:void(0);" class="more">Save for later <span>(email link)</span></a>
        </p>
    </div>
</div>

<!-- 
<div class="container">
    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="modal_tab">
                <div class="tab-content product-details-large">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <div class="modal_tab_img">
                            <div class="preview-img">
                                <img src="<?php echo e(asset('images/orange_car.png')); ?>" alt="">
                                  <a class="number" href="javascript:void()"><?php if(!empty($view_plate->plate_number)): ?><?php echo e($view_plate->plate_number); ?> <?php endif; ?></a>
                            </div>
                          
                           
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="modal_right">
                <div class="modal_title mb-10">
                    <h2><?php echo e($view_plate->plate_title); ?></h2>
                </div>
                <div class="modal_price mb-10">
                    <span class="new_price">$<?php echo e($view_plate->plate_price); ?></span>
                </div>
                <div class="modal_description mb-15">
                    <p><?php echo e($view_plate->description); ?></p>
                </div>
                <div class="variants_selects">
                    
                    <div class="modal_add_to_cart">
                        <form action="">
                            <button type="submit" class="button add_item_to_cart" data-plate-id=<?php if(!empty($view_plate->id)): ?><?php echo e($view_plate->id); ?> <?php endif; ?>>buy now</button>
                             <a href="<?php echo e(url('checkout')); ?>/<?php echo e($view_plate->id); ?>" class="button">buy now</a>
                        </form>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div> --><?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views\frontend\number_plates_details_popup.blade.php ENDPATH**/ ?>