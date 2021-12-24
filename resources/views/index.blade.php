@extends('layouts.header')
@section('content')
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
<div id="demo" class="carousel slide" data-ride="carousel" data-bgimg="assets/img/slider/slider3.jpg">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
     @foreach($slider as $key => $certificates)
    <div class="carousel-item  {{$key == 0 ? 'active' : '' }}">
      <img src="{{asset('uploads/'. $certificates->image)}}" alt="" width="100%" height="500" style="height:500px;">
      <div class="carousel-caption">
        <h3 class="text-center text-primary">{{$certificates->title}}</h3>
        <p class="text-primary">{{$certificates->longdescription}}</p>
      </div>   
    </div>
         @endforeach
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="mt-5">
    
<h3> @foreach($viewspage as $viewspage) {{ $viewspage -> views }}   @endforeach</h3>  
<h3>Total Views</h3>
</div>

   
    <!--Features area-->
    <section class="features-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section-title">
                        <h2>Awesome Features</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="single-features">
                        <img src="assets/img/icon/1.png" alt="">
                        <h3>Impressive Distance</h3>
                        <p>consectetur adipisicing elit. Ut praesentium earum, blanditiis, voluptatem repellendus rerum voluptatibus dignissimos</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="single-features">
                        <img src="assets/img/icon/2.png" alt="">
                        <h3>100% self safe</h3>
                        <p>consectetur adipisicing elit. Ut praesentium earum, blanditiis, voluptatem repellendus rerum voluptatibus dignissimos</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="single-features">
                        <img src="assets/img/icon/3.png" alt="">
                        <h3>Awesome Support</h3>
                        <p>consectetur adipisicing elit. Ut praesentium earum, blanditiis, voluptatem repellendus rerum voluptatibus dignissimos</p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <a href="#"><img src="assets/img/product/2.png" alt=""></a>
                </div>
            </div>
        </div>
    </section><!--Features area-->

    <!--area-->
    <section class="pt-60 pb-60 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section-title">
                        <h2>Tranding Products</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                 <div class="blog_details mt-60">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="blog_wrapper">
                        <div class="section-title">
                            <!-- <h2>All Products</h2> -->
                        </div>
                        <div class="row">
                            @foreach($products->take(3) as $products)
                            <div class="col-lg-4 col-md-4">
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
            </div>
        </div>
    </div>
            </div>
        </div>
    </section><!--area-->
    
@endsection