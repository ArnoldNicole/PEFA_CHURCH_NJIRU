@extends('layouts.admin')
@section('links')
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<div class="row justify-content-center">
 
        <div class="col-md-12">
        	<h4 class="text-info h4">Events</h4>
        	<!-- page start-->
        	<div class="content-panel">
        	  <div class="adv-table">
        	    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered dt-responsive" id="example">
        	      <thead>
        	        <tr>
        	          <th>Day</th>
        	          <th>Event</th>
        	          <th></th
        	        </tr>
        	        <!--fullname admno upino classadmittedto gender status -->
        	      </thead>
        	      <tbody>
        	        @foreach($events as $event)
        	        <tr class="gradeX">
        	          <td>{{$event->day}}</td>
        	          <td class="border border-info">{!! $event->event !!}</td>
        	          <td> @if($event->user==auth()->user()) <a href="/admin/weekly_event/{{$event->id}}" class="btn btn-block btn-success">Edit</a>
                        <a href="/admin/weekly_event/delete/{{$event->id}}" class="btn btn-block btn-danger">Delete</a> @endif </td>
        	        </tr> 
        	        @endforeach 
        	                       
        	      </tbody>
        	    </table>
        	  </div>
        	</div>
        </div> 
        
</div>
@endsection
@section('scripts')
<script src="{{asset('js/jquery3.1.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
 <script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
 <script src="{{asset('js/responsive.bootstrap4.min.js')}}"></script>
 <script>
 
  $('#example').DataTable();
 
</script>
@endsection