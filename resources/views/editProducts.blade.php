@extends('layouts.backend.main')
@section('content')
<div id="layoutSidenav_content" style="background-color:#e6e6e6;">
    <main> 
          <div class="container mt-4">
              <div class="card">
  
                  <div class="card-header" style="background-color: #404040; color: white;">Edit Product
                     <font  style="float:right;"><a href="" style="text-decoration: none; color:white;">BACK</a></font>
                  </div>
                   <form class="form-horizontal style" method="POST" enctype="multipart/form-data" action="{{route('update.products')}}">
  
                    @csrf
                    <input type="hidden" name="id" value="{{$products->id}}">
                      <div class="card-body">                         
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="customerDetailsCustomerFullName">Product Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Product Name" value="{{$products->name}}">                               
                              </div>
                            </div>
                        
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="customerDetailsCustomerFullName">Product Description
                                </label>
                                <textarea type="text" class="form-control" name="description" placeholder="Enter Product Description"  id="editor">{{$products->description}}</textarea>
                              </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                  <label for="customerDetailsCustomerFullName">Product Price
                                  </label>
                                  <input type="number" class="form-control" name="price" placeholder="Enter Product Description" value="{{$products->price}}" >
                                </div>
                              </div>
  
                                 <div class="form-row">
                              <span class="border border-dark p-3"><img src="{{asset('uploads/'.$products->image)}}" style="width:200px; height:200px"></span>
                            </div>
                              <div class="form-row">
                              <div class="form-group col-md-6">
  
                                <label for="customerDetailsCustomerFullName">Product Image</label>
                               <input type="file" name="image">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
  
                                <label for="customerDetailsCustomerFullName">Choose Your Category</label>
                                <select name="cname">
                                @foreach($cname as $cname)
                                <option value="{{ $cname->id }}" selected>{{$cname->catname}}</option>
                                @endforeach 
                                </select>
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