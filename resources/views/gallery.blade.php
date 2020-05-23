@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row pt-5">	
     
    @foreach($images as $image)
         <div class="col-md-4 pb-2">
             <a href="/p/{{ $image->id }}" target="_self">
           <img class=" img-fluid"
                src="/storage/{{$image->image}}"
                alt="{{$image->caption ?? 'Image Missing'}}"> 
           </a> 
         </div>   
    @endforeach
          
  </div><!-- end images row here -->
<div class="row justify-content-center">
        <div class="col-md-6 text-center">
          {{$images->links()}}
        </div>
      </div>  

       
	</div>


@endsection