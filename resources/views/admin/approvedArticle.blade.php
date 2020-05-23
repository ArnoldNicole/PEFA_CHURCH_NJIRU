@extends('layouts.admin')
@section('content')
<div class="container-fluid" style="overflow-y: scroll;">


  <div class="row justify-content-center">
    <div class="col-md-12">
      @if (\Session::has('success'))
                  <div class="alert alert-success my-alert" >
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


<div class="row justify-content-center">
  <div class="col-md-12">   
    @if($articles->count()==0)
    <span class="alert alert-danger">No approved article available.</span>
    @else
      @foreach($articles as $note)
      <div class="row">
        <div class="col-md-12">
            
            {{-- Heading row --}}

            <div class="row justify-content-center">
              <div class="col-md-12">
                <span>
                  <strong>
                  <a href='/admin/profile/{{$note->user_id}}'>
                    {{$note->author}}
                  </a>
                </strong>
                  </span>
                <i class="fa fa-arrow-right"></i>
                <span class="success">{{$note->title}}</span>
              </div>
            </div>

            {{-- Actions row --}}
            @if(Auth::user()==$note->user) 
            <div class="row justify-content-center mb-2">
              <div class="col-md-4">
                {{-- Make Featured col --}}
                   @if($note->featured=="no")
                   <a class="btn btn-primary btn-block" href="/article/feature/{{$note->id}}" title="Featuerd articles appear on website.">Make Featured</a>

                   @else
                   <form action="/admin/article/takedown/{{$note->id}}" method="POST">
                     @csrf
                     @method('PATCH')
                     <input type="hidden" name="featured" value="no">
                     <button type="submit" title="Remove from Site" class="btn btn-outline-warning  btn-block"><i class="fa fa-user"></i> Remove</button>
                   </form>
                   @endif
                   

                     
                     
                   
              </div>

              <div class="col-md-4">
                {{-- Delete row --}}
                <form action="/admin/article/delete/{{$note->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" title="Delete Completely" class="btn btn-outline-danger btn-block "><i class="fa fa-trash"></i>Delete</button>
                </form>
                
              </div>

              <div class="col-md-4">
                {{-- Edit --}}
              <a href="/admin/article/edit/{{$note->id}}" class="btn btn-outline-primary btn-block"><i class="fa fa-edit"> Edit</i></a>                
              </div>
            </div>

            @endif

            {{-- Note Body row --}}
            <div class="row">
              <div class="col-md-12">
                <div class="row justify-content-center">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        {!! html_entity_decode($note->word)!!}
                        <div class="dropdown-divider"></div>

                        <div class="row">
                          <div class="col-md-12">
                             <h4 class="h4 text-danger text-sm-center">Unsafe Comments for {{$note->title}}</h4>
                             @foreach($note->comments as $comment)
                              @if($comment->fine!="yes")
                               <div class="row justify-content-center text-dark border border-info mb-2 ">
                                <div class="col-md-5">
                                   <p class="p3 font-weight-bold">{{$comment->name}}</p>
                                   <span>If you think the comment meets the standards, click below to make it visible on website</span>
                                   <a href="/admin/take_comment_up/{{$comment->id}}" class="btn btn-info btn-block mb-2">Comment is Safe</a>
                                </div>
                                 <div class="col-md-7 border border-primary"> 
                                    <p class="p3 text-dark">{{$comment->comment}}</p>
                                    <span class="card-link"><a href="mailto:{{$comment->email}}">{{$comment->email}}</a></span>
                                </div>
                               </div>        
                              @endif

                              @endforeach

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
      </div>                                
    

        @endforeach
    @endif
    
  </div>
  
</div>

  </div>
@endsection
