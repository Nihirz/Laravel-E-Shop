@extends('layouts.backend.main')
@section('content')

<div id="layoutSidenav_content" style="background-color:#e6e6e6;">
    <main> 
          <div class="container mt-4">
              <div class="card">
  
                  <div class="card-header" style="background-color: #404040; color: white;">Edit Contact
                     <font  style="float:right;"><a href="{{route('admin')}}" style="text-decoration: none; color:white;">BACK</a></font>
                  </div>
                   <form class="form-horizontal style" method="POST" enctype="multipart/form-data" action="{{route('update.social')}}">
  
                    @csrf
                    <input type="hidden" name="id" value="{{$social->id}}">
                      <div class="card-body">
  
  
                          
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="customerDetailsCustomerFullName">Facebook</label>
                                <input type="text" class="form-control"name="facebook" placeholder="Enter Product Name" value="{{$social->facebook}}"
                                 >
                              
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="customerDetailsCustomerFullName">Instagram</label>
                                <input type="text" class="form-control"name="instagram" placeholder="Enter Product Name" value="{{$social->instagram}}"
                                 >
                               
                               
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="customerDetailsCustomerFullName">twitter</label>
                                <input type="text" class="form-control"name="twitter" placeholder="Enter Product Name" value="{{$social->twitter}}"
                                 >
                              
                               
                              </div>
                            </div>
                        
                                                     
  
                              </div>
                            </div>
                        <input type="submit" name="submit" value="SAVE" class="btn btn-success">

                      </div> 
                  </form>
                  </div>
              </div>
          </main>
        </div>
@endsection