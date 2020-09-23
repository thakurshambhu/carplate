@include('layouts.home-header')
 <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{url('/')}}">home</a></li>
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
                                        @if(count($saved_plate) > 0)
                                        @foreach($saved_plate as $key => $plate)
                                        <tr>
                                            <td class="product_remove"><a href="{{url('remove_from_wishlist')}}/{{$plate->plate_id}}"><i class="fa fa-trash-o"></i></a></td>
                                           <!--  <td class="product_thumb"><a href="#"><img src="@if(!empty($plate->plate->plateimage->media_url)){{$plate->plate->plateimage->media_url}} @endif" alt="" style="width: 90px; height: 90px;"></a></td> -->

                                             <td class="product_thumb"><a href="javascript:void()" style="width: 90px; height: 90px;" class="font-anton">@if(!empty($plate->plate->plate_number)){{$plate->plate->plate_number}} @endif</a></td>
                                            <td class="product-price">${{$plate->plate->plate_price}}</td>
                                            <td class="product_total"><a href="javascript:void()" class="add_item_to_cart" data-plate-id={{$plate->plate->id}}>Add To Cart</a></td>

                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="4">
                                                
                                                        <h4 style="text-align:center">No Item In Your Wishlist</h4>
                                                   
                                            </td>
                                        </tr>
                                        @endif
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
@include('layouts.footer')






