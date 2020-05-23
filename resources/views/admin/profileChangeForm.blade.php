@extends('layouts.admin')

@section('content')
        <div class="container-fluid">
              @if (\Session::has('success'))
              <div class="alert alert-danger my-alert" >
                  <hr>    
                  <ul>
                      <li>{!! \Session::get('success') !!}</li>
                  </ul>
              </div>
          @endif
          <script>
              document.querySelector('.my-alert').style.display = 'block';
          setTimeout(function() {
            document.querySelector('.my-alert').style.display = 'none';
          }, 4000);
              </script>

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{auth()->user()->name}} </h1>
          </div>
          <form action="/admin/profile/saveProfile" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-panel">

              <div class="form-group">
                <label>Bio</label>
                input
                <input type="text" name="bio" class="form-control @error('bio') is-invalid @enderror" value="{{ old('bio') ?? $profile->bio}}" required>
                @error('bio')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Description</label>
                input
                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description') ?? $profile->description}}" required>
                @error('description')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
              </div>
             
              <div class="text-center">
                <button class="btn btn-primary" type="submit">Save Changes</button>

              </div>
           
            </div>
          </form>


          <!-- Content Row -->

        </div>
@endsection
