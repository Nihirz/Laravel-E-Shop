@extends('layouts.backend.main')
@section('content')
<div class="content mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-light text-right">
                <a href="{{route('admin.addfaq')}}"><button type="button" class="btn btn-primary" name="add_team" >Add Faq</button></a>
                
            </div>
        </div>
    </div>
<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">FAQs</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                        
                            <tr>
                                <th>Question</th>
                                <th>Ans</th>
                                <th>Action</th>
                            </tr>
                              @foreach ($faq as $faq)
                                <tr>
                                    <td>{{$faq->question}}</td>
                                    <td>{{$faq->answer}}</td>
                                   
                                    <td>
                                        <a href="{{route('edit.faq',$faq->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('delete.faq',$faq->id)}}" class="btn btn-danger">Delete</a>
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
@endsection