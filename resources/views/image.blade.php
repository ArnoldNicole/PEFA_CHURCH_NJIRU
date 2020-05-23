@extends('layouts.app')

@section('content')
<div class="container">
<div class="row mt-5"> 

  <div class="col-8 mt-4">
        <img src="/storage/{{$image->image}}" class="w-100 " >
    </div>
    <div class="col-4">

      <div class="d-flex align-items-center">
        <div class="pr-3">
          <img src="" class="rounded-circle w-100" style="max-width: 50px">
        </div>
             <div>
              <div class="font-weight-bold">
                <a href="/profile/{{$image->user->id}}">
                  <span class="text-dark">{{$image->user->username}}</span>
                </a>
                <a href="/p/{{($image->id - 1)}}" class="btn btn-outline-primary rounded-circle @if(App\images::find($image->id - 1)==null) disabled " title="No Previous Photo"@else title="Previous Photo" @endif><i class="fa fa-arrow-left font-weight-bold"></i></a>
               <a href="/p/{{ $image->id + 1}}" class="btn btn-outline-primary rounded-circle @if(App\images::find($image->id + 1)==null) disabled"
                  title="No Next Photo" @else title="Next Photo" @endif><i class="fa fa-arrow-right font-weight-bold"></i></a>
                
              </div>
            </div>

      </div>

      <hr>
        <p class="mt-5">
          <span class="font-weight-bold">
          <a href="#" title="">
            <span class="text-success">{{$image->caption}}</span>
          </a>
        </span><br>
          
         <span class="text-info font-weight-bold">posted {{$image->created_at->diffForHumans()}}</span>
          </p>            
            
         
    </div>
   </div>
</div>
@endsection
 