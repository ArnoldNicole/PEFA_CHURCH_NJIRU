@extends('layouts.app')
@section('content')
<div class="container mt-5"> 
  @if($featuredArticles!=null)
 <div class="row justify-content-center mt-5">
   <div class="col-md-8">     
       <div class="row justify-content-center" class="d-flex pt-5">
       
       <div class="col-10">
         <span class="lead mb-0">
           <h2 class ="text-success">{{$featuredArticles->title}}</h2> by <strong><em>{{$featuredArticles->author}}</em></strong>     
          
          </span> 
          <article>
            {!! html_entity_decode($featuredArticles->word)!!}
          </article>    
          <span class="font-weight-bold text-info float-right">Created : {{$featuredArticles->created_at->diffForHumans()}}</span>
          <br>
       </div>
      
       </div>
        
   </div>
  
    <div class="col-md-4">
      <a href="#Comment" class="btn btn-block btn-outline-info">Add Comment</a>
      <h5 class="text-center">You may also like</h5>
      <ul class="list-group">
        @foreach($Articles as $Article)
        @if($featuredArticles->id!=$Article->id)
            <li class="list-group-item">
              <a href="/a_word/{{$Article->id}}"><h6>{{$Article->title}}</h6></a>
              {!! html_entity_decode(substr($Article->body, 0, 200)) !!}
              <div class="row mt-1 justify-content-center">
                <div class="col-md-4">
                  <i class="fa fa-edit"></i> <span>{{$Article->comments->count()}} Commnets</span>
                </div>
              </div>
            </li>
            @endif
        @endforeach
      </ul>
    </div>

 </div>
 <div class="row justify-content-center">
   <div class="col-md-12">
     <div class="card">
       <div class="card-header text-info font-weight-bold bg-light">Comments</div>
       <div class="card-body border border-top-0 border-info">
          @if($featuredArticles->comments->count()==0)
         <span class="alert alert-info font-weight-bold">Add First Comment Below</span>
         @else
           <div class="row justify-content-center border border-primary">
             <div class="col-md-10">
               @foreach($featuredArticles->comments as $comment)
                 @if($comment->fine=="yes")
                 <div class="row justify-content-center border border-top-0 border-success border-left-0 border-right-0">
                   <div class="col-md-3">
                     
                     <div class="d-flex align-items-center">
                       
                         <i class="fa fa-user rounded-circle  text-gray-dark mt-2" style="font-size: xx-large;"></i>
                       
                           <div>
                             <div class="font-weight-bold">
                               <a href="#">
                                 <span class="text-dark font-weight-bold">{{$comment->name}}</span>
                               </a>                            
                             </div>
                           </div>

                     </div>                             
                         
                   </div>
                   <div class="col-md-9">
                     <div class="mt-1">
                             <div class="font-weight-normal">                           
                                 <div><span class="text-dark">{{$comment->comment}}</span></div>
                                 <div class="font-weight-bold text-info">{{$comment->created_at->diffForHumans()}}</div>
                                                        
                            </div>
                            @if(Auth::check()==true)
                             <a href="/admin/take_comment_down/{{$comment->id}}" class="text-info">Take this comment Down</a>
                           @endif 
                     </div>
                     
                   </div>
                 </div>
                 @endif
                 
               @endforeach
             </div>
           </div>
         @endif
       
       <div class="row justify-content-center mb-lg-5">
         <div class="col-md-12">
           <p class="text-left text-success font-weight-bold ml-3">Add your Comment Here</p>
           <div class="row justify-content-center">
             <div class="col-md-12">
               <form action="/pefa_comments_section/New/{{$featuredArticles->id}}" class="form" method="POST" id="Comment">
                 @csrf
                 <div class="form-group-row">
                   <label for="name" class="col-md-4">Name</label>
                   <div class="input-group col-md-8">
                     <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{@old('name')}}" required>
                     @error('name')
                      <span class="invalid-feedback">{{$message}}</span>
                      @enderror
                   </div>
                 </div>

                 <div class="form-group-row">
                   <label for="email" class="col-md-4">Email</label>
                   <div class="input-group col-md-8">
                     <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{@old('email')}}" required>
                     @error('email')
                      <span class="invalid-feedback">{{$message}}</span>
                      @enderror
                   </div>
                 </div>

                 <div class="form-group-row">
                   <label for="comment" class="col-md-4">Comment</label>
                   <div class="input-group col-md-8">
                     <textarea name="comment" class="form-control @error('comment') is-invalid @enderror" required> {{@old('comment')}}</textarea>
                     @error('comment')
                      <span class="invalid-feedback">{{$message}}</span>
                      @enderror
                   </div>
                 </div>

                 <div class="form-group-row mt-2">
                   
                   <div class="input-group col-md-8 mb-4">
                     <button type="submit" class="btn btn-block btn-outline-primary">Comment</button>
                   </div>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
       </div>
     </div>
   </div>
 </div>
   
@endif
	</div>
@endsection