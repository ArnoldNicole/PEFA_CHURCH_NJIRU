@extends('layouts.admin')
@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-10">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h5 class="text-info font-weight-bold h5 text-center mb-2">This page shows all articles recently created and are yet to be approved.</h5>
        @if (\Session::has('success'))
                <div class="alert alert-success my-alert mb-3" >
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
      </div>
    </div>
   
   <div class="row justify-content-center mt-4">
     <div class="col-md-12 mt-2">
       @if($articles->count()==0)
         <span class="alert alert-danger mt-2">Nothing to show here
           <a href="/admin/createArticle">Create Article Here</a></span>
       @else
         <span>All articles made by users and are not approved.</span>
             @foreach($articles as $note)
             <div class="card-body well ">
               <div class="d-flex justify-content-center">
               <span><strong><a href='/admin/profile/{{$note->user_id}}'>{{$note->author}}</a></strong><i class="fa fa-arrow-right"></i></span>
               
               <span class="success">{{$note->title}}</span>
               <hr>
             <a class="btn btn-primary btn-sm" href="/article/review/{{$note->id}}" title="Approve">Approve</a>
             <a href="/admin/article/edit/{{$note->id}}" class="btn btn-primary rounded-circle ml-1 mr-1"><i class="fa fa-edit"></i></a>
          
           <br>
               <hr>
             </div>
             <div class="form-panel"> {!! html_entity_decode($note->word)!!}
         <hr>
             </div>
             </div>

             @endforeach
       @endif
       
     </div>
   </div> 
   
  </div>
  <div class="col-md-1">
  </div>
</div>

  </div>
@endsection
