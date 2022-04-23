<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url("assets/plugins/fontawesome-free/css/all.min.css") ;?>">

    <title>SMK Muhammadiyah 1 Temanggung</title>
  </head>
  <style>
	  .ml2 {
	font-weight: 900;
	font-size: 3.5em;
	width:100%;
	text-align: center;
	color:white;
	position:absolute;
	z-index:2;
	margin-top:17%;
	}
	.txt{
	width:100%;
	text-align: center;
	color:white;
	position:absolute;
	z-index:2;
	margin-top:13%;
	}

	.ml2 .letter {
	display: inline-block;
	line-height: 1em;
	}
  </style>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark " style="background: #0d8c71;">
   <div class="container">
	   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
		   <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('homepage/index') ?>">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('homepage/tentang_kami') ?>">Tentang Kami</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('homepage/struktur') ?>">Struktur Organisasi</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('homepage/lowongan') ?>">Lowongan</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('homepage/mitra') ?>">Mitra</a>
		</li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
			<img src="<?php echo base_url('file/smk.png') ?>" width="50px" alt="" style="">
			<span style="color:#fff;text-align:center" >SMK Muhammadiyah 1 Temanggung</span>
			<?php if($this->session->userdata('role') == 'alumni') { ?>
					<a href="<?php echo base_url('alumni/index') ?>" class="btn btn-success ml-2"><i class="nav-icon fas fa-dashboard"></i> Dashboard</a>
			<?php }elseif($this->session->userdata('role') == 'admin'){?>
					<a href="<?php echo base_url('admin/index') ?>" class="btn btn-success ml-2"><i class="nav-icon fas fa-sign-in-alt"></i> Dashboard</a>
			<?php }else{?>
					<a href="<?php echo base_url('auth/index') ?>" class="btn btn-success ml-2"><i class="nav-icon fas fa-sign-in-alt"></i> Login</a>
			<?php } ?>
            </li>
         <li>
		 
		 </li>
        </ul>
    </div>
   </div>
</nav>
