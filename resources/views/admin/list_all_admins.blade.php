@extends('layouts.admin')
@section('content')
<div class="row justify-content-center">
	<div class="col-md-8">
		@if($message = Session::get('success'))
		 <div class="alert alert-dismissible alert-success row justify-content-center">
		   <span class="close" data-dismiss="alert">&times;</span>
		   {{$message}}
		 </div>                    
		 @endif

		 @if($message = Session::get('error'))
		 <div class="alert alert-dismissible alert-danger row justify-content-center">
		   <span class="close" data-dismiss="alert">&times;</span>
		   {{$message}}
		 </div>                    
		 @endif
	</div>
</div>
<div class="row justify-content-center mt-4">
	<div class="col-md-8">
		<h4 class="text-center font-weight-bold h4 text-primary">
			PEFACHURCHNJIRU.ORG WEB ADMINS & CONTENT CREATORS
		</h4>
		@foreach($admins as $admin)

		<div class="row justify-content-center border border-info">
			<div class="col-md-8">
				<p class="font-weight-bold text-dark">Registered Email: <span class="text-success">{{$admin->admin_code}}</span></p>
				<p class="font-weight-bold text-dark">Status: <span class="text-success">{{$admin->status}}</span></p>
				@if($admin->status=="used")
					<p class="font-weight-bold text-dark">Admin Name: <span class="text-success">{{$admin->user->name}}</span></p>
					<p class="font-weight-bold text-dark">Active since: <span class="text-success">{{$admin->user->created_at->diffForHumans()}}</span></p>					
				@endif
			</div>
			<div class="col-md-4">
				@if($admin->status=="used")
				<img src="/storage/{{$admin->user->profile->image}}" alt="Admin Profile" class="img-fluid w-75 mt-3 rounded-circle img-thumbnail ">
				@else
				<img src="/storage/profiles/default.png" alt="Admin Profile" class="img-fluid w-75 mt-3 rounded-circle img-thumbnail ">
				@endif
			</div>
		</div>			
			<div class="dropdown-divider"></div>
		@endforeach
	</div>
</div>
<div class="row justify-content-center mt-4">
	<div class="col-md-8">
		{{$admins->links()}}
	</div>
</div>
@endsection