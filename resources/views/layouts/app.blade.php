<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Layad Administrator</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/css/style1.css')}}" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="/admin" class="text-nowrap logo-img">
            <img src="{{ asset('assets/img/logos/logo.png')}}" width="60px" alt="" />
            <span style="color: black; font-size: 16px; font-weight: bold;">Layad Administrator</span>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">REPORT</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/reportlist" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Report List</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/completelist" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Report Complete</span>
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" data-toggle="modal" data-target="#logoutModal" aria-expanded="false" style="color: red">
                <span>
                  <i class="ti ti-login fas fa-sign-out-alt"></i>
                </span>
                <span class="hide-menu" style="color: red">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item">
                <a class="nav-link nav-icon-hover" href="#" id="notificationDropdownToggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ti ti-bell-ringing"></i>
                  <div class="notification bg-primary rounded-circle"></div>
                </a>
            
                <!-- Notification Dropdown -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdownToggle">
                  <!-- Notification Items (you can dynamically generate these) -->
                  <a class="dropdown-item" href="#">10-01-2024:17.12, Laporan selesai</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">05-01-2024:17.56, Laporan masuk</a>
                  <!-- Add more items as needed -->
                </div>
              </li>
              <!-- Nav Item - User Information -->
                <a class="nav-link">
                    <span class="mr-2 d-none d-lg-inline" style="color: #007bff">{{Auth::user()->name}}</span>
                </a>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      
      @yield('content')
      <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
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
                      <button class="btn btn-secondary" style="background-color:grey" type="button" data-dismiss="modal">Cancel</button>
                      <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/js/sidebarmenu.js')}}"></script>
  <script src="{{ asset('assets/js/app.min.js')}}"></script>
  <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{ asset('assets/js/dashboard.js')}}"></script>
</body>

</html>