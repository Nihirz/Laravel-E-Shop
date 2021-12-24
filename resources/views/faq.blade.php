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
                            <li>FAQ page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

    <!--faq area start-->
    <div class="faq_content_area">
        <div class="container">   
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="faq_content_wrapper">
                        <h3>Frequently Asked Questions</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id erat sagittis, faucibus metus malesuada, eleifend turpis. Mauris semper augue id nisl aliquet, a porta lectus mattis. Nulla at tortor augue. In eget enim diam. Donec gravida tortor sem, ac fermentum nibh rutrum sit amet. Nulla convallis mauris vitae congue consequat. Donec interdum nunc purus, vitae vulputate arcu fringilla quis. Vivamus iaculis euismod dui.</p>

                    </div>
                </div>
            </div> 
        </div>    
    </div>
     <!--Accordion area-->
    <div class="accordion_area">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-12"> 
                <div id="accordion" class="card__accordion">
                  <div class="card card_dipult">
                    <div class="card-header card_accor" id="headingOne">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          It is a long established fact

                          <i class="fa fa-plus"></i>
                          <i class="fa fa-minus"></i>

                        </button>

                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model</p>
                      </div>
                    </div>
                  </div>
                  @foreach($faq as $faq)
                  <div class="card  card_dipult">
                    <div class="card-header card_accor" id="headingTwo">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          {{$faq->question}}
                           <i class="fa fa-plus"></i>
                           <i class="fa fa-minus"></i>

                        </button>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                           <p>{{$faq->answer}}</p>
                      </div>
                    </div>
                  </div>
                @endforeach          

                  
                </div>e
            </div>
        </div>
        </div>
    </div>
    <!--Accordion area end-->
    <!--faq area end-->
        
@endsection