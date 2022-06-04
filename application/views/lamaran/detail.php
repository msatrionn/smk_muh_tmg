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
	<div class="container">
		<div class="row" style="display: flex;justify-content: space-between;">
			<div class="col-md-12 shadows pt-2 mt-4">
			<div class="row">
				<div class="col-md-7">
					<h4><?= $lowongan->judul ?></h4>
					<span><?= $lowongan->nama_perusahaan ?></span>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-3">
					<?php if ($lowongan == null) {?>
					<label for="">Input CV</label>
					<form action="<?php echo base_url('lamaran/simpan') ?>" method="post" enctype="multipart/form-data">
					<input type="file" name="cv" class="form-control col-md-12"></a>
					<?php }else{ ?>
						Status:
						<div class="alert-info">
							<?= $lowongan->hasil ?>
						</div>
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
			<?php if ($lowongan!=null) {?>
				<div class="mt-4 my-4 col-md-12 text-center"><i>Sudah dilamar</i></div>
			<?php } ?>
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
