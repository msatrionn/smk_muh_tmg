
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Struktur Organisasi</h1>
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
										<h3 class="card-title">Struktur Organisasi</h3>
									</div>
									<div class="col-md-7"></div>
									<div class="col-md-2">
										<a href="<?php echo base_url('struktur/tambah_struktur') ?>" class="btn btn-success">Tambah</a>
									</div>
								</div>
						</div>
              <!-- /.card-header -->
              <div class="card-body">
								
							<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengurus</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
					
					<?php 
					$i=1;
					foreach ($struktur as $key => $value) {
						?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $value->pengurus ?></td>
							<td><?php echo $value->jabatan ?></td>
							<td>
								<a href="<?php echo base_url('struktur/edit_struktur/'.$value->id) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
								<a href="<?php echo base_url('struktur/deleted_struktur/'.$value->id) ?>" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus?');"><i class="fa fa-trash"></i></a>
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
 