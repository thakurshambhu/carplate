<?php echo $__env->make('layouts.home-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--breadcrumbs area start-->
<!-- <div class="breadcrumbs_area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb_content">
          <ul>
            <li><a href="<?php echo e(url('/')); ?>">home</a></li>
            <li>Frequently Questions</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!--breadcrumbs area end-->

<div class="container">
  <div class="grid sidebar-left clearfix">
    <div class="page-content">
      <h1>General FAQs</h1>
      <p class="sub-heading">Below are frequently asked questions, you may find the answer for yourself</p>

      <div class="accordion_area">
        <div id="accordion" class="card__accordion">

          <div class="card card_dipult">
            <div class="card_accor" id="headingOne">
              <h2 class="faq-question collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <span>Mauris congue euismod purus at semper. Morbi et vulputate massa?</span>
              </h2>
            </div>
            <div id="collapseOne" class="faq-answer collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
            </div>
          </div>
          
          <div class="card  card_dipult">
            <div class="card_accor" id="headingTwo">
              <h2 class="faq-question collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <span> Donec mattis finibus elit ut tristique?</span>
              </h2>
            </div>
            <div id="collapseTwo" class="faq-answer collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>  
            </div>
          </div>

          <div class="card  card_dipult">
            <div class="card_accor" id="headingThree">
              <h2 class="faq-question collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <span>Aenean elit orci, efficitur quis nisl at, accumsan?</span>
              </h2>
            </div>
            <div id="collapseThree" class="faq-answer collapse" aria-labelledby="headingThree" data-parent="#accordion">  
              <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
            </div>
          </div>

          <div class="card  card_dipult">
            <div class="card_accor" id="headingfour">
              <h2 class="faq-question collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                <span>Pellentesque habitant morbi tristique senectus et netus?</span>
              </h2>
            </div>
            <div id="collapseeight" class="faq-answer collapse" aria-labelledby="headingfour" data-parent="#accordion">
              <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>  
            </div>
          </div>

          <div class="card card_dipult">
            <div class="card_accor" id="headingfive">
              <h2 class="faq-question collapsed" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                <span>Nam pellentesque aliquam metus?</span>
              </h2>
            </div>
            <div id="collapseseven" class="faq-answer collapse" aria-labelledby="headingfive" data-parent="#accordion">
              <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
            </div>
          </div>

          <div class="card card_dipult">
            <div class="card_accor" id="headingsix">
              <h2 class="faq-question collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                <span>Aenean elit orci, efficitur quis nisl at?class</span>
              </h2>
            </div>
            <div id="collapsefour" class="faq-answer collapse" aria-labelledby="headingsix" data-parent="#accordion">
              <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
            </div>
          </div>

          <div class="card  card_dipult">
            <div class="card_accor" id="headingseven">
              <h2 class="faq-question collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                <span>Morbi gravida, nisi id fringilla ultricies, elit lorem?</span>
              </h2>
            </div>
            <div id="collapsefive" class="faq-answer collapse" aria-labelledby="headingseven" data-parent="#accordion">
              <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
            </div>
          </div>

          <div class="card  card_dipult">
              <div class="card_accor" id="headingeight">
                <h2 class="faq-question collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                  <span>Aenean elit orci, efficitur quis nisl at, accumsan?</span>
                </h2>
              </div>
              <div id="collapsesix" class="faq-answer collapse" aria-labelledby="headingeight" data-parent="#accordion">
                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
              </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="sidebar-menu searchfield open">
      <h4>Support</h4>
      <form action=""  class="sidebar-search kb_search" role="search">
                <div class="field">
                    <input type="text" name="query" class="kb_query" aria-label="Search">
                    <input type="submit" value="Go" class="button">
                </div>
      </form>
      <ul class="sidebar-links">
        <li>
          <a href="<?php echo e(url('faq')); ?>">FAQs</a>
        </li>
        <li>
          <a href="<?php echo e(url('price-fees')); ?>">Prices & Fees</a>
        </li>
        <li>
          <a href="<?php echo e(url('payments')); ?>">Payments</a>
        </li>
      </ul>
    </nav>
  </div>
</div>

<!-- <div class="promo-wrapper">
  <div class="promo standard">
    <div class="image-box" style="background-image:url(https://www.carreg.co.uk/assets/promos/22-make-your-own2.jpg);"></div>
    <div class="wrap">
      <h3 class="heading">Make your own plate</h3>
      <p>Looking for a unique and stylish gift idea? Buy unissued Prefix or Current style number plates directly from us using our simple Make Your Own Number Plate service!</p>
      <a href="javascript:void(0);" title="Make your own plate" class="btnanim"><span>Learn more</span></a>
    </div>
  </div>

  <div class="promo standard text-black">
    <div class="image-box" style="background-image:url(https://www.carreg.co.uk/assets/promos/21-auction-promo.jpg);"></div>
    <div class="wrap">
      <h3 class="heading">The next DVLA Auction</h3>                
      <p>Search or view a list of private number plates to be sold at the next DVLA Auction, which will be held on <strong>13th to 15th May 2020</strong> at Oxford Belfry Hotel, Thame, OX9 2JW</p>    
      <a href="javascript:void(0);" title="The next DVLA Auction" class="btnanim"><span>Search now</span></a>
    </div>
  </div>
  
  <div class="promo standard ">
    <div class="image-box" style="background-image:url(https://www.carreg.co.uk/assets/promos/20-gift-voucher2.jpg);"></div>
    <div class="wrap">
      <h3 class="heading">Unsure which to buy?</h3>
      <p>If you’ve left it a little late or are unsure which number to buy, then available from £25 to $1000, a <strong>Vanity.Club Gift Voucher</strong> is a great option and can be used against any number plate on our website.</p>
      <a href="javascript:void(0);" title="Unsure which to buy?" class="btnanim"><span>Learn more</span></a>
    </div>
    </div>
</div> -->

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\carplatemarket\resources\views\frontend\faq.blade.php ENDPATH**/ ?>