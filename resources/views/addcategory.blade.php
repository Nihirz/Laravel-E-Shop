@extends('layouts.backend.main')
@section('content')
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Category</strong>
                                
                                <a href="{{route('admin.category')}} " class="btn btn-dark float-right">BACK</a>
                            </div>
                            <div class="card">
                                                        <!-- <div class="card-header">Category Form</div> -->
                                                        <div class="card-body card-block">
                                                            <form action=" {{route('store.categoryss')}} " method="POST" class="">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        @csrf
                                                                        <div class="input-group-addon">Category</div>
                                                                        <input type="text" name="catnames" class="form-control">
                                                                        <div class="input-group-addon"><i class="fa fa-clone"></i></div>
                                                                    </div>
                                                                </div>
                                                             
                                                                <div class="form-actions form-group">
                                                                    <button type="submit" class="btn btn-primary btn-sm" name="save">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


@endsection