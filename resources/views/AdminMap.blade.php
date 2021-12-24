@extends('layouts.backend.main')
@section('content')
<div id="right-panel" class="right-panel">

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Map Table</strong>
                    </div>
                    <div class="card-body form-controll">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered" >
                            <thead>
                                <tr>
                                    <th>Map</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($map as $map)
                                    <td><iframe src="{{$map->map}}" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></td>
                                    <td><a href="{{route('edit.map',$map->id)}}" class="btn btn-primary">Edit</a></td>
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