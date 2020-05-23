@extends('layouts.admin')
@section('content')
@foreach($news as $new)
		<div class="row justify-content-center mb-3">
			<div class="col-md-8 ">
				<div class="card">
				<div class="card-header bg-light text-success font-weight-bold">{{$new->title}}
					<a href="/admin/news/edit/{{$new->id}}" class="btn btn-outline-secondary float-right">Edit</a></div>
				<div class="card-body">
					{!! html_entity_decode($new->body) !!}
				</div>
				<div class="card-footer bg-light">
					<a href="#" class="float-left btn btn-outline-info mr-4">Add News Icon</a>
					<form action="/admin/news/delete/{{$new->id}}" method="POST">
						@csrf
						@method('delete')
						<button type="button" id="Close{{$new->id}}"  class="btn btn-outline-danger float-rignt" onclick="
						document.getElementById('WarningBox{{$new->id}}').style.display='block';
						document.getElementById('Close{{$new->id}}').style.display='none';
						">Delete</button>
						<div class="row justify-content-center" id="WarningBox{{$new->id}}" style="display:none;">
							<div class="col-md-8">
								<p>Are you sure You Want to delete The Item?</p>
								<button type="submit" class="btn btn-outline-danger mr-3">Delete News Item</button>
								<button type="button" class="btn btn-outline-success" onclick="document.getElementById('WarningBox{{$new->id}}').style.display='none';
								document.getElementById('Close{{$new->id}}').style.display='initial';">Cancel</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endforeach
@endsection
