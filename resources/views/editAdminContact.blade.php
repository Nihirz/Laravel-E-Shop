@extends('layouts.backend.main')
@section('content')

<div id="layoutSidenav_content" style="background-color:#e6e6e6;">
  <main> 
        <div class="container mt-4">
            <div class="card">

                <div class="card-header" style="background-color: #404040; color: white;">Edit Contact
                   <font  style="float:right;"><a href="{{route('admin')}}" style="text-decoration: none; color:white;">BACK</a></font>
                </div>
                 <form class="form-horizontal style" method="POST" enctype="multipart/form-data" action="{{route('update.contact')}}">

                  @csrf
                  <input type="hidden" name="id" value="{{$contact->id}}">
                    <div class="card-body">


                        
                         <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Address</label>
                              <input type="text" class="form-control"name="address" placeholder="Enter Product Name" value="{{$contact->address}}"
                               >
                              @error('name')
                              <label class="text-danger">
                                {{$message}}
                              </label>
                              @enderror
                             
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Phone No</label>
                              <input type="text" class="form-control"name="phoneno" placeholder="Enter Product Name" value="{{$contact->phoneno}}"
                               >
                              @error('name')
                              <label class="text-danger">
                                {{$message}}
                              </label>
                              @enderror
                             
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Email</label>
                              <input type="text" class="form-control"name="email" placeholder="Enter Product Name" value="{{$contact->email}}"
                               >
                              @error('name')
                              <label class="text-danger">
                                {{$message}}
                              </label>
                              @enderror
                             
                            </div>
                          </div>
                      
                                                   

                            </div>
                          </div>
                      <input type="submit" name="submit" value="SAVE" class="btn btn-success">
                      <input type="reset" name="reset" value="CLEAR" class="btn btn-danger">
                    </div> 
                </form>
                </div>
            </div>
        </main>
@endsection