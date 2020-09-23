@include('layouts.header')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{url('/')}}">home</a></li>
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
                    @if(!empty($shipping_info))
                    @foreach($shipping_info as $info)
                    <div class="cards">
                        <div>
                            <div class="address_content">
                                <div class="bold truncate" title="{{$info->first_name}}">{{$info->first_name}}</div>
                                <div class="bold truncate">{{$info->postal_code}}</div>
                                <div class="truncate" title="{{$info->address}}">{{$info->address}}</div>
                                <div class="truncate">{{$info->country}}</div>
                                <div class="truncate">{{$info->state}}</div>
                                <div class="truncate">{{$info->city}}</div>
                                <div class="truncate">{{$info->email}}</div>
                                <div class="truncate">{{$info->phone_no}}</div>
                            </div>
                        </div>
                            <div class="address_options">
                                <!-- <div class="button" data-shipping-id="{{$info->id}}"><span>EDIT</span></div> -->
                                <a href="javascript:void(0)" class ="button" data-shipping-id="{{$info->id}}"><span>EDIT</span></a>
                            </div>
                    </div>
                    @endforeach
                    @endif
                </div>

                <div class="col-lg-6 col-md-6">
                        <h3>Your order</h3>
                        <div class="order_table table-responsive">
                            @if(count($items_cart) > 0)
                            <table>
                                <thead>
                                    <tr>
                                        <th>Plate number</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($items_cart as $cart)
                                            <tr>
                                                <td>{{$cart->plate->plate_number}}</td>
                                                <td> ${{$cart->plate->plate_price}}</td>
                                            </tr>
                                        @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Cart Subtotal</th>
                                        <td>${{$total_price}}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td><strong>$0.00</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong>${{$total_price}}</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                            @endif  
                                   
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
@include('layouts.footer')