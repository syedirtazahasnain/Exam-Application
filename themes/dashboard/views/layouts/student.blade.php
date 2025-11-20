<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
        BASE_URL="<?php echo url('') ?>"
    </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> @yield('title')</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  
  <style>
    /* Apply beautiful font to entire website */
    body {
        font-family: 'Poppins', sans-serif !important;
    }

    /* Modern Navbar Styling */
    .main-header.navbar {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
        box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        border: none;
    }

    .main-header .navbar-nav .nav-link {
        color: white !important;
        font-weight: 500;
        border-radius: 8px;
        margin: 0 2px;
        transition: all 0.3s ease;
    }

    .main-header .navbar-nav .nav-link:hover {
        background: rgba(255,255,255,0.15);
        transform: translateY(-1px);
    }

    /* Search bar styling */
    .navbar-search-block {
        background: rgba(255,255,255,0.1);
        backdrop-filter: blur(10px);
    }

    .form-control-navbar {
        background: rgba(255,255,255,0.9);
        border: none;
        border-radius: 25px;
    }

    .btn-navbar {
        background: transparent;
        border: none;
        color: #667eea;
    }

    /* Sidebar Styling */
    .main-sidebar {
        background: linear-gradient(180deg, #2B3990 0%, #1a237e 100%) !important;
    }

    .brand-link {
        border-bottom: 1px solid rgba(255,255,255,0.1);
        background: rgba(255,255,255,0.05);
    }

    .brand-text {
        font-weight: 600 !important;
        letter-spacing: 0.5px;
        color: white !important;
    }

    /* Active link styling */
    .nav-sidebar .nav-link.active {
        background-color: #4353b9 !important;
        color: white !important;
        border-radius: 8px;
        margin: 2px 8px;
        font-weight: 500;
        box-shadow: 0 4px 15px rgba(0, 174, 239, 0.3);
        transform: translateX(5px);
        transition: all 0.3s ease;
    }

    .nav-sidebar .nav-link.active i {
        color: white !important;
        transform: scale(1.1);
    }

    .nav-sidebar .nav-link {
        color: rgba(255,255,255,0.9) !important;
        transition: all 0.3s ease;
        border-radius: 8px;
        margin: 2px 8px;
        padding: 12px 15px;
    }

    .nav-sidebar .nav-link i {
        color: rgba(255,255,255,0.8) !important;
        transition: all 0.3s ease;
        width: 20px;
        text-align: center;
        margin-right: 8px;
    }

    .nav-sidebar .nav-link:hover:not(.active) {
        background-color: rgba(0, 174, 239, 0.15) !important;
        transform: translateX(3px);
        color: white !important;
    }

    .nav-sidebar .nav-link:hover:not(.active) i {
        color: white !important;
    }

    /* Preloader styling */
    .preloader {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    /* Content area styling */
    .content-wrapper {
        background: #f8f9fa;
    }
  </style>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('assets/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('assets/plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  

  <!-- Navbar -->
  <style>
/* White Navbar Styling */
.main-header.navbar {
    background: #ffffff !important;
    box-shadow: 0 2px 15px rgba(0,0,0,0.08);
    border-bottom: 1px solid #eaeaea;
}

.main-header .navbar-nav .nav-link {
    color: #4a5568 !important;
    font-weight: 500;
    border-radius: 6px;
    margin: 0 2px;
    padding: 8px 12px;
    transition: all 0.3s ease;
    position: relative;
}

.main-header .navbar-nav .nav-link:hover {
    background: #f7fafc;
    color: #2d3748 !important;
    transform: translateY(-1px);
}

.main-header .navbar-nav .nav-link i {
    color: #718096;
    transition: all 0.3s ease;
}

.main-header .navbar-nav .nav-link:hover i {
    color: #4a5568;
}

/* Menu toggle button styling */
.main-header .navbar-nav .nav-link[data-widget="pushmenu"] {
    background: #f8f9fa;
    border-radius: 8px;
    margin-right: 10px;
}

.main-header .navbar-nav .nav-link[data-widget="pushmenu"]:hover {
    background: #e9ecef;
    transform: scale(1.05);
}

/* Search bar styling */
.navbar-search-block {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    border-radius: 10px;
}

.form-control-navbar {
    background: #f8f9fa;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    color: #4a5568;
    transition: all 0.3s ease;
}

.form-control-navbar:focus {
    background: #ffffff;
    border-color: #00aeef;
    box-shadow: 0 0 0 3px rgba(0, 174, 239, 0.1);
    color: #2d3748;
}

.btn-navbar {
    background: transparent;
    border: none;
    color: #718096;
    transition: all 0.3s ease;
}

.btn-navbar:hover {
    color: #00aeef;
    transform: scale(1.1);
}

/* Fullscreen and control sidebar buttons */
.main-header .navbar-nav .nav-link[data-widget="fullscreen"],
.main-header .navbar-nav .nav-link[data-widget="control-sidebar"] {
    background: #f8f9fa;
    border-radius: 8px;
    margin-left: 5px;
}

.main-header .navbar-nav .nav-link[data-widget="fullscreen"]:hover,
.main-header .navbar-nav .nav-link[data-widget="control-sidebar"]:hover {
    background: #e9ecef;
    transform: scale(1.05);
}

/* Active state for nav items */
.navbar-nav .nav-item .nav-link.active {
    color: #00aeef !important;
    background: rgba(0, 174, 239, 0.1);
}

.navbar-nav .nav-item .nav-link.active i {
    color: #00aeef !important;
}

/* Responsive adjustments */
@media (max-width: 576px) {
    .main-header .navbar-nav .nav-link {
        padding: 6px 8px;
        font-size: 14px;
    }
    
    .navbar-search-block {
        margin-top: 10px;
    }
}
</style>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search students, exams..." aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Fullscreen Toggle -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="Fullscreen">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <!-- Control Sidebar Toggle -->
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" title="Settings">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
           <img  src="{{url('assets/dist/img/AdminLTELogo.webp')}}" alt="AdminLTELogo" style="padding: 12px; width: 218px;">

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @php
              $currentUrl = url()->current();
          @endphp

          <li class="nav-item">
            <a href="{{ url('student/dashboard')}}" class="nav-link {{ $currentUrl == url('student/dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="{{ url('student/exam')}}" class="nav-link {{ str_contains($currentUrl, 'student/exam') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>Exams</p>
            </a>
          </li> 
        
          <li class="nav-item">
            <a href="{{ url('student/logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Main Content -->
  <div class="">
    @yield('content')
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ url('assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ url('assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ url('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ url('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{ url('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ url('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('assets/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('assets/dist/js/pages/dashboard.js')}}"></script>
<script src="{{ url('assets/js/custom.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.datatable').dataTable();
        
        // Add smooth scrolling and animations
        $('.nav-link').on('click', function() {
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
</body>
</html>