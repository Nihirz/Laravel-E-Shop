@extends('layouts.backend.main')
@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-right">
                            <a href=" {{route('admin.addslider')}}" class="btn btn-primary">Add Your Slider</a>
                        </div>
                    </div>
                    <div class="card-body row">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Long Description</th>
                                    <th>Short Description</th>
                                    <th>slider Image</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach ($slider as $slider)
                                <tr>
                                    <td>{{$slider->title}}</td>
                                    <td>{{$slider->longdescription}}</td>
                                    <td>{{$slider->shortdescription}}</td>
                                    <td><img src="{{asset('uploads/'. $slider->image)}}" style="width:70px; height:70px"></td>
                                    <td>
                                        <a href="{{route('edit.slider',$slider->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('delete.slider',$slider->id)}}" class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>
                                @endforeach
                            </thead>
                            <tbody>
                             
                                                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

    <script src="{{asset('admin_assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_assets/assets/js/main.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/pdfmake/build/vfs_fonts.j')}}s"></script>
    <script src="{{asset('admin_assets/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('admin_assets/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>

@endsection