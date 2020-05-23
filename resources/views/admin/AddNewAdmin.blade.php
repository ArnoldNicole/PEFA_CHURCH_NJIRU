@extends('layouts.admin')
@section('content')
<div class="row justify-content-center mt-3">
	<div class="col-md-12 mt-2">
		<div class="card">
			<div class="card-header">Add a New Admin To Website</div>
			<div class="card-body">
				<form action="/admin/save/newAdmin/" method="POST">
					@csrf
					<div class="form-group row">
						<label for="" class="col-md-3">Email Address</label>
						<div class="input-group col-md-9">
							<input type="email" name="admin_code" class="form-control @error('admin_code') is-invalid @enderror" value="{{ old('admin_code')}} ">
							@error('admin_code')
								<span class="invalid-feedback alert alert-danger">{{$message}}</span>
							@enderror
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-12">
							<button type="submit" class="btn tbtn-block btn-outline-success">Create Admin</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection