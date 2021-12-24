@extends('layouts.backend.main')
@section('content')

<div id="layoutSidenav_content" style="background-color:#e6e6e6;">
  <main> 
        <div class="container mt-4">
            <div class="card">

                <div class="card-header" style="background-color: #404040; color: white;">Edit Map
                   <font style="float:right;"><a href="{{route('admin')}}" style="text-decoration: none; color:white;">BACK</a></font>
                </div>
                 <form class="form-horizontal style" method="POST" enctype="multipart/form-data" action="{{route('update.map')}}">

                  @csrf
                  <input type="hidden" name="id" value="{{$map->id}}">
                    <div class="card-body">
                        <div class="form-row">
                            <label>Map</label>
                            <input type="text" name="map" value="{{$map->map}}" class="form-control"/>
                         </div>

                      <input type="submit" name="submit" value="SAVE" class="btn btn-success">
                      <input type="reset" name="reset" value="CLEAR" class="btn btn-danger">
                    </div> 
                </form>
                </div>
            </div>
        </main>
@endsection