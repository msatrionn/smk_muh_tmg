    <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Perusahaan</h1>
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
				<form action="<?php echo base_url('struktur/update_struktur') ?>" method="post" >
				<div class="form-group">
					<label for="nama">Nama Pengurus</label>
					<input type="text" class="form-control" name="pengurus"  value="<?php echo $struktur->pengurus ?>">
					<input type="hidden" class="form-control" name="id"  value="<?php echo $struktur->id ?>">
				</div>
				<div class="form-group">
					<label for="jabatan">Jabatan</label>
					<input type="text" class="form-control" name="jabatan"  value="<?php echo $struktur->jabatan ?>">
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
 
 