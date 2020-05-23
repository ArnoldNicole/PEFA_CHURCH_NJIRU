@extends('layouts.admin')
@section('links')
<script src="{{ asset('/css/vendor/jquery/jquery.min.js') }}"></script>
@endsection
@section('content')
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{auth()->user()->name}}</h1>
          </div>
          <div class="row">
            <div class="col-md-3">
              <i class="fa fa-inbox"></i>
            </div>
            <div class="col-md-8">
              @foreach($viewAllMessages as $message)
              <div class="row justify-content-center" id={{$message->id}}>
                <div class="col">
                  <div id="status{{$message->id}}"></div>
                </div>
              </div>
              <div class="row justify-content-center" id="Message{{$message->id}}">
                <div class="col-md-12">
                  <div class="card shadow mb-4">

                    {{-- card-header --}}
                      <a href="#collapseCardExample{{$message->id}}" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-primary">From | {{$message->email}}<span class="float-right">{{$message->name}}</span></h6>
                              </a>

                    {{-- card-body --}}

                    <div class="collapse show" id="collapseCardExample{{$message->id}}">
                      <div class="card-body">
                        <div class="text-muted">
                            {{$message->message}}
                          </div>
                        
                        <button id="reply{{$message->id}}" class="btn btn-success"
                         onclick="document.getElementById('Form{{$message->id}}').style.display='block';
                         document.getElementById('cancelBtn{{$message->id}}').style.display='block';
                        document.getElementById('reply{{$message->id}}').style.display='none'">Reply</button>
                         <button type="button" class="btn btn-primary float-right mt-2" id="btn{{$message->id}}">Mark As Read</button>
                        <br>
                        <button id="cancelBtn{{$message->id}}" style="display: none" class="btn btn-danger" onclick="document.getElementById('reply{{$message->id}}').style.display='initial';
                        document.getElementById('cancelBtn{{$message->id}}').style.display='none';
                        document.getElementById('Form{{$message->id}}').style.display='none';

                        ">Cancel</button>
                        <br>
                        <hr>
                        <div class="row justify-content-center">
                          <div class="col-md-12">
                            <form action="/admin/SENDrePLY/{{$message->id}}" method="POST" class="form-panel" id="Form{{$message->id}}" style="display: none">
                              @csrf
                            <div class="input-group row mb-1">
                              <label class="col-md-3">To</label>
                              <div class="col-md-9">
                                <input type="email" name="email" value="{{$message->email}}" class="form-control">
                              </div>
                            </div> 
                            
                            <div class="input-group row mb-1">
                              <label class="col-md-3">Text Reply</label>
                              <div class="col-md-9">
                                <textarea name="reply" rows="3" minlength="10" class="form-control" required></textarea>
                              </div>

                            </div> 
                            <div class="input-group-row">
                              <div class="col-md-6 float-right">
                                <button type="submit" class="btn btn-warning" value="{{$message->id}}">Send Reply</button>
                              </div>
                            </div>
                            
                            </form>
                          </div>
                        </div>

                      </div>
                    </div>


                  </div>
                </div>
               <script type="text/javascript">
                    // jQuery wait till the page is fullt loaded
                    $(document).ready(function () {
                        // keyup function looks at the keys typed on the search box
                        $('#btn{{$message->id}}').on('click',function() {
                            // the text typed in the input field is assigned to a variable 
                            var query = $(this).val();
                            // call to an ajax function
                            $.ajax({
                                // assign a controller function to perform search action - route name is search
                                url:"{{ url("/markmessageasread/".$message->id) }}",
                                // since we are getting data methos is assigned as GET
                                type:"GET",
                                // data are sent the server
                                //data:{'contact':query},
                                // if search is succcessfully done, this callback function is called
                                success:function (data) {
                                    // print the search results in the div called country_list(id)
                                    document.getElementById('Message{{$message->id}}').style.display="none";     
                                   $('#status{{$message->id}}').html(data);
                                }
                            })
                            // end of ajax call
                        });                  
                       
                    });
                </script>
              </div>
              @endforeach

            </div>
          </div>


          <!-- Content Row -->

        </div>
@endsection
