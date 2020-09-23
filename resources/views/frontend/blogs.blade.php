@include('layouts.home-header')
    <!--breadcrumbs area start-->
   <!--  <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{url('/')}}">home</a></li>
                            <li>blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--breadcrumbs area end-->

    <!--blog area start-->
    <div class="blog_page_section blog_sidebar blog_reverse mt-23">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-9 col-md-12">
                    <div class="blog_wrapper">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/blog6.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{url('blog_details')}}">Blog image post</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Februaey 02, 2019</span>
                                    <span class="author"><i class="fa fa-user-circle"></i> Posts by : admin</span>
                                    <span class="category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="{{url('blog_details')}}">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/blog7.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{url('blog_details')}}">Post with Gallery</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Februaey 02, 2019</span>
                                    <span class="author"><i class="fa fa-user-circle"></i> Posts by : admin</span>
                                    
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="{{url('blog_details')}}">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/blog6.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{url('blog_details')}}">Post with Audio</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Februaey 02, 2019</span>
                                    <span class="author"><i class="fa fa-user-circle"></i> Posts by : admin</span>
                                    
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="{{url('blog_details')}}">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/blog7.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{url('blog_details')}}">Post with Video</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Februaey 02, 2019</span>
                                    <span class="author"><i class="fa fa-user-circle"></i> Posts by : admin</span>
                                    
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="{{url('blog_details')}}">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/blog9.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{url('blog_details')}}">Maecenas ultricies</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Februaey 02, 2019</span>
                                    <span class="author"><i class="fa fa-user-circle"></i> Posts by : admin</span>
                                   
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="{{url('blog_details')}}">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/blog8.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{url('blog_details')}}">Etiam magna</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Februaey 02, 2019</span>
                                    <span class="author"><i class="fa fa-user-circle"></i> Posts by : admin</span>
                                   
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="{{url('blog_details')}}">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-12">
                    <div class="blog_sidebar_widget">
                        
                        <div class="widget_list widget_post">
                            <h3>Recent Posts</h3>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/blog12.jpg')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="{{url('blog_details')}}">Blog image post</a></h3>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/blog13.jpg')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="{{url('blog_details')}}">Post with Gallery</a></h3>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/blog14.jpg')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="{{url('blog_details')}}">Post with Audio</a></h3>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/blog15.jpg')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="{{url('blog_details')}}">Post with Video</a></h3>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                        </div>

                     <!--    <div class="widget_list comments_post">
                            <h3>Comments</h3>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/comment.png')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span>demo says:</span>
                                    <a href="{{url('blog_details')}}">Quisque semper nunc</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/comment.png')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span>admin says:</span>
                                    <a href="{{url('blog_details')}}">Quisque orci porta...</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/comment.png')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span>demo says:</span>
                                    <a href="{{url('blog_details')}}">Quisque semper nunc</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{url('blog_details')}}"><img src="{{asset('assets/img/blog/comment.png')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span>admin says:</span>
                                    <a href="{{url('blog_details')}}">Quisque semper nunc</a>
                                </div>
                            </div>
                        </div> -->
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--blog area end-->

    <!--blog pagination area start-->
    <div class="blog_pagination">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">next</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog pagination area end-->
@include('layouts.footer')