@include('layouts.home-header')

    <p class="text-right mx-3 mt-4"><a href="{{url('seller/add_plate')}}" class="btn btn-orange">Create Number Plate</a></p>
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
                            @if(!empty($plate_list))
                                @foreach($plate_list as $key=>$plate)
                                <tr>
                                    <td>{{$plate->plate_title}}</td>
                                    <td>{{substr($plate->description,0,20). '...'}}</td>
                                    <td>{{$plate->plate_number}}</td>
                                    <!--  <td class="font-anton" style="width: 90px; height: 90px;" class="">{{$plate->plate_number}}</td> -->
                                    <td>${{$plate->plate_price}}</td>
                                    <td class="text-center actions">
                                        <a class="editLink" href="{{url('/seller/edit_plate')}}/{{$plate->id}}" title="Edit"><i class="fa fa-edit"></i></a>
                                        <a  class="deleteLink" href="{{url('/seller/delete_plate')}}/{{$plate->id}}" title="Delete"><i class="fa fa-times"></i></a>
                                        <a class="statusLink" href="{{url('/seller/change_plate_status')}}/{{$plate->id}}/{{$plate->is_publised}}" title="@if($plate->is_publised == 'publish') Click to Un-Publish @else Click to Publish @endif"><i class="fa fa-power-off"></i></a>
										<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                         
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                            </tbody>
                         
                        </table>

                        </div>
                    </div>
                </div>

            </form>
           
        </div>
    </div>
    <!--wishlist area end -->
@include('layouts.footer')






