@extends('layouts.backend.main')
@section('content')
<div id="layoutSidenav_content" style="background-color:#e6e6e6;">
    <main> 
          <div class="container mt-4">
              <div class="card">
  
                  <div class="card-header" style="background-color: #404040; color: white;">Edit blog
                     <font  style="float:right;"><a href="" style="text-decoration: none; color:white;">BACK</a></font>
                  </div>
                   <form class="form-horizontal style" method="POST" enctype="multipart/form-data" action="{{route('update.blog')}}">
  
                    @csrf
                    <input type="hidden" name="id" value="{{$blog->id}}">
                      <div class="card-body">                         
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="customerDetailsCustomerFullName">blog Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter blog title" value="{{$blog->title}}">                               
                              </div>
                            </div>
                        
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="customerDetailsCustomerFullName">blog Description
                                </label>
                                <textarea type="text" class="form-control"name="description" placeholder="Enter blog Description"  id="editor">{{$blog->description}}</textarea>
                                <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script type="text/javascript">
  CKEDITOR.replace('editor', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});

</script>
                            </div>
                            </div>

  
                                 <div class="form-row">
                              <span class="border border-dark p-3"><img src="{{asset('uploads/'.$blog->image)}}" style="width:200px; height:200px"></span>
                            </div>
                              <div class="form-row">
                              <div class="form-group col-md-6">
  
                                <label for="customerDetailsCustomerFullName">blog Image</label>
                               <input type="file" name="image">
                              </div>
                            </div>
                        <input type="submit" name="submit" value="SAVE" class="btn btn-success">
                        <input type="reset" name="reset" value="CLEAR" class="btn btn-danger">
                      </div> 
                  </form>
                  </div>
              </div>
          </main>
  
@endsection