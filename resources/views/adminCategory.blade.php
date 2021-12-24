@extends('layouts.backend.main')
@section('content')
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Contact</strong>
                                
                                <a href="{{route('admin.Addcategory')}} " class="btn btn-success float-right">Add Category</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                     <tr>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                       @foreach($categorys as $category)
                                        <tr>
                                            <td>{{$category->catname}}</td>
                                            <td>
                                                <a href="{{route('edit.category',$category->id)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{route('delete.category',$category->id)}}" class="btn btn-danger">Delete</a>

                                            </td>
                                        </tr>
                                              @endforeach                                    
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->





@endsection