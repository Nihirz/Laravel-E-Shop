@extends('layouts.backend.main')
@section('content')

<div id="layoutSidenav_content" style="background-color:#e6e6e6;">
  <main> 
        <div class="container mt-4">
            <div class="card">

                <div class="card-header" style="background-color: #404040; color: white;">Edit About
                   <font style="float:right;"><a href="{{route('admin')}}" style="text-decoration: none; color:white;">BACK</a></font>
                </div>
                 <form class="form-horizontal style" method="POST" enctype="multipart/form-data" action="{{route('update.gallery')}}">

                  @csrf
                  <input type="hidden" name="id" value="{{$image->id}}">
                    <div class="card-body">
                        <div class="form-row">
                            <span class="border border-dark p-3"><img src="{{asset('uploads/'. $image->image)}}" style="width:200px; height:200px"></span>
                         </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">

                              <label for="customerDetailsCustomerFullName">Image</label>
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