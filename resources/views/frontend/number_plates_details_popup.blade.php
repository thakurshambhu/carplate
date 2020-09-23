<div class="car-image">
    <img src="{{asset('/images/AB16 BRC.jpg')}}" alt="View your actual number plate">
</div>
<div class="content">
    <div class="text">
        <h2 class="heading">{{$view_plate->plate_title}}</h2>
        <h3 class="price">${{$view_plate->plate_price}}</h3>
        <p>
            <a href="{{url('checkout')}}/{{$view_plate->id}}" class="btn btn-success" title="Buy now">Buy now</a>
            <a href="{{url('enquiry')}}" class="btn btn-default" title="Enquire now">Make an enquiry</a>
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
                                <img src="{{asset('images/orange_car.png')}}" alt="">
                                  <a class="number" href="javascript:void()">@if(!empty($view_plate->plate_number)){{$view_plate->plate_number}} @endif</a>
                            </div>
                          
                           
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="modal_right">
                <div class="modal_title mb-10">
                    <h2>{{$view_plate->plate_title}}</h2>
                </div>
                <div class="modal_price mb-10">
                    <span class="new_price">${{$view_plate->plate_price}}</span>
                </div>
                <div class="modal_description mb-15">
                    <p>{{$view_plate->description}}</p>
                </div>
                <div class="variants_selects">
                    
                    <div class="modal_add_to_cart">
                        <form action="">
                            <button type="submit" class="button add_item_to_cart" data-plate-id=@if(!empty($view_plate->id)){{$view_plate->id}} @endif>buy now</button>
                             <a href="{{url('checkout')}}/{{$view_plate->id}}" class="button">buy now</a>
                        </form>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div> -->