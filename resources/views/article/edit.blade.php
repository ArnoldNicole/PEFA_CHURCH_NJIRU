@extends('layouts.admin')
@section('links')
<link rel="stylesheet" href="{{asset('css/richtext.min.css')}}">
@endsection
@section('content')
        <div class="container-fluid">
              @if (\Session::has('success'))
              <div class="alert alert-danger my-alert" >
                  <hr>    
                  <ul>
                      <li>{!! \Session::get('success') !!}</li>
                  </ul>
              </div>
          @endif
          <script>
              document.querySelector('.my-alert').style.display = 'block';
          setTimeout(function() {
            document.querySelector('.my-alert').style.display = 'none';
          }, 4000);
              </script>

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{auth()->user()->name}} Edit  site Article </h1>
          </div>
      <form role="form-horizontal"  action="/admin/article/update/{{$aword->id}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group row">
                      <label class="col-form-label text-md-right col-md-3">Title</label>
                      <div class="input-group col-md-9">            
                          <input type="text" name="title" 
                          class="form-control @error('title') is-invalid @enderror" value="{{ $aword->title ??  old('title') }}" required>
                      
                      @error('title')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror   
                      </div>      
                    </div> 

                    <div class="form-group row mb-4">
                      <label for="" class="col-md-3 col-form-label text-md-right @error('word') is-invalid @enderror">Article Errors</label>
                      <div class="col-md-9 input-group">
                        @error('word')
                            <span class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>           
                   
                    <div class="form-group row mt-2">
                      <label for="word" class="col-md-3 col-form-label text-md-right">Article</label>
                      <div class="col-md-9">
                        <textarea class="content form-control @error('word') is-invalid @enderror" rows="9" name="word" required>
                          {{ $aword->word ?? old('word') }}
                        </textarea> 
                      </div>                                  
                    </div>                  
                    <div class="compose-btn">
                      <button class="btn btn-theme btn-sm" type="submit"><i class="fa fa-check"></i> Save Changes</button>
                       <a href="/admin" class="btn btn-danger btn-sm"><i class="fa fa-home"></i> cancel</a>
                      
                    </div>
                  </form>
         </div>
@endsection
@section('scripts')
<script src="{{asset('js/jquery3.1.js')}}"></script>
<script src="{{asset('js/jquery.richtext.min.js')}}"></script>
<script>
  $('.content').richText({
  // text formatting
  bold: true,
  italic: true,
  underline: true,

  // text alignment
  leftAlign: true,
  centerAlign: true,
  rightAlign: true,

  // lists
  ol: true,
  ul: true,

  // title
  heading: true,

  // fonts
  fonts: true,
  fontList: ["Arial", 
    "Arial Black", 
    "Comic Sans MS", 
    "Courier New", 
    "Geneva", 
    "Georgia", 
    "Helvetica", 
    "Impact", 
    "Lucida Console", 
    "Tahoma", 
    "Times New Roman",
    "Verdana"
    ],
  fontColor: true,
  fontSize: true,

  // uploads
  imageUpload: true,
  fileUpload: true,

  // media
  videoEmbed: true,

  // link
  urls: true,

  // tables
  table: true,

  // code
  removeStyles: true,
  code: true,

  // colors
  colors: [],

  // dropdowns
  fileHTML: '',
  imageHTML: '',

  // translations
  translations: {
    'title': 'Title',
    'white': 'White',
    'black': 'Black',
    'brown': 'Brown',
    'beige': 'Beige',
    'darkBlue': 'Dark Blue',
    'blue': 'Blue',
    'lightBlue': 'Light Blue',
    'darkRed': 'Dark Red',
    'red': 'Red',
    'darkGreen': 'Dark Green',
    'green': 'Green',
    'purple': 'Purple',
    'darkTurquois': 'Dark Turquois',
    'turquois': 'Turquois',
    'darkOrange': 'Dark Orange',
    'orange': 'Orange',
    'yellow': 'Yellow',
    'imageURL': 'Image URL',
    'fileURL': 'File URL',
    'linkText': 'Link text',
    'url': 'URL',
    'size': 'Size',
    'responsive': 'Responsive',
    'text': 'Text',
    'openIn': 'Open in',
    'sameTab': 'Same tab',
    'newTab': 'New tab',
    'align': 'Align',
    'left': 'Left',
    'center': 'Center',
    'right': 'Right',
    'rows': 'Rows',
    'columns': 'Columns',
    'add': 'Add',
    'pleaseEnterURL': 'Please enter an URL',
    'videoURLnotSupported': 'Video URL not supported',
    'pleaseSelectImage': 'Please select an image',
    'pleaseSelectFile': 'Please select a file',
    'bold': 'Bold',
    'italic': 'Italic',
    'underline': 'Underline',
    'alignLeft': 'Align left',
    'alignCenter': 'Align centered',
    'alignRight': 'Align right',
    'addOrderedList': 'Add ordered list',
    'addUnorderedList': 'Add unordered list',
    'addHeading': 'Add Heading/title',
    'addFont': 'Add font',
    'addFontColor': 'Add font color',
    'addFontSize' : 'Add font size',
    'addImage': 'Add image',
    'addVideo': 'Add video',
    'addFile': 'Add file',
    'addURL': 'Add URL',
    'addTable': 'Add table',
    'removeStyles': 'Remove styles',
    'code': 'Show HTML code',
    'undo': 'Undo',
    'redo': 'Redo',
    'close': 'Close'
  },

  // dev settings
  useSingleQuotes: false,
  height: 0,
  heightPercentage: 0,
  id: "",
  class: "",
  useParagraph: false
  
});
</script>
@endsection
