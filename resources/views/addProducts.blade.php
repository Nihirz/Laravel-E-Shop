@extends('layouts.backend.main')
@section('content')
<div id="layoutSidenav_content" style="background-color:#e6e6e6;">
                <main> 
                  
        <div class="container mt-4">
            <div class="card">
                <div class="card-header" style="background-color: #404040; color: white;">Add Product
                   
                </div>
                 <form class="form-horizontal style" method="POST" enctype="multipart/form-data" action=" {{route('store.products')}} ">
                  
                  @csrf
                    <div class="card-body">
                         <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Product Name</label>
                              <input type="text" class="form-control"name="name" placeholder="Enter Product Name" value=""
                               >
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Product Description
                              </label>
                              <textarea type="text" class="form-control"name="description" placeholder="Enter Product Description"  id="editor" 
                              value="" ></textarea>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Product Price
                              </label>
                              <input type="number" class="form-control"name="price" placeholder="Enter Products Price"   
                              value="" >
                            </div>
                          </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="customerDetailsCustomerFullName">Image</label>
                             <input type="file" name="image"value="">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                            <label>Choose Your Categories</label>
                              <select name="cname">
                              @foreach($cname as $cname)
                                <option value="{{ $cname->id }}">{{$cname->catname}}</option>
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