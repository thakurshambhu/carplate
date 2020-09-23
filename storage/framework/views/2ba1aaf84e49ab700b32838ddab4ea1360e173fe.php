<?php echo $__env->make('layouts.home-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?php echo e(url('/')); ?>">home</a></li>
                            <li>Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--wishlist area start -->
    <div class="wishlist_area mt-30">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc wishlist">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Plate Number</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_total">Add To Cart</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($saved_plate) > 0): ?>
                                        <?php $__currentLoopData = $saved_plate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $plate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="product_remove"><a href="<?php echo e(url('remove_from_wishlist')); ?>/<?php echo e($plate->plate_id); ?>"><i class="fa fa-trash-o"></i></a></td>
                                           <!--  <td class="product_thumb"><a href="#"><img src="<?php if(!empty($plate->plate->plateimage->media_url)): ?><?php echo e($plate->plate->plateimage->media_url); ?> <?php endif; ?>" alt="" style="width: 90px; height: 90px;"></a></td> -->

                                             <td class="product_thumb"><a href="javascript:void()" style="width: 90px; height: 90px;" class="font-anton"><?php if(!empty($plate->plate->plate_number)): ?><?php echo e($plate->plate->plate_number); ?> <?php endif; ?></a></td>
                                            <td class="product-price">$<?php echo e($plate->plate->plate_price); ?></td>
                                            <td class="product_total"><a href="javascript:void()" class="add_item_to_cart" data-plate-id=<?php echo e($plate->plate->id); ?>>Add To Cart</a></td>

                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        <tr>
                                            <td colspan="4">
                                                
                                                        <h4 style="text-align:center">No Item In Your Wishlist</h4>
                                                   
                                            </td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>

            </form>
           
        </div>
    </div>
    <!--wishlist area end -->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>






<?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views\frontend\saved_plate.blade.php ENDPATH**/ ?>