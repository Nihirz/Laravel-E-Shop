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
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

   <section class="account">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-12">
               <div class="account-contents" >
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
                              
                                    <div class="col-md-3 ">
                                       
                                              <div class="row justify-content-center">
                                            <div class="col-md-2 col-lg-4">
                                                  <i class="fa fa-map-marker mt-4 fa-2x " style=""></i>
                                                  
                                            </div>
                                            <div class="col-md-10 col-lg-4">
                                          
                                            <p style="">San Francisco,CA 94126,USA</p>
                                         
                                            </div>
                                        
                                          </div>


                                              <div class="row">
                                            <div class="col-md-4 col-lg-4">
                                                  <i class="fa fa-map-marker mt-4 fa-2x" style=""></i>
                                                  
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                          
                                            <p style="">San Francisco, CA 94126, USA</p>
                                         
                                            </div>
                                        
                                     </div>

                                              <div class="row">
                                            <div class="col-md-4 col-lg-4">
                                                  <i class="fa fa-map-marker mt-4 fa-2x" style=""></i>
                                                  
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                          
                                            <p style="">San Francisco, CA 94126, USA</p>
                                         
                                            </div>
                                        
                                </div>
                            </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                <div class="account-content">
                                    <form action="{{route('store.contact')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single-acc-field">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" placeholder="Name" id="name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-acc-field">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="mail" placeholder="Email" id="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-acc-field">
                                                    <label for="msg">Message</label>
                                                    <textarea name="message"  id="msg" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-acc-field">
                                            <button type="submit" name="save">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
               </div>
            </div>
         </div>
      </div>
   </section>
        <div class="container-fluid">
            <div class="map-responsive">    @foreach ($map as $maps)
                <iframe src="{{$maps->map}}" allowfullscreen="" loading="lazy"></iframe> @endforeach
            </div>
        </div>
        <style type="text/css">
        .map-responsive{
            overflow:hidden;
            padding-bottom:50%;
            position:relative;
            height:0;
        }
        .map-responsive iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
        </style>
        <div class="fb-page" 
data-href="https://www.facebook.com/facebook"
data-width="380" 
data-hide-cover="false"
data-show-facepile="false">
</div>


        </div>
    </div><!-- .animated -->
</div>
   @endsection