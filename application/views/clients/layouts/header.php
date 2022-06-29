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
	@import url("https://fonts.googleapis.com/css2?family=Anek+Malayalam&family=Poppins&display=swap");

	body{
		font-family: 'Anek Malayalam', sans-serif;
		font-family: 'Poppins', sans-serif;
	}
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
	#text-desc {
	overflow: hidden;
	text-overflow: ellipsis;
	display: -webkit-box;
	-webkit-line-clamp: 12; /* number of lines to show */
	-webkit-box-orient: vertical;
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
		<?php 
			$perusahaan_id = $this->db->where('id_user',$this->session->userdata('id_user'))->get('perusahaan')->row();
			if ($this->session->userdata('role')=='perusahaan') { ?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('lowongan/index/'.$perusahaan_id->id_perusahaan) ?>">Lowongan</a>
			</li>
		<?php } else { ?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('homepage/lowongan') ?>">Lowongan</a>
			</li>
		<?php } ?>
		<?php if ($this->session->userdata('id_user') != null && $this->session->userdata('role')!='perusahaan' && $this->session->userdata('role') !='admin' ) { ?>
			<?php $alumni=$this->db
			->join("user","user.id_user=alumni.id_user")
			->where("alumni.id_user",$this->session->userdata("id_user"))
			->get("alumni")
			->row()
			->id_alumni ?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('lamaran/index/'.$alumni) ?>">Lamaran Anda</a>
			</li>
		<?php } ?>
		<?php if ($this->session->userdata('id_user') == null or $this->session->userdata('role')!='perusahaan') { ?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('homepage/mitra') ?>">Mitra</a>
			</li>
		<?php }?>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
			<img src="<?php echo base_url('file/smk.png') ?>" width="50px" alt="" style="">
			<span style="color:#fff;text-align:center" >SMK Muhammadiyah 1 Temanggung</span>
			<span class="dropdown">
					<button class="btn btn-primary ml-2 dropdown-toggle" type="button" id="dropdownMenuButtonUserProfile" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="nav-icon fas fa-user"></i> 
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonUserProfile">
					<?php if($this->session->userdata('role') == 'alumni') { ?>
						<li><a class="dropdown-item" href="<?php echo base_url('alumni/index') ?>">Profile</a></li>
						<li><a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>">Keluar</a></li>
					<?php }elseif($this->session->userdata('role') == 'perusahaan'){?>
						<li><a class="dropdown-item" href="<?php echo base_url('perusahaan/index') ?>">Profile</a></li>
						<li><a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>">Keluar</a></li>
					<?php }elseif($this->session->userdata('role') == 'admin'){?>
						<li><a class="dropdown-item" href="<?php echo base_url('perusahaan/index') ?>">Dashboard</a></li>
						<li><a class="dropdown-item" href="<?php echo base_url('admin/index') ?>">Keluar</a></li>
					<?php }
					else{?>
							<li><a class="dropdown-item" href="<?php echo base_url('auth/index') ?>"><i class="nav-icon fas fa-sign-in-alt"></i> Masuk</a></li>
							
					<?php } ?>
					</ul>
				</span>
			
            </li>
         <li>
		 
		 </li>
        </ul>
    </div>
   </div>
</nav>
