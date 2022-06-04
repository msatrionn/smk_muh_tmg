

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Alumni</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<div class="card">
					<img src="<?= base_url('file/alumni/'.$alumni->foto_alumni) ?>" alt="John" style="width:100%">
					<h1><?= $alumni->nama_alumni ?></h1>
					<p class="title">Alumni SMK Muhammadiyah 1 Temanggung</p>
					<p><?= $alumni->no_hp ?></p>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<p><button>Update Profil</button></p>
				</div>
      </div>
    </section>
    <!-- /.content -->
  </div>
 