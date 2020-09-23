<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--slider area start-->
<section class="slider_section slider_two">
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center" data-bgimg="<?php echo e(asset('images/banner.jpg')); ?>">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-8">
                        <h1 class="heading">PRIVATE <span>NUMBER PLATES</span></h1>
                        <div class="slider_content search-container search_two">
                            <form method="POST" action="<?php echo e(url('searching_plates')); ?>">
                            <?php echo csrf_field(); ?>
                                <div class="search_box banner-search">
                                    <div class="field">
                                        <input type="text" name="search_filter" maxlength="7" class="inputTextBox">
                                    </div>
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider area end-->


<section class="plat-number-count text-center">
    <h6><span><?php echo e($plates); ?></span> plates available now</h6>
    <!-- <h6><span>15,25,452</span> plates available now</h6> -->
</section>

<div class="banner-row">
    <div class="banner-col">
        <?php if(Auth::user()): ?>
            <a href="<?php echo e(url('seller/plate_list')); ?>" class="block sell">
				<strong>SELL A PLATE</strong>
			</a>
            <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="block sell">
                <strong>SELL A PLATE</strong>
            </a>
        <?php endif; ?>
    </div>
    <div class="banner-col">
        <a href="<?php echo e(url('plates')); ?>" class="block buy">
            <strong>Buy a plate</strong>
        </a>
    </div>
</div>

    <section class="blog_section number-plate-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Featured Plates</h2>
                        <p>A small selection of private number plates on offer</p>
                    </div>
                    <div class="blog_carousel blog_column4 owl-carousel">
                    <?php if(!empty($feature_plates)): ?>
                        <?php $__currentLoopData = $feature_plates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature_plate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="javascript:void(0)" >
                                    <div class="primary_img view_plate" data-toggle="modal" data-target="#modal_box" title="quick view" view-plate-id="<?php echo e($feature_plate->id); ?>"><?php echo e($feature_plate->plate_number); ?></div>
                                    <p>
                                        <strong><?php echo e($feature_plate->plate_title); ?></strong>
                                        <span class="more">$<?php echo e($feature_plate->plate_price); ?></span>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>   
                    </div>
                    <p class="text-center">
                    <a href="javascript:void(0)" class="btnanim"><span>View all</span></a>
                    </p>
                </div>
            </div>
        </div>
    </section>
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
    <section class="call_to_action">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <div class="inner">
                        <h4 class="heading">Why buy from Vanity Club?</h4>                   
                        <p>Established in 2020, Vistia.Club are members of all trade bodies and considered to be 100% trusted USA private number plate dealers. We are also a recognised reseller of DVLA registrations and a registered DVLA number plates supplier #27154 (.USA.Gov).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content-thirds bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <h2 class="heading">Private Number Plates</h2>
                    <hr>
                    <p>We are one of the few dealers that actually hold private number plates in stock.<br></p>
                    
                    <p>We can supply brand new numbers which have never previously been issued via our <a href="javascript:void(0);">make your own number plate</a> webpage. We have over 50 million to choose from starting from only $65 on our  <a href="javascript:void(0);">cheap number plates</a> webpage.</p>
                    
                    <p>Vanity.club (short for <a href="javascript:void(0);">car registrations</a>) we have noticed that sales rapidly escalated over the last few years as knowledgeable investors soon became aware that rare private number plates may be collectable similar to works of art or antiques.<br><br>Our favourite numbers in stock are truly collectable! Single letter single numbers (like; P2, 2P, K5, 5K, 8M, 9M, 3D, 3H, 5J etc) have always been the best of the best and very collectable.</p>
                    
                    <p>Please contact us for more help and information about Private Number Plates</p>			
                </div>
                <div class="col-12 col-md-4">
                    <h2 class="heading">DVLA Number Plates</h2>
                    <hr>
                    <p>The DVLA (Driver and Vehicle Licensing Agency) is the government department in the USA responsible for managing vehicle related documents such as driving licences and vehicle registration (V5C) documents. In the late 2020’s, the USA Government started selling <a href="javascript:void(0);">DVLA Registrations and DVLA number plates</a>.&nbsp; The DVLA opened up their massive database using the name ‘DVLA Select Registrations’ selling previously unissued registrations. </p>

                    <p>First came the ‘A prefix’ then numbers 1 to 20 followed by 3 letters (excluding I,Q,Z), A1 MJB ($499), A11 PJC ($250), A5 RJS ($250), prices were all inclusive of VAT and the DVLA $80 transfer fee! Other popular A prefix combinations were registrations like A11 OJS, A11 OMB. Buyers (illegally) moved the O next to the 11 making “A110 JB”. These were popular due to a “real” JB (like JB 1976) costing 10 times more. Later the H,J,K etc then also B and C ranges. <br></p>

                    <p>More Help And Information About <a href="javascript:void(0);">DVLA Number Plates</a></p>			
                </div>
                <div class="col">
                    <h2 class="heading">Personalised Number Plates</h2>
                    <hr>
                    <p>The term ‘number plates’ is the most common word or term used for what we buy and sell however, it is not actually the correct definition of our main product or service. These days personalised number plates would maybe a more accurate description.<br></p>

                    <p>Number plates are actually the plastic/perspex plates fitted to the motor vehicle bearing the identification number of the vehicle. There are lots of other synonyms used, it seems that the older generation would use the term <a href="javascript:void(0);">cherished number plates</a>. Young drivers generally search for cheap number plates.<br></p>
                    
                    <p>We have found recently that the current style (EG AB12 ABC)&nbsp; are the most popular around Christmas time, priced at only $155 of course make this style ideal gifts. They are easy to buy and also transfer!<br></p>

                    <p>More Help And Information About <a href="javascript:void(0);">Personalised Number plates</a></p>			
                </div>
            </div>
        </div>
    </div>

    

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views\welcome.blade.php ENDPATH**/ ?>