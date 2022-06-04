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

button.profile {
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

button.profile:hover, a.profile:hover {
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
	<div class="card">
		<div class="container mt-4">
			<?php if ($this->session->userdata('role')== 'alumni') {?>
				<form action="<?php echo base_url('alumni/update') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama"  value="<?php echo $alumni->nama_alumni ?>">
						<input type="hidden" class="form-control" name="id"  value="<?php echo $alumni->id_alumni ?>">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" name="alamat"  value="<?php echo $alumni->alamat_alumni ?>">
					</div>
					<div class="form-group">
						<label for="alamat">No Hp</label>
						<input type="text" class="form-control" name="no_hp"  value="<?php echo $alumni->no_hp ?>">
					</div>
					<div class="form-group">
						<label for="">foto</label>
						<br>
						<input type="hidden" name="foto_new_alumni" id="" value="<?php echo $alumni->foto_alumni ?>">
						<img src="<?php echo base_url("file/alumni/".$alumni->foto_alumni) ?>" alt="" width="200px">
						<input type="file" name="foto_alumni" class="form-control col-md-5" value="<?php echo $alumni->foto_alumni ?>"></a>
					</div>		
					<div class="form-group">
						<button class="btn btn-success" type="submit">Submit</button>
					</div>
				</form>
			<?php }elseif($this->session->userdata('role')== 'perusahaan') {?>
				<form action="<?php echo base_url('perusahaan/update') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama"  value="<?php echo $perusahaan->nama_perusahaan ?>">
					<input type="hidden" class="form-control" name="id"  value="<?php echo $perusahaan->id_perusahaan ?>">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" class="form-control" name="alamat"  value="<?php echo $perusahaan->alamat_perusahaan ?>">
				</div>
				<div class="form-group">
					<label for="alamat">No Hp</label>
					<input type="text" class="form-control" name="no_telp"  value="<?php echo $perusahaan->no_telp_perusahaan ?>">
				</div>
				<div class="form-group">
					<label for="">foto</label>
					<br>
					<input type="hidden" name="foto_new_perusahaan" id="" value="<?php echo $perusahaan->foto_perusahaan ?>">
					<img src="<?php echo base_url("file/perusahaan/".$perusahaan->foto_perusahaan) ?>" alt="" width="200px">
					<input type="file" name="foto_perusahaan" class="form-control col-md-5" value="<?php echo $perusahaan->foto_perusahaan ?>"></a>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">Submit</button>
				</div>
			</form>
			<?php }?>
		</div>
    </div>
</section>
