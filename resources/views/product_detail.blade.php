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
                            <li>Product detailxs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--product details start-->
    <div class="product_details mt-60 mb-60">
        <div class="container">
            @foreach($products as $products)
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{asset('uploads/'. $products->image)}}" alt="big-1">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                       <form action="#">
                           
                            <h1>{{$products->name}}</h1>
                            <div class=" product_ratting">
                              
                                
                            </div>
                            <div class="price_box">
                                <span class="current_price">{{$products->price}}</span>
                                <span class="old_price"></span>
                                
                            </div>
                            <div class="product_desc">
                                <p>{{$products->description}}</p>
                            </div>
							<div class="product_timing">
                                <div data-countdown="2023/12/15"></div>
                            </div>
                            
                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">add to cart</button>  
                                
                            </div>
                            <div class=" product_d_action">
                               <ul>
                                   <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                   <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                               </ul>
                            </div>                            
                        </form>
                      

                    </div>
                </div>
            </div>
            @endforeach
        </div>    
    </div>
    <!--product details end-->
    
    <!--product info start-->
     
    <!--product info end-->
@endsection