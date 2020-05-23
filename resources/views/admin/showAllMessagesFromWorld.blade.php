@extends('layouts.admin')
@section('links')
<style>
	.chat {
	  list-style: none;
	  margin: 0;
	  padding: 0;
	}

	.chat li {
	  margin-bottom: 10px;
	  padding-bottom: 5px;
	  border-bottom: 1px dotted #B3A9A9;
	}

	.chat li .chat-body p {
	  margin: 0;
	  color: #777777;
	}

	.panel-body {
	  overflow-y: scroll;
	  height: 350px;
	}
	.chat-background {
		background-color: #98DBE3;
	}

	::-webkit-scrollbar-track {
	  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	  background-color: #F5F5F5;
	}

	::-webkit-scrollbar {
	  width: 12px;
	  background-color: #F5F5F5;
	}

	::-webkit-scrollbar-thumb {
	  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	  background-color: #555;
	}
</style>
@endsection
@section('content')

<div class="row justify-content-center" id="chats">
	<div class="col-md-9">
		<h4 class="text-center text-info font-weight-bold">All Inbox</h4>
		@if($Messages!=null)
		<ul class="chat">
		    @foreach($Messages as $message)
		    <li class="left clearfix  @if($message->status=='read') bg-gray-300  @endif">
		        <div class="chat-body clearfix row justify-content-center">
		            
		            	<div class="header col-md-4">
		            	    <strong class="text-dark font-weight-bold ml-2">
		            	        {{ $message->name }}
		            	    </strong>
		            	     
		            	</div>
		            
		            <p class="bg-white col-md-8">
		               <span > {{ $message->message }}</span>
		               <span class="text-info float-right"> {{$message->created_at}}</span>
		               <a href="mailto:{{$message->email}}" target="_blank" class="float-left"><strong class="text-dark font-weight-bold ml-2">
		            	        {{ $message->email }}
		            	    </strong></a>
		            </p>
		        </div>
		    </li>
		    @endforeach
		</ul>
		@endif
	</div>
	<div class="col-md-3">
		
	</div>
</div>
@endsection