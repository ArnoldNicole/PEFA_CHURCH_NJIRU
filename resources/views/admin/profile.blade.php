@extends('layouts.admin')

@section('content')
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{auth()->user()->name}}</h1>
          </div>
          <div class="row">
            <div class="col-md-3">
              <img src="/storage/{{$user->profile->image}}" alt="image" class="img-fluid img-thumbnail w-100 rounded-circle">
              
                  <a href="/admin/image/edit" title="">Change Image</a>
            </div>
            <div class="col-md-8">

              <div class="card shadow mb-4">
                              <!-- Card Header - Accordion -->
                              <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-primary">My admin profile info</h6>
                              </a>
                              <!-- Card Content - Collapse -->
                              <div class="collapse show" id="collapseCardExample">
                                <div class="card-body">
                                  <div>Name:<span>{{auth()->user()->name}}</span></div>
                                  <div>Email:<span>{{auth()->user()->email}}</span></div>
                                  <div>Bio:<span>{{$user->profile->bio}}</span></div>
                                  <div>Info:<span>{{$user->profile->description}}</span></div>
                                  <hr>
                                  <a href="/admin/profile/edit" title="Edit Profile" class="btn btn-success">Edit Profile</a>
                                </div>
                              </div>
                            </div>

            </div>
          </div>


          <!-- Content Row -->

        </div>
@endsection
