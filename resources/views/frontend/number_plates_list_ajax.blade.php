<div class="row shop_wrapper">
    @if(!empty($plates))
        @foreach($plates as $key=>$plate)
       
       <div class="col-lg-3 col-md-4 col-12 ">
            <div class="single_product">
                <div class="blog_thumb">
                    <a class="primary_img view_plate"  href="javascript:void()" data-toggle="modal" data-target="#modal_box" title="quick view" view-plate-id="{{$plate->id}}" >{{$plate->plate_number}}</a>
                   <!-- <a class="primary_img" href="{{url('/plate_detail')}}/{{$plate->id}}" style="">{{$plate->plate_number}}</a> -->
                     <!-- <a class="primary_img" href="{{url('/plate_detail')}}/{{$plate->id}}"><img src="@if(!empty($plate->plateimage->media_url)){{$plate->plateimage->media_url}}@endif" alt=""></a> -->
                 
                   
                    <!-- <div class="action_links">
                        <ul>
                            <li class="quick_button"><a href="javascript:void()" data-toggle="modal" data-target="#modal_box" title="quick view" view-plate-id="{{$plate->id}}" class="view_plate"> <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist"><a href="javascript:void(0)" class ="save_plate" data-plate-id="{{$plate->id}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                            
                        </ul>
                    </div> -->
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
   