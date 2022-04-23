  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Berita</h1>
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
				<form action="<?php echo base_url('post/save') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Judul</label>
						<input type="text" class="form-control" required name="judul">
					</div>
					<div class="form-group">
						<label for="">Deskripsi</label>
						<input type="text" class="form-control" required name="deskripsi">
					</div>
					<div class="form-group">
						<label for="">foto</label>
						<input type="file" required name="foto_post" class="form-control"></a>
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
 
 