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
				<form action="<?php echo base_url('perusahaan/update') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama"  value="<?php echo $perusahaan->nama_perusahaan ?>">
					<input type="hidden" class="form-control" name="id"  value="<?php echo $perusahaan->id_perusahaan ?>">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" class="form-control" name="alamat"  value="<?php echo $perusahaan->alamat_perusahaan ?>">
				</div>
				<div class="form-group">
					<label for="alamat">No Hp</label>
					<input type="text" class="form-control" name="no_telp"  value="<?php echo $perusahaan->no_telp_perusahaan ?>">
				</div>
				<div class="form-group">
					<label for="">foto</label>
					<br>
					<input type="hidden" name="foto_new_perusahaan" id="" value="<?php echo $perusahaan->foto_perusahaan ?>">
					<img src="<?php echo base_url("file/perusahaan/".$perusahaan->foto_perusahaan) ?>" alt="" width="200px">
					<input type="file" name="foto_perusahaan" class="form-control col-md-5" value="<?php echo $perusahaan->foto_perusahaan ?>"></a>
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
 
 