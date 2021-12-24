@extends('layouts.backend.main')
@section('content')
<div id="right-panel" class="right-panel">

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Logo Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($logo as $logo)
                                        <td><span><img src="{{asset('uploads/'. $logo->image)}}"  style="width:200px; height:200px"></span></td>
                                        <td><a href="{{route('edit.logo',$logo->id)}}" class="btn btn-primary">Edit</a></td>
                                    @endforeach
                                    
                                </tr>                                                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
</div>
@endsection