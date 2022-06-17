<style>
	.shadows{
    box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    transition: all .55s ease-in-out;
  
	}
</style>
<section class="mitra" style="min-height: 500px;">
<img src="<?php echo base_url('file/11.jpeg') ?>" width="100%" height="400px" style="object-fit: cover;" alt="">

	<h1 class="mt-4 my-4 text-center" >Berikut Mitra Kami</h1>
	<div class="container">
		<div class="row">
			<?php foreach($mitra as $key => $value) { ?>
			<div class="col-md-4 mt-4" style="text-align: center;">
				<img src="<?= base_url('file/perusahaan/'.$value->foto_perusahaan) ?>" width="100%" height="230px" style="object-fit: cover;" alt="">
				<button class="btn btn-success my-3"  type="button" data-toggle="collapse" data-target="#multiCollapseExample<?= $value->id_perusahaan ?>" aria-expanded="false" aria-controls="multiCollapseExample1"><?= $value->nama_perusahaan ?></button>
				<div class="collapse multi-collapse" id="multiCollapseExample<?= $value->id_perusahaan ?>">
					<div class="card card-body">
					<?= $value->deskripsi_perusahaan ?>
					</div>
				</div>
			</div>
			<?php } ?>
			<!-- <div class="col-md-4 mt-4" style="text-align: center;">
				<img src="<?php echo base_url('file/11.jpeg') ?>" width="100%" alt="">
				<button class="btn btn-success my-3"  type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
				<div class="collapse multi-collapse" id="multiCollapseExample2">
					<div class="card card-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</div>
				</div>
			</div>
			<div class="col-md-4 mt-4" style="text-align: center;">
				<img src="<?php echo base_url('file/11.jpeg') ?>" width="100%" alt="">
				<button class="btn btn-success my-3"  type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Toggle second element</button>
				<div class="collapse multi-collapse" id="multiCollapseExample3">
					<div class="card card-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</div>
				</div>
			</div>
			<div class="col-md-4 mt-4" style="text-align: center;">
				<img src="<?php echo base_url('file/11.jpeg') ?>" width="100%" alt="">
				<button class="btn btn-success my-3"  type="button" data-toggle="collapse" data-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Toggle second element</button>
				<div class="collapse multi-collapse" id="multiCollapseExample4">
					<div class="card card-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</div>
				</div>
			</div> -->
		</div>
		<div class="row">
			
		</div>
	</div>
</section>
