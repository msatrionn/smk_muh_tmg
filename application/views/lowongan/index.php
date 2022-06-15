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
<img src="<?php echo base_url('file/11.jpeg') ?>" width="100%" height="400px" style="object-fit: cover;" alt="">

<h1 class="text-center mt-4 my-4">Lowongan</h1>
	<div class="container">
		<a href="<?= base_url("lowongan/create_view") ?>" class="btn btn-success">Tambah Lowongan</a>
		<div class="">
			<div class="row" style="display: flex;justify-content: space-between;">
			<?php foreach ($lowongan as $key => $value) { ?>
				<div class="col-md-5 shadows pt-2 mt-4" style="min-width: 540px;">
					<div class="row">
						<div class="col-md-5">
							<img src="<?php echo base_url('file/perusahaan/'.$value->foto_perusahaan) ?>" width="100%" alt="">
						</div>
						<div class="col-md-7">
							<h4><?= $value->judul ?></h4>
							<span><?= $value->nama_perusahaan ?></span>
						</div>
					</div>
				<div class="row">
					<div class="col-md-12 mt-3 text-desc">
						<?= $value->deskripsi ?>
					</div>
				</div>
				<div class="row pr-3 py-3">
					<div class="col-md-4">
					<span><i style="font-size: 12px;">
					<?php echo $value->created_at_lowongan ?></i></span>
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-4">
					<div class="row">
						<div class="col-md-4">
							<a href="<?php echo base_url('lowongan/edit_view/'.$value->id_lowongan) ?>" class="btn btn-primary">Edit</a>
						</div>
						<div class="col-md-4">
							<a href="<?php echo base_url('homepage/lowongan_detail/'.$value->id_lowongan) ?>" class="btn btn-success">Lihat</a>
						</div>
					</div>
					</div>
				</div>
			</div>

			<?php } ?>
		</div>
	</div>
</section>
