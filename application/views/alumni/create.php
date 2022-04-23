
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Alumni</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
			<div class="card">
				<div class="container mt-4">
				<form action="<?php echo base_url('Alumni/save') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" required name="nama">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" required name="alamat">
					</div>
					<div class="form-group">
						<label for="alamat">No Hp</label>
						<input type="text" class="form-control" required name="no_hp">
					</div>
					<div class="form-group">
						<label for="">foto alumni</label>
						<input type="file" required name="foto_alumni" class="form-control"></a>
					</div>
					<div class="form-group">
						<button class="form-control btn btn-success col-md-3">Simpan</button>
					</div>
				</form>
				</div>
            </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
 