
@extends('layouts.header')
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <!-- <li><a href="index-2.html">home</a></li> -->
                            <li>All Productsss</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
	
	
	<!--blog body area start-->
    <div class="blog_details mt-60">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-9">
                    <div class="blog_wrapper">
                        <div class="section-title">
                            <h2>All Products</h2>
                        </div>
                        <div class="row">
                            @foreach($pds as $products)
                            <div class="col-lg-6 col-md-6">
                                <article class="single_blog mb-60">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="{{route('detail.pro',$products->id)}}"><img src="{{asset('uploads/'. $products->image)}}" style="height:200px;width:300px;" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h3><a href="{{route('detail.pro',$products->id)}}">{{$products->name}}</a></h3>
                                            <div class="blog_meta">                                        
                                               
                                            <footer class="readmore_button">
                                                <a href="{{route('detail.pro',$products->id)}}">More Details</a>
                                            </footer>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            @endforeach
                            
                         
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-12">
                    <div class="blog_sidebar_widget">
                        <div class="widget_list widget_post">
                            <h3>Products Category</h3>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog section area end-->
	
	    
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
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog pagination area end-->
@endsection