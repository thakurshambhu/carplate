<?php echo $__env->make('layouts.home-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <p class="text-right mx-3 mt-4"><a href="<?php echo e(url('seller/add_plate')); ?>" class="btn btn-orange">Create Number Plate</a></p>
    <!--wishlist area start -->
    <div class="wishlist_area mt-30">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc wishlist table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Plate Name</th>
                                    <th>Plate Description</th>
                                    <th>Plate Number</th>
                                    <th>Plate price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($plate_list)): ?>
                                <?php $__currentLoopData = $plate_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$plate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($plate->plate_title); ?></td>
                                    <td><?php echo e(substr($plate->description,0,20). '...'); ?></td>
                                    <td><?php echo e($plate->plate_number); ?></td>
                                    <!--  <td class="font-anton" style="width: 90px; height: 90px;" class=""><?php echo e($plate->plate_number); ?></td> -->
                                    <td>$<?php echo e($plate->plate_price); ?></td>
                                    <td class="text-center actions">
                                        <a class="editLink" href="<?php echo e(url('/seller/edit_plate')); ?>/<?php echo e($plate->id); ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                        <a  class="deleteLink" href="<?php echo e(url('/seller/delete_plate')); ?>/<?php echo e($plate->id); ?>" title="Delete"><i class="fa fa-times"></i></a>
                                        <a class="statusLink" href="<?php echo e(url('/seller/change_plate_status')); ?>/<?php echo e($plate->id); ?>/<?php echo e($plate->is_publised); ?>" title="<?php if($plate->is_publised == 'publish'): ?> Click to Un-Publish <?php else: ?> Click to Publish <?php endif; ?>"><i class="fa fa-power-off"></i></a>
										<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                         
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            </tbody>
                         
                        </table>

                        </div>
                    </div>
                </div>

            </form>
           
        </div>
    </div>
    <!--wishlist area end -->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>






<?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views/seller/plate_list.blade.php ENDPATH**/ ?>