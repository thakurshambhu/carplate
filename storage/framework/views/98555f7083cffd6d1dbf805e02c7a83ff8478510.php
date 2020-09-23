<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>">home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->



<!--Checkout page section-->
<div class="Checkout_section mt-32">
    <div class="container">
        <div class="checkout_form">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h3>Shipping Address</h3>
                    <?php if(!empty($shipping_info)): ?>
                    <?php $__currentLoopData = $shipping_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="cards">
                        <div>
                            <div class="address_content">
                                <div class="bold truncate" title="<?php echo e($info->first_name); ?>"><?php echo e($info->first_name); ?></div>
                                <div class="bold truncate"><?php echo e($info->postal_code); ?></div>
                                <div class="truncate" title="<?php echo e($info->address); ?>"><?php echo e($info->address); ?></div>
                                <div class="truncate"><?php echo e($info->country); ?></div>
                                <div class="truncate"><?php echo e($info->state); ?></div>
                                <div class="truncate"><?php echo e($info->city); ?></div>
                                <div class="truncate"><?php echo e($info->email); ?></div>
                                <div class="truncate"><?php echo e($info->phone_no); ?></div>
                            </div>
                        </div>
                            <div class="address_options">
                                <!-- <div class="button" data-shipping-id="<?php echo e($info->id); ?>"><span>EDIT</span></div> -->
                                <a href="javascript:void(0)" class ="button" data-shipping-id="<?php echo e($info->id); ?>"><span>EDIT</span></a>
                            </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>

                <div class="col-lg-6 col-md-6">
                        <h3>Your order</h3>
                        <div class="order_table table-responsive">
                            <?php if(count($items_cart) > 0): ?>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Plate number</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php $__currentLoopData = $items_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($cart->plate->plate_number); ?></td>
                                                <td> $<?php echo e($cart->plate->plate_price); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Cart Subtotal</th>
                                        <td>$<?php echo e($total_price); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td><strong>$0.00</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong>$<?php echo e($total_price); ?></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <?php endif; ?>  
                                   
                        </div>
                        <div class="payment_method">
                           
                            <div class="order_button">
                                <button type="buttton">Proceed to Order</button>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--Checkout page section end-->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views\frontend\checkout1.blade.php ENDPATH**/ ?>