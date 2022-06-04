
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data user</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
		<div class="container-fluid pt-4 py-4">
			<div class="row">
				<div class="col-md-4">
				<img src="<?php echo base_url('file/11.jpeg') ?>" width="100%" alt="">
				</div>
				<div class="col-md-8">
					<?php if ($user->role=='alumni') {?>
						Role:Alumni
						<h1><?php echo $alumni->nama_alumni ?? "-" ?></h1>
						<span style="font-size:20px"><?php echo $alumni->alamat_alumni ?? "-" ?></span>
						<br>
						<span style="font-size:20px">Telp:<?php echo $alumni->no_hp ?? "-" ?></span>
						<br>
						<br>
					<?php }elseif ($user->role=='perusahaan') {?>
						Role:Perusahaan
						<h1><?php echo $perusahaan->nama_perusahaan ?? "-" ?></h1>
						<span style="font-size:20px"><?php echo $alumni->alamat_perusahaan ?? "-" ?></span>
						<br>
						<span style="font-size:20px">Telp:<?php echo $alumni->no_telp_perusahaan ?? "-" ?></span>
						<br>
						<br>
					
					<?php } ?>
				</div>
			</div>
		</div>
    </section>
    <!-- /.content -->
  </div>

