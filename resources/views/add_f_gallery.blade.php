@extends('layouts.backend.main')
@section('content')
<div id="layoutSidenav_content" style="background-color:#e6e6e6;">
                <main> 
                  
        <div class="container mt-4">
            <div class="card">
                <div class="card-header" style="background-color: #404040; color: white;">Add Image
                   
                </div>
                 <form class="form-horizontal style" method="POST" enctype="multipart/form-data" action="">
                  
                  @csrf
                    <div class="card-body">
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
                              	<option selected disabled>-Select A Category-</option>
                              	<option value="1" >Home Appliances</option>
                                <option value="2">Entertainment</option>
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