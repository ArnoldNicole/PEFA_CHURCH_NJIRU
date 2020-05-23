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
              <script>
                  document.querySelector('.my-alert').style.display = 'block';
              setTimeout(function() {
                document.querySelector('.my-alert').style.display = 'none';
              }, 4000);
                  </script>
          @endif
          

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Weekly News Article Edit Center </h1>
          </div>
          <form role="form-horizontal"  action="/admin/weekly_event/Update/{{$weeklyNews->id}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group row">
                          <label class="col-md-3">Day</label>
                          <div class="input-group col-md-9">            
                              <select name="day" class="form-control">
                                <option value="{{$weeklyNews->day}}">{{$weeklyNews->day}}</option>
                                <option value="Monday">Monday</option>
                                 <option value="Tuesday">Tuesday</option>
                                  <option value="Wednesday">Wednesday</option>
                                   <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                     <option value="Saturday">Saturday</option>
                                      <option value="Sunday">Sunday</option>
                               
                              </select>
                          
                          @error('day')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror   
                          </div>      
                        </div>            
                       
                        <div class="form-group row">
                          <label for="event" class="col-md-3">WEEK DAY EVENT</label>
                          <div class="col-md-9">
                            <textarea name="event" class="col-md-8 content form-control @error('event') is-invalid @enderror"  required>
                              {{ old('event') ?? $weeklyNews->event }}
                            </textarea>
                                         @error('event')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror 
                          </div>
                          
                        </div>
                        <div class="compose-btn">
                          <button class="btn btn-theme btn-sm" type="submit"><i class="fa fa-check"></i> Save</button>
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
