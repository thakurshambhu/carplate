<?php echo $__env->make('layouts.home-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!--breadcrumbs area start-->
  <!--   <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?php echo e(url('/')); ?>">home</a></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-32">
        <div class="container">
            <form action="#">
                <div class="row table_desc">
                    <div class="<?php if(count($items_cart) > 0): ?>col-lg-8 col-sm-8 <?php else: ?> col-lg-12 col-sm-12 <?php endif; ?>">
                        <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Plate Number</th>
                                            <th class="product-price">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($items_cart) > 0): ?>
                                        <?php $__currentLoopData = $items_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $plate_number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="product_remove"><a href="<?php echo e(url('remove_from_cart')); ?>/<?php echo e($plate_number->plate_id); ?>"><i class="fa fa-trash-o"></i></a></td>
                                            <!-- <td class="product_thumb"><a href="javascript:void()"><img src="<?php if(!empty($plate_number->plate->plateimage->media_url)): ?><?php echo e($plate_number->plate->plateimage->media_url); ?> <?php endif; ?>" alt="" style="width: 90px; height: 90px;"></a></td> -->
                                            <td class="product_thumb"><a href="javascript:void()" style="width: 90px; height: 90px;" class="font-anton"> <?php if(!empty($plate_number->plate->plate_number)): ?><?php echo e($plate_number->plate->plate_number); ?> <?php endif; ?></a></td>
                                            <td class="product-price">$<?php echo e($plate_number->plate->plate_price); ?></td>


                                        </tr>
                                        
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      
                                        <?php else: ?>
                                        <tr>
                                            <td colspan="3">
                                               <h4 style="text-align:center" >No Item in Cart</h4>
                                            </td>
                                        </tr>
                                        <?php endif; ?>

                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <?php if(count($items_cart) > 0): ?>
                    <div class="col-lg-4 col-sm-4">
                         <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p class="cart_amount">$<?php echo e($total_price); ?></p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Shipping Charge</p>
                                    <p class="cart_amount">$0.00</p>
                                </div>
                               <!--  <a href="#">Calculate shipping</a> -->

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">$<?php echo e($total_price); ?></p>
                                </div>
                                <div class="checkout_btn">
                                    <?php if(Auth::user()): ?>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#userCheckoutModal">Proceed to Checkout</a>
                                    <?php else: ?>
                                    <a href="<?php echo e(url('checkout')); ?>">Proceed to Checkout</a>
                                    <?php endif; ?>
                                </div>
                               <!--  <?php if(Auth::user()): ?>
                                    <a href="<?php echo e(url('checkout')); ?>">Proceed to Checkout</a>
                                <?php else: ?>
               
                                       <a href="<?php echo e(route('login')); ?>">Proceed to Checkout</a>
                                <?php endif; ?>
                                </div> -->
                            </div>
                        </div>
                        
                    </div>
                    <?php endif; ?>

                </div>
                <!--coupon code area start-->
               <!--  <div class="coupon_area">
                    <div class="row">
                        
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount">$<?php echo e($total_price); ?></p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Shipping Charge</p>
                                        <p class="cart_amount">$0.00</p>
                                    </div>
                                    <a href="#">Calculate shipping</a>

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount">$<?php echo e($total_price); ?></p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="<?php echo e(url('checkout')); ?>">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--coupon code area end-->
            </form>
        </div>
    </div>
    <!--shopping cart area end -->
     <div class="modal" id="userCheckoutModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Shipping Address</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- <form id="checkout_form" method="post" action="<?php echo e(url('paypal')); ?>">
                        <?php echo csrf_field(); ?>
                        <?php if(count($item_id) > 0): ?>
                        <?php $__currentLoopData = $item_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" name="artwork_arr[]" value="<?php echo e($id); ?>">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </form> -->
                    <div class="row">
                        
                        <form class="needs-validation" novalidate="" id="checkout_form" method="post" action="<?php echo e(url('checkout')); ?>">
                            <?php echo csrf_field(); ?>
                            
                            <div class="col-md-10 offset-md-1 order-md-1">
                               <!--  <div class="py-2 ">
                                    <h2>Checkout</h2>
                                </div> -->
                                <h4 class="mb-3">Shipping Address</h4>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="firstName">First Name</label>
                                        <input type="text" name="first_name" class="form-control" id="firstName" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" id="lastName" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>
                                     <div class="col-md-4 mb-3">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>
                                    <div class=" col-md-12 mb-3">
                                        <label for="address">Address</label>
                                        <textarea type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required=""></textarea>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="country">Country</label>
                                        <input type="text" name="country" class="form-control" id="country" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4 mb-3">
                                        <label for="state">State</label>
                                        <input type="text" name="state" class="form-control" id="state" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="city">City</label>
                                        <input type="text" name="city" class="form-control" id="city" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                     <div class="col-md-4 mb-3">
                                        <label for="phone_no">City</label>
                                        <input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="zip">Zip Code</label>
                                        <input type="text" name="postal_code" class="form-control" id="postal_code" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Zip code required.
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-12">
                                        <button class="btn btn-default btn-block" type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views\frontend\cart.blade.php ENDPATH**/ ?>