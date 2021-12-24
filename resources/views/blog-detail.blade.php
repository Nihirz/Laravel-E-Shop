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
                            <li>blog details</li>
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
                
                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_wrapper">
                        <article class="single_blog">
                            <figure>
                               <div class="post_header">
                                 <input type="hidden" name="id" value="{{$blog->id}}">
                                   <h3 class="post_title">{{$blog->title}}</h3>
                                    <div class="blog_meta">                                        
                                        <span class="author">Posted by : <a href="#">Rahul</a> / </span>
                                        <span class="post_date"><a href="#">Sep 20, 2019</a></span>
                                    </div>
                                </div>
                                <div class="blog_thumb">
                                   <a href="#"><img src="assets/img/blog/blog-details.jpg" alt=""></a>
                               </div>
                               <figcaption class="blog_content">
                                    <div class="post_content">
                                        <p>{{$blog->description}}</p>
                                              <!-- <blockquote>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                        </blockquote> -->
                                    </div>
                                    <div class="entry_content">
                                        <div class="post_meta">
                                            <span>Tags: </span>
                                            <span><a href="#">Drone, </a></span>
                                            <span><a href="#">Sky, </a></span>
                                            <span><a href="#">Fly</a></span>
                                        </div>

                                        <div class="social_sharing">
                                          
                                        </div>
                                    </div>
                               </figcaption>
                            </figure>
                        </article>                
                    </div>
                    <!--blog grid area start-->
                </div>
         
            </div>
        </div>
    </div>
    <!--blog section area end-->
@endsection