@extends('layouts.backend.main')
@section('content')

    <form action="{{route('store.faq')}}" method="POST" class="form-group ml-5 mt-3">
        @csrf
        <table>
            <tr>
                <th>Question</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="question" class="form-control">
                </td>
            </tr>
            <tr>
                <th>Answer</th>
            </tr>
            <tr>
                <td>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                             
                              <textarea type="text" class="form-control"name="answer" placeholder=""  id="editor" 
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
                </td>
            </tr>
           
           
            <tr>
                <td>
                    <input type="submit" name="submit" value="SAVE" class="btn btn-success">
                </td>
            </tr>
        </table>
    </form>

@endsection