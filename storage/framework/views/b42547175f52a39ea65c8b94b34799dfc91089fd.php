 <?php echo $__env->make('layouts.home-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <!--breadcrumbs area start-->
    <!-- <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?php echo e(url('/')); ?>">home</a></li>
                            <li>Plates</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_title">
                        <h1>Plate numbers</h1>
                    </div>
                    <!--div class="shop_toolbar_wrapper">

                        <div class=" niceselect_option">

                            <div class="form-group">
                            <select name="filter_order" class="filter_order" class="form-control">
                                <option value="">Sort By</option>
                                <option value="asc">Price Low To High</option>
                                <option value="desc">Price High To Low</option>
                            </select>
                        </div>


                        </div>
                        <div class="page_amount">
                            <p>Showing 1–9 of 21 results</p>
                        </div>
                    </div!-->
                    <div class="plates_result">
                        <div class="row shop_wrapper">
                    <?php if(!empty($search_plates)): ?>
                        <?php $__currentLoopData = $search_plates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$plate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <div class="col-lg-3 col-md-4 col-12 ">
                            <div class="single_product">
                                <div class="blog_thumb">
                                  <a class="primary_img view_plate"  href="javascript:void()" data-toggle="modal" data-target="#modal_box" title="quick view" view-plate-id="<?php echo e($plate->id); ?>" ><?php echo e($plate->plate_number); ?></a>
                                    <!--  <a class="primary_img" href="<?php echo e(url('/plate_detail')); ?>/<?php echo e($plate->id); ?>"><img src="<?php if(!empty($plate->plateimage->media_url)): ?><?php echo e($plate->plateimage->media_url); ?><?php endif; ?>" alt=""></a>
                                  -->
                                   
                                    <!-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="javascript:void()" data-toggle="modal" data-target="#modal_box" title="quick view" view-plate-id="<?php echo e($plate->id); ?>" class="view_plate"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="javascript:void()" class ="save_plate" data-plate-id="<?php echo e($plate->id); ?>" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            
                                        </ul>
                                    </div> -->
                                </div>
                                <div class="product_content grid_content">
                                    <div class="content_inner">
                                        
                                        <div class="product_footer d-flex align-items-center">
                                            <div class="price_box">
                                                 <a class="view_plate"  href="javascript:void()" data-toggle="modal" data-target="#modal_box" title="quick view" view-plate-id="<?php echo e($plate->id); ?>" >VIEW</a>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$<?php echo e($plate->plate_price); ?></span>
                                            </div>
                                            <!-- <div class="add_to_cart">
                                                <a href="javascript:void(0)" class="add_item_to_cart" title="add to cart" data-plate-id=<?php echo e($plate->id); ?>><span class="lnr lnr-cart"></span></a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                      
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    </div>
                        
                    </div>
                    <!--shop toolbar end-->
                    
                   
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
        <!-- modal area start-->
    <div class="modal fade modal-box" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>

                <!-- <div class="modal_body" id="number_pate_detail_popup">
                </div> -->

                <div class="modal-wrapper" id="number_pate_detail_popup"></div>
            </div>
        </div>
    </div>

    <!-- modal area end-->

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views\frontend\search_plates.blade.php ENDPATH**/ ?>