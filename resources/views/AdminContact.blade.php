  @extends('layouts.backend.main')
  @section('content')
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Contact</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Address</th>
                                            <th>Phone No</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>   @foreach($contact as $contacts)
                                            <td>{{$contacts->address}}</td>
                                            <td>{{$contacts->phoneno}}</td>
                                            <td>{{$contacts->email}}</td>
                                            <td><a href="{{route('edit.contact',$contacts->id)}}" class="btn btn-primary" >Edit</a></td>
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