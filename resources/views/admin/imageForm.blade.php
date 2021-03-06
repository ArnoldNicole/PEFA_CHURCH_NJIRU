@extends('layouts.admin')

@section('content')
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{auth()->user()->name}} </h1>
          </div>
          <form action="/admin/profile/saveImage" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-panel">

              <div class="form-group">
                <label>Choose your profile Image</label>
                input
                <input type="file" name="image" class="form-control @error('name') is-invalid @enderror" required>
                @error('image')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
              </div>
              <div class="text-center">
                <button class="btn btn-primary" type="submit">Save Image</button>

              </div>
           
            </div>
          </form>


          <!-- Content Row -->

        </div>
@endsection
