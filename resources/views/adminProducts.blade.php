@extends('layouts.backend.main')
@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-right">
                            <a href=" {{route('admin.addproducts')}}" class="btn btn-primary">Add Your Products</a>
                        </div>
                    </div>
                    <div class="card-body row">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Products Name</th>
                                    <th>Products Description</th>
                                    <th>Products Price</th>
                                    <th>Products Image</th>
                                    <th>Categories</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($products as $products)
                                <tr>
                                    <td>{{ $products->name }}</td>
                                    <td>{{ $products->description }}</td>
                                    <td>{{ $products->price }}</td>
                                    <td><img src="{{asset('uploads/'. $products->image)}}" style="width:70px; height:70px"></td>
                                    <td>{{ $products->cname }}</td>
                                    <td>
                                        <a href="{{route('edit.products',$products->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('delete.products',$products->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                                        
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