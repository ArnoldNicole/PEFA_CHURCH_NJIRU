@extends('layouts.app')

@section('content')
     <div class="mt-5">
       <div class="row justify-content-center mt-4">
        <h1 class="col-md-6 font-weight-bold text-dark outline">Our Weekly Events </h1>
       
       </div>
       <div class="row justify-content-center"> 
       <div class="col-md-10">       
        @foreach($weekly as $week)
        <a href="#">
         <div class="card mt-4 border border-info col-lg-6 animated tada card-outline-primary" >
          <div class="card-header bg-white font-weight-bold text-info h5 text-center font-weight-bold animated wobble">
            {{$week->day}}
          </div>
          <div class="card-body">
           {!! html_entity_decode($week->event)!!}
          </div>           
         </div>
       </a>
         @endforeach   
         </div>             
       </div>

     </div> 
@endsection