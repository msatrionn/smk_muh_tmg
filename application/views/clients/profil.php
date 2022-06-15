<style>
.card-profile {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
}

.title-profile {
  color: grey;
  font-size: 18px;
}

a.profile-button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a.profile {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

a.profile-button:hover, a.profile:hover {
  opacity: 0.7;
}
	.shadows{
    box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    transition: all .55s ease-in-out;
  
	}
</style>

<section class="mitra" style="min-height: 500px;">
<img src="<?php echo base_url('file/11.jpeg') ?>" width="100%" height="400px" style="object-fit: cover;" alt="">

	<h1 class="mt-4 my-4 text-center" >Profil </h1>
	<div class="container-fluid">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<div class="card-profile">
					<?php if ($this->session->userdata('role')=='alumni') {?>
						<?php $foto=$alumni->foto_alumni ?? "" ?>
						<img src="<?= base_url('file/alumni/'.$foto) ?>" alt="John" style="width:100%">
						
						<h1><?= $alumni->nama_alumni ?></h1>
						<p class="title-profile">Alumni SMK Muhammadiyah 1 Temanggung</p>
						<p><?= $alumni->no_hp ?></p>
						<a href="#" class="profile"><i class="fa fa-dribbble"></i></a>
						<a href="#" class="profile"><i class="fa fa-twitter"></i></a>
						<a href="#" class="profile"><i class="fa fa-linkedin"></i></a>
						<a href="#" class="profile"><i class="fa fa-facebook"></i></a>
						<p><a href="<?php echo base_url('alumni/edit_view/'.$alumni->id_alumni) ?>" class="profile-button">Update Profil</a></p>
						<p><a href="<?php echo base_url('lamaran/index/'.$alumni->id_alumni) ?>" class="profile-button" style="background:#4287f5;">Lihat Lamaran</a></p>
					
					<?php }elseif($this->session->userdata('role')=='perusahaan') {?>
						<img src="<?= base_url('file/perusahaan/'.$perusahaan->foto_perusahaan) ?>" alt="John" style="width:100%">
						<h1><?= $perusahaan->nama_perusahaan ?></h1>
						<p class="title-profile">Mitra SMK Muhammadiyah 1 Temanggung</p>
						<p><?= $perusahaan->no_telp_perusahaan ?></p>
						<a href="#" class="profile"><i class="fa fa-dribbble"></i></a>
						<a href="#" class="profile"><i class="fa fa-twitter"></i></a>
						<a href="#" class="profile"><i class="fa fa-linkedin"></i></a>
						<a href="#" class="profile"><i class="fa fa-facebook"></i></a>
						<p><a href="<?php echo base_url('perusahaan/edit_view/'.$perusahaan->id_perusahaan) ?>" class="profile-button">Update Profil</a></p>
						<p><a href="<?php echo base_url('lowongan/index/'.$perusahaan->id_perusahaan) ?>" class="profile-button" style="background:#4287f5;">Lowongan Anda</a></p>
					<?php } ?>
				</div>
      </div>
</section>
