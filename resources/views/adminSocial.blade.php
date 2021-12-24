@extends('layouts.backend.main')
@section('content')

<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Social Media Links</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        @csrf
                        <thead>
                            <tr>
                                <th><i class="fa fa-facebook-official" aria-hidden="true"
                                    style="font-size:35px;color:blue;"></i><span style="font-size:25px;">Facebook</span></th>
                                <th><i class="fa fa-instagram" aria-hidden="true" style="font-size:35px;color:#eb3d34;"></i><span style="font-size:25px;">Instagram</span></th>
                                 <th><i class="fa fa-twitter" aria-hidden="true" style="font-size:35px;color:#a3a6ff;"></i><span style="font-size:25px;">Twitter</span></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($social as $socials)
                            <tr>
                                <td>{{$socials->facebook}}</td>
                                <td>{{$socials->instagram}}</td>
                                <td>{{$socials->twitter}}</td>
                                <td>
                                    <a href="{{route('edit.social',$socials->id)}} " class="btn btn-primary">Edit</a>
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


@endsection