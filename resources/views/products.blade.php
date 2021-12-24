
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
                            <li>All Products</li>
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
                            @foreach($posts as $products)
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
                            @foreach($category as $category)
                            <div class="post_wrapper">
                                <div class="post_info">
                                    <h3 class="font-weight-bold"><a href="{{route('view.cproducts',$category->id)}}"  class="font-weight-bold text-primary">{{$category->catname}}</a></h3>
                                </div>
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
    @if ($posts->lastPage() > 1)
       
        <div class="blog_pagination">
        <div class="container">
            <div class="row">
        <div class="col-12">
            <div class="pagination">
           <ul class="pagination">
               @if($posts->currentPage() != 1 && $posts->lastPage() >= 5)
               <li class="current">
                   <a href="{{ $posts->url($posts->url(1)) }}" aria-label="Previous">
                       <span aria-hidden="true">First</span>
                   </a>
               </li>
               @endif
               @if($posts->currentPage() != 1)
               <li>
                   <a href="{{ $posts->url($posts->currentPage()-1) }}" aria-label="Previous">
                       <span aria-hidden="true">&#x3C;</span>
                   </a>
               </li>
               @endif
               @for($i = max($posts->currentPage()-2, 1); $i <= min(max($posts->currentPage()-2, 1)+4,$posts->lastPage()); $i++)
               @if($posts->currentPage() == $i)
               <li class="active"></li>
               @else
               <li>
               @endif
                   <a href="{{ $posts->url($i) }}">{{ $i }}</a>
               </li>
               @endfor
               @if ($posts->currentPage() != $posts->lastPage())
               <li>
                   <a href="{{ $posts->url($posts->currentPage()+1) }}" aria-label="Next">
                       <span aria-hidden="true">&#x3E;</span>
                   </a>
               </li>
               @endif
               @if ($posts->currentPage() != $posts->lastPage() && $posts->lastPage() >= 5)
               <li>
                   <a href="{{ $posts->url($posts->lastPage()) }}" aria-label="Next">
                       <span aria-hidden="true">Last</span>
                   </a>
               </li>
               @endif
           </ul>
            </div>
        </div>
    </div>
</div>
</div>
       
       @endif

    <!--blog pagination area end-->
@endsection

  