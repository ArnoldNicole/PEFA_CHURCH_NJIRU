<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PEFA ADMIN</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('css/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
   @yield('links')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{auth()->user()->name}}</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
       MENU
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Articles </span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Site Articles</h6>
            <a class="collapse-item {{ (request()->is('admin/createArticle')) ? 'active' : '' }}" href="/admin/createArticle">New</a>            
             <a class="collapse-item {{ (request()->is('admin/Articles/All')) ? 'active' : '' }}" href="/admin/Articles/All">view all Approved</a>
            <a class="collapse-item {{ (request()->is('admin/approveArticle')) ? 'active' : '' }}" href="/admin/approveArticle">View un Approved Articles</a>           
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fa fa-edit"></i>
          <span>Website Gallery </span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">site Images</h6>
            <a class="collapse-item" href="/admin/createImage">New</a>
             <a class="collapse-item" href="/gallery">Gallery</a>
          </div>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNews" aria-expanded="true" aria-controls="collapseNews">
          <i class="fa fa-edit"></i>
          <span>News Desk </span>
        </a>
        <div id="collapseNews" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Create And Edit News</h6>
            <a class="collapse-item" href="/news/new/create">New</a>
             <a class="collapse-item" href="/news/all/{{auth()->user()->id}}">All</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Schedules</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Weekly Schedules</h6>
            <a class="collapse-item" href="/admin/weekly/new">New</a>
            <a class="collapse-item" href="/admin/weekly/view">View & Edit</a>
            {{-- <a class="collapse-item" href="/admin/weekly/takedown">Take Down</a>             --}}
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
     

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesa" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Messages  </span>
        </a>
        <div id="collapsePagesa" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Messaging Center:</h6>
            <a class="collapse-item" href="/admin/message/view">Unread  Inbox: {{App\contact::where('status','unread')->count()}}</a>
            <a class="collapse-item" href="#">Compose</a>
            <a class="collapse-item" href="/admin/messages/InclusiveInbox">All Inbox</a>
             </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmins" aria-expanded="true" aria-controls="collapsePages">
          <i class="fa fa-users"></i>
          <span>Admins</span>
        </a>
        <div id="collapseAdmins" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Admin Center</h6>
            <a class="collapse-item" href="/admin/admin/viewAll">View All</a>
            <a class="collapse-item" href="/admin/addNewAdmin">Add New</a>
             </div>
        </div>
      </li>
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <?php
          /*
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          */
          ?>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown no-arrow mx-1">
                          <a class="nav-link dropdown-toggle" href="#" id="HelpLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-circle fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-success badge-counter"><i class="fa fa-info"></i></span>
                          </a>
                          <!-- Dropdown - Messages -->
                          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="HelpCenter">
                            <h6 class="dropdown-header">
                              Help
                            </h6>
                            
                            <a class="dropdown-item d-flex align-items-center" href="/admin/HelpCentre">
                              <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('favicon.ico')}}" alt="">
                                <div class="status-indicator bg-success"></div>
                              </div>
                              <div class="font-weight-bold">
                                <div class="text-truncate">
                                  When stuck always click on me to get help.
                                </div>
                                <div class="small text-gray-500">PEFA BOT</div>
                              </div>
                            </a>
                          </div>
                        </li>


            <li class="nav-item dropdown no-arrow mx-1">
                          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">{{App\contact::where('status','unread')->count()}}</span>
                          </a>
                          <!-- Dropdown - Messages -->
                          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                              Message Center
                            </h6>
                            @foreach(App\contact::where('status','unread')->paginate(3) as $alert)
                            <a class="dropdown-item d-flex align-items-center" href="/admin/message/view#{{$alert->id}}">
                              <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('favicon.ico')}}" alt="">
                                <div class="status-indicator bg-success"></div>
                              </div>
                              <div class="font-weight-bold">
                                <div class="text-truncate">
                                  {!! html_entity_decode(substr($alert->message, 0, 110)) !!}
                                </div>
                                <div class="small text-gray-500">{{$alert->name}}</div>
                              </div>
                            </a>
                            @endforeach                           
                            
                            
                            <a class="dropdown-item text-center small text-gray-500" href="/admin/message/view">Read More Messages</a>
                          </div>
                        </li>

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            

            <!-- Nav Item - Alerts -->
           
            <!-- Nav Item - Messages -->
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span>
                <img class="img-profile rounded-circle" src="/storage/{{auth()->user()->profile->image}}">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                @auth
                <a class="dropdown-item" href="/admin/profile/">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                @endauth               
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
      <div class="container-fluid">
        @yield('content')
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; pefachurchnjiru.org</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a><br>                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </div>
      </div>
    </div>
  </div>
@yield('scripts')
   <script src="{{ asset('/css/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/css/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('/css/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('/css/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  {{-- <script src="{{ asset('/css/vendor/chart.js/Chart.min.js') }}"></script> --}}

  <!-- Page level custom scripts -->
  {{-- <script src="{{ asset('/css/js/demo/chart-area-demo.js') }}"></script> --}}
  {{-- <script src="{{ asset('/css/js/demo/chart-pie-demo.js') }}"></script> --}}

</body>

</html>
