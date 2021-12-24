  @extends('layouts.backend.main')
  @section('content')
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">About Us</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Short Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            @foreach($about as $abouts)
                                            <td>{{$abouts->description}}</td>
                                            <td>{{$abouts->shortdescription}}</td>
                                            <td><img src="{{asset('uploads/'. $abouts->image)}}" style="height: 200px;width: 200px;"></td>
                                            <td><a href="{{route('edit.about',$abouts->id)}}" class="btn btn-primary">Edit</a></td>
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

@endsection