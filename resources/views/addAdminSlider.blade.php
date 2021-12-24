@extends('layouts.backend.main')
@section('content')
<div id="layoutSidenav_content" style="background-color:#e6e6e6;">
                <main>       
        <div class="container mt-4">
            <div class="card">
                <div class="card-header" style="background-color: #404040; color: white;">Add Slider
                   
                </div>
                 <form class="form-horizontal style" method="POST" enctype="multipart/form-data" action="{{route('store.slider')}} ">
                  
                  @csrf
                    <div class="card-body">
                         <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Title</label>
                              <input type="text" class="form-control"name="title" placeholder="Enter Slider Title" value=""
                               >
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Long Description
                              </label>
                              <textarea type="text" class="form-control"name="longdescription" placeholder=""  id="editor" 
                              value="" ></textarea>
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
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Short Description
                              </label>
                              <input type="text" class="form-control"name="shortdescription" placeholder="Enter Products Price"   
                              value="" >
                            </div>
                          </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="customerDetailsCustomerFullName">Image</label>
                             <input type="file" name="image"value="">
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