    <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Alumni</h1>
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
				<form action="<?php echo base_url('alumni/update') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama"  value="<?php echo $alumni->nama_alumni ?>">
					<input type="hidden" class="form-control" name="id"  value="<?php echo $alumni->id_alumni ?>">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" class="form-control" name="alamat"  value="<?php echo $alumni->alamat_alumni ?>">
				</div>
				<div class="form-group">
					<label for="alamat">No Hp</label>
					<input type="text" class="form-control" name="no_hp"  value="<?php echo $alumni->no_hp ?>">
				</div>
				<div class="form-group">
					<label for="">foto</label>
					<br>
					<input type="hidden" name="foto_new_alumni" id="" value="<?php echo $alumni->foto_alumni ?>">
					<img src="<?php echo base_url("file/alumni/".$alumni->foto_alumni) ?>" alt="" width="200px">
					<input type="file" name="foto_alumni" class="form-control col-md-5" value="<?php echo $alumni->foto_alumni ?>"></a>
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
 
 