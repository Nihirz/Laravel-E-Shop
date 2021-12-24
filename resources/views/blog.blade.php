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
                            <li>All blog</li>
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
                
                <div class="col-lg-12">
                    <div class="blog_wrapper">
                        <div class="section-title">
                            <h2>All Blog</h2>
                        </div>
                        <div class="row">
                            @foreach ($blog as $blog)
                            <div class="col-lg-6 col-md-6">
                                <article class="single_blog mb-60">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="{{route('read.blog',$blog->id)}}"><img src="{{asset('uploads/'. $blog->image)}}"  style="height:350px;width: 100%;" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h3><a href="{{route('read.blog',$blog->id)}}">{{$blog->title}}</a></h3>
                                            <div class="blog_meta">                                        
                                                <span class="author">Posted by : <a href="{{route('read.blog',$blog->id)}}">admin</a> / </span>
                                                <span class="post_date">On : <a href="{{route('read.blog',$blog->id)}}">{{$blog->created_at}}</a></span>
                                            </div>
                                            <div class="blog_desc">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. </p>
                                            </div>
                                            <footer class="readmore_button">
                                                <a href="{{route('read.blog',$blog->id)}}">read more</a>
                                            </footer>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            @endforeach 
                            
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
@endsection