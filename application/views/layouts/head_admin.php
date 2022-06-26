<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMK 1 Muhammadiyah Temanggung | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url("assets/plugins/fontawesome-free/css/all.min.css") ;?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqvmap/jqvmap.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css') ;?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.css');?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/summernote/summernote-bs4.min.css');?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
  
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="width: 100%;">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
   
	  <li class="nav-item d-none d-sm-inline-block" style="width: 100%;">
	<div class="row">
	<span style="text-align: center;display:flex;justify-content: center;width:90%">Sistem Bursa Kerja Khusus dan <br> Tracer Study SMK 1 Muhammadiyah Temanggung</span>
      <span style="display:flex;align-items:center;justify-content:end;width:5%">
        <img src="<?php echo base_url('file/smk.png'); ?>" width="42px" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <!-- <span class="font-weight-light" style="font-size: 16px; margin-left:5px">SMK 1 Muhammadiyah Temanggung</span> -->
      </span>
	</div>
	  </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
  

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce </a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				
          <li class="nav-item ">
            <a href="<?php echo base_url('homepage') ?>" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
							Halaman Utama
              </p>
            </a>
          </li>
				
          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="<?php echo base_url('post/index')?>" class="nav-link">
              <i class="nav-icon far fa-newspaper"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
					<!-- <li class="nav-item">
            <a href="<?php echo base_url('alumni/index') ?>" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
								Data Alumni
              </p>
            </a>
          </li> -->
					<li class="nav-item">
            <a href="<?php echo base_url('admin/user') ?>" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
								Data User
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?php echo base_url('struktur/index') ?>" class="nav-link">
              <i class="nav-icon fa fa-university"></i>
              <p>
								Struktur
              </p>
            </a>
          </li>
				
					<li class="nav-item">
            <a href="<?php echo base_url('auth/logout') ?>"class="nav-link">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
								Logout
              </p>
            </a>
          </li>
				
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
