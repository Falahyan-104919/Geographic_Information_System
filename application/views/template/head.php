<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UAP SIG</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?=base_url('assets/Alte/')?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/Alte/')?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url('assets/Alte/')?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url('assets/Alte/')?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url('assets/Alte/')?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url('assets/Alte/')?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/Alte/')?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url('assets/Alte/')?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url('assets/Alte/')?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url('assets/Alte/')?>plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="<?=base_url('assets/Alte/')?>#" role="button"><i class="fas fa-bars"></i></a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('assets/Alte/')?>index3.html" class="brand-link">
      <span class="brand-text font-weight-light">MENU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?=base_url('Welcome')?>" class="nav-link active">
              <i class="nav-icon fas fa-drafting-compass"></i>
              <p>
                MAPS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('Welcome/index')?>" class="nav-link active">
                  <i class="far fa-map nav-icon"></i>
                  <p>Normal Map</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Welcome/map2')?>" class="nav-link">
                  <i class="far fa-map nav-icon"></i>
                  <p>Dynamic Map</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Welcome/form')?>" class="nav-link">
                  <i class="far fa-map nav-icon"></i>
                  <p>FORM Marker</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Welcome/form2')?>" class="nav-link">
                  <i class="far fa-map nav-icon"></i>
                  <p>FORM Circle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Welcome/table')?>" class="nav-link">
                  <i class="far fa-map nav-icon"></i>
                  <p>Table Marker</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Welcome/table2')?>" class="nav-link">
                  <i class="far fa-map nav-icon"></i>
                  <p>Table Polygon</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>