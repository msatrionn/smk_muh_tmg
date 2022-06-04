<style>
	.shadows{
    box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    transition: all .55s ease-in-out;
  
	}
	.text-desc{
		white-space: nowrap; 
		width: 100%; 
		overflow: hidden;
		text-overflow: ellipsis; 
	}
</style>
<section class="lowongan" style="min-height: 500px;">
<img src="<?php echo base_url('file/perusahaan/'.$lowongan->foto_perusahaan) ?>" width="100%" height="400px" style="object-fit: cover;" alt="">

	<h1 class="text-center mt-4 my-4">Lowongan</h1>
	<div class="container">
		<div class="">
			<div class="row" style="display: flex;justify-content: space-between;">
				<div class="col-md-12 shadows pt-2 mt-4">
				<div class="row">
					<div class="col-md-7">
						<h4><?= $lowongan->judul ?></h4>
						<span><?= $lowongan->nama_perusahaan ?></span>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<?php if ($this->session->userdata('role')=='alumni' && $lamaran == null) {?>
							<label for="">Input CV</label>
							<form action="<?php echo base_url('lamaran/simpan') ?>" method="post" enctype="multipart/form-data">
							<input type="file" name="cv" class="form-control col-md-12"></a>
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<span><i style="font-size: 12px;"><?php echo $lowongan->created_at_lowongan ?></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 mt-3 my-4 text-desc">
						<?= $lowongan->deskripsi ?>
					</div>
				</div>
				<?php if ($this->session->userdata('role')=='alumni' && $lamaran == null) {?>
					<textarea class="form-control col-md-12" name="isi_lamaran" id="isid" rows="4" placeholder="Deskripsikan tentang anda" maxlength="500"></textarea>
					(<span class="jumlah">0</span>/500)
					<div class="row"  style="width: 100%; display:flex;justify-content:center">
						<div class="col-md-4">
							<input type="hidden" name="alumni" value="<?php echo $this->session->userdata('id_user') ?>">
							<input type="hidden" name="lowongan" value="<?php echo $lowongan->id_lowongan ?>">
							<button type="submit" class="btn btn-primary mt-4 my-4 col-md-12">Lamar</a>
						</div>
					</form>
				</div>
				<?php }elseif($this->session->userdata('role')=='alumni' && $lamaran != null){ ?>
					<hr class="mt-3 my-3">
					Lamaran yang dikirim
					<p>CV</p>
					Keterangan : <?php echo $lamaran->keterangan_kandidat ?>
					<div class="mt-4 my-4 col-md-12 text-center">
						<div class="mt-4 my-4 col-md-12 text-center"><i>Sudah dilamar</i></div>
					</div>
					<?php }elseif($this->session->userdata('role')=='perusahaan' && $lamaran != null){ ?>
						<div class="mt-4 my-4 col-md-12 text-center">
							<a href="<?php echo base_url('hasil/index') ?>" class="btn btn-primary">Lihat Kandidat</a>
						</div>
					<?php }elseif($this->session->userdata('role')=='admin'){ ?>
						<div class="mt-4 my-4 col-md-12 text-center">
							<h2 class="alert-info">Admin tidak dapat melamar</h2>
						</div>
					<?php }else{ ?>
						<div class="mt-4 my-4 col-md-12 text-center">
							<a href="<?php echo base_url('auth/index') ?>" class="btn btn-primary">Login untuk melamar</a>
						</div>
						<?php }?>
			</div>
		</div>
	</div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
	$("#isid").on("keyup", function() {
		var total= $(this).val().length;
		$('.jumlah').html(total)
	});
</script>
