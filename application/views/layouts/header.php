<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>SMK 1 Muhammadiyah Temanggung</title>
	<link rel="stylesheet" href="<?= base_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/vendors/css/vendor.bundle.base.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
	<link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png') ?>" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
</head>
<body>
	<div class="container-scroller" style="min-height:100vh">
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<div class="text-center sidebar-brand-wrapper d-flex align-items-center">
			<img src="<?= base_url('file/smk.png') ?>" alt="logo" style="width: 50px; height:50px;margin-left:10px" />
					<a class="sidebar-brand brand-logo-mini pl-4" href="index.html"><img src="<?= base_url('file/smk.png') ?>" alt="logo" /></a>
					<span class="pt-3">SMK 1 Muhammadiyah Temanggung</span>
			</div>
			<hr>
			<ul class="nav">
				<li class="nav-item nav-profile">
					<a href="#" class="nav-link">
						<div class="nav-profile-image">
						<?php if ($this->session->userdata('role')=='alumni') { ?>
									<img src="<?= base_url('assets/images/faces/face1.jpg') ?>" alt="profile" />
									<img class="nav-profile-img mr-2" alt="" src="<?= base_url('file/alumni/') ?>" />
								<?php }elseif ($this->session->userdata('role')=='perusahaan'){ ?>
									<img src="<?= base_url('assets/images/faces/face1.jpg') ?>" alt="profile" />
								<?php }else{?>
									<img src="<?= base_url('file/user.jpeg') ?>" alt="profile" />
								<?php } ?>
							<span class="login-status online"></span>
							<!--change to offline or busy as needed-->
						</div>
						<div class="nav-profile-text d-flex flex-column pr-3">
							<span class="font-weight-medium mb-2"><?= $this->session->userdata('username') ?? "" ?></span>
							<span class="font-weight-normal"><?= $this->session->userdata('role') ?? "" ?></span>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						<i class="mdi mdi-home menu-icon"></i>
						<span class="menu-title">Dashboard</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('admin/user') ?>">
						<i class="mdi mdi-account-multiple menu-icon"></i>
						<span class="menu-title">Users</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/icons/mdi.html">
						<i class="mdi mdi-contacts menu-icon"></i>
						<span class="menu-title">Alumni</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/forms/basic_elements.html">
						<i class="mdi mdi-factory menu-icon"></i>
						<span class="menu-title">Perusahaan</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/tables/basic-table.html">
						<i class="mdi mdi-email-variant menu-icon"></i>
						<span class="menu-title">Lowongan</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/tables/basic-table.html">
						<i class="mdi mdi-email-open menu-icon"></i>
						<span class="menu-title">Lamaran</span>
					</a>
				</li>
				<li class="nav-item sidebar-actions">
					<div class="nav-link">
						<div class="mt-4">
							<ul class="mt-4 pl-0">
								<li>Sign Out</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</nav>
		<div class="container-fluid page-body-wrapper">
			<div id="theme-settings" class="settings-panel">
				<i class="settings-close mdi mdi-close"></i>
				<p class="settings-heading">SIDEBAR SKINS</p>
				<div class="sidebar-bg-options selected" id="sidebar-default-theme">
					<div class="img-ss rounded-circle bg-light border mr-3"></div> Default
				</div>
				<div class="sidebar-bg-options" id="sidebar-dark-theme">
					<div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
				</div>
				<p class="settings-heading mt-2">HEADER SKINS</p>
				<div class="color-tiles mx-0 px-4">
					<div class="tiles light"></div>
					<div class="tiles dark"></div>
				</div>
			</div>
			<nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
				<div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
					<a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
					<button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
						<i class="mdi mdi-menu"></i>
					</button>
					<ul class="navbar-nav navbar-nav-right ml-lg-auto">
						<li class="nav-item nav-profile dropdown border-0">
							<a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
								<?php if ($this->session->userdata('role')=='alumni') { ?>
									<img class="nav-profile-img mr-2" alt="" src="<?= base_url('file/alumni/') ?>" />
								<?php }elseif ($this->session->userdata('role')=='perusahaan'){ ?>
									<img class="nav-profile-img mr-2" alt="" src="<?= base_url('file/alumni/') ?>" />
								<?php }else{	?>
										<img class="nav-profile-img mr-2" alt="" src="<?= base_url('file/user.jpeg') ?>" />
									<?php } ?>
								<span class="profile-name"><?= $this->session->userdata('username') ?? "" ?></span>
							</a>
							<div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
								<a class="dropdown-item" href="#">
									<i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
							</div>
						</li>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
						<span class="mdi mdi-menu"></span>
					</button>
				</div>
			</nav>
		<div class="main-panel">
