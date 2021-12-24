@extends('layouts.backend.main')
@section('content')

<div id="layoutSidenav_content" style="background-color:#e6e6e6;">
  <main> 
        <div class="container mt-4">
            <div class="card">

                <div class="card-header" style="background-color: #404040; color: white;">Edit About
                   <font  style="float:right;"><a href="{{route('admin')}}" style="text-decoration: none; color:white;">BACK</a></font>
                </div>
                 <form class="form-horizontal style" method="POST" enctype="multipart/form-data" action="{{route('update.about')}}">

                  @csrf
                  <input type="hidden" name="id" value="{{$about->id}}">
                    <div class="card-body">


                        
                         <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Description</label>
                              <input type="text" class="form-control"name="description" placeholder="Enter Product Name" value="{{$about->description}}"
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
                              <label for="customerDetailsCustomerFullName">Short Description
                              </label>
                              <textarea type="text" class="form-control"name="shortdescription" placeholder="Enter Product Description"  id="editor">{{$about->shortdescription}}</textarea>
                            </div>
                          </div>

                               <div class="form-row">
                            <span class="border border-dark p-3"><img src="{{asset('uploads/'. $about->image)}}" style="width:200px; height:200px"></span>
                          </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">

                              <label for="customerDetailsCustomerFullName">About Image</label>
                             <input type="file" name="image">
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