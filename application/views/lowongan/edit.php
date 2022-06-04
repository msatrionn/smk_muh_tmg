	
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data lowongan</h1>
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
				<form action="<?php echo base_url('lowongan/update') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nama">Judul</label>
					<input type="text" class="form-control" name="judul"  value="<?php echo $lowongan->judul ?>">
					<input type="hidden" class="form-control" name="id"  value="<?php echo $lowongan->id_lowongan ?>">
					<input type="hidden" class="form-control" name="id_perusahaan"  value="<?php echo $lowongan->id_perusahaan ?>">
				</div>
				<div class="form-group">
					<label for="alamat">Deskripsi</label>
					<textarea name="deskripsi" id="" class="form-control" cols="30" rows="10"><?php echo $lowongan->deskripsi ?></textarea>
				</div>
			
				<div class="form-group">
					<button class="btn btn-success" type="submit">Submit</button>
				</div>

		</form>
				</div>
            </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <script src="<?php echo base_url('assets/tinymce/js/tinymce/tinymce.min.js');?>"></script>
  <script>tinymce.init({ selector:'textarea' });</script>    
 
 