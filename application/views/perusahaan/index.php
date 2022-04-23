
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Perusahaan</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
			<div class="card">
              <div class="card-header">
								<div class="row">
									<div class="col-md-3">
										<h3 class="card-title">Tabel Perusahaan</h3>
									</div>
									<div class="col-md-7"></div>
									<div class="col-md-2">
										<a href="<?php echo base_url('perusahaan/create_view') ?>" class="btn btn-success">Tambah Perusahaan</a>
									</div>
								</div>
						</div>
              <!-- /.card-header -->
              <div class="card-body">
								
							<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Foto</th>
                <th>Nomor Telp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
					
					<?php 
					$i=1;
					foreach ($perusahaan as $key => $value) {
						?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $value->nama_perusahaan ?></td>
							<td><?php echo $value->alamat_perusahaan ?></td>
							<td><img src="<?php echo base_url("file/perusahaan/".$value->foto_perusahaan) ?>" alt="" width="200px"></td>
							<td><?php echo $value->no_telp_perusahaan ?></td>
							<td>
								<a href="<?php echo base_url('perusahaan/edit_view/'.$value->id_perusahaan) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
								<a href="<?php echo base_url('perusahaan/deleted_data/'.$value->id_perusahaan) ?>" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus?');"><i class="fa fa-trash"></i></a>
							</td>
          </tr>
					<?php 
				$i++;
				} ?>
                
        </tbody>
		</table>  
		</div>
            </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
 