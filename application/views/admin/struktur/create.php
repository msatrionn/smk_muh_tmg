
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data</h1>
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
				<form action="<?php echo base_url('struktur/save') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="pengurus">Pengurus</label>
						<input type="text" class="form-control" required name="pengurus">
					</div>
					<div class="form-group">
						<label for="jabatan">Jabatan</label>
						<input type="text" class="form-control" required name="jabatan">
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
 