 @include('layouts.home-header')
<style>
@media (min-width: 1170px)
.intro .price {
    font-size: 21px;
}
.intro .price {
    /* font-size: 16px; */
    letter-spacing: .1em;
    margin: 25px 0 0;
}
.intro .buttons {
    margin-top: 15px;
    text-align: center;
}
</style>
  <!--div class="intro grayBg">
        <h2 class="heading">WE'VE GOT YOUR NUMBER!</h2>
        <div class="priceBlock">
          <h3 class="plate">CRZ 227</h3>
		  <p class="price">Available now: <b>£599</b></p>
		  <div class="buttons">
			<a href="javascript:voiid()" class="btn btn-primary modal-open" title="View" data-modal-class="viewplate">View</a>
			<a href="javascript:void(0)" class="btn btn-success" title="Buy now">Buy now</a>
			</div>
        </div>
  </div-->
    <!--shop  area start-->
    <div class="shop_area shop_fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--<div class="shop_title">
                        <h1>Plate numbers</h1>
                    </div>
                    <div class="shop_toolbar_wrapper">
                        <div class="form-group">
                            <select name="filter_order" class="filter_order" class="form-control">
                                <option value="">Sort By</option>
                                <option value="asc">Price Low To High</option>
                                <option value="desc">Price High To Low</option>
                            </select>
                        </div>
                    </div>-->

                    <!--shop toolbar end-->
                    <div class="plates_result">
                        <div class="row shop_wrapper">
                        @if(!empty($plates))
                            @foreach($plates as $key=>$plate)


                           
                           <div class="col-lg-3 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="blog_thumb">
                                         <a href="javascript:void(0)" >
                                            <div class="primary_img view_plate" data-toggle="modal" data-target="#modal_box" title="quick view" view-plate-id="{{$plate->id}}">{{$plate->plate_number}}</div>
                                        </a>
                                         
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="content_inner">
                                            
                                            <div class="product_footer d-flex align-items-center">
                                                <div class="price_box">
                                                     <a class="primary_img view_plate"  href="javascript:void()" data-toggle="modal" data-target="#modal_box" title="quick view" view-plate-id="{{$plate->id}}" >VIEW</a>
                                                </div>
                                                <div class="price_box">
                                                    <p><span class="current_price">&nbsp; ${{$plate->plate_price}}</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                          
                         @endforeach
                        @endif
                        </div>
                        <div class="shop_toolbar t_bottom">
                            <div class="pagination">
                                
                                @if ($plates->lastPage() > 1)
                                    <ul class="custom-pagination">
                                        <li class="{{ ($plates->currentPage() == 1) ? ' disabled' : '' }}">
                                            <a href="{{ $plates->url(1) }}">Previous</a>
                                        </li>
                                        @for ($i = 1; $i <= $plates->lastPage(); $i++)
                                            <li class="{{ ($plates->currentPage() == $i) ? ' active' : '' }}">
                                                <a href="{{ $plates->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        <li class="{{ ($plates->currentPage() == $plates->lastPage()) ? ' disabled' : '' }}">
                                            <a href="{{ $plates->url($plates->currentPage()+1) }}" >Next</a>
                                        </li>
                                    </ul>
                                @endif

                            </div>
                        </div>
                    </div>
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

@include('layouts.footer')
