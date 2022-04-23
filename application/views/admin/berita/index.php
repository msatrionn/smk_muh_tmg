
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data berita</h1>
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
										<h3 class="card-title">Tabel berita</h3>
									</div>
									<div class="col-md-7"></div>
									<div class="col-md-2">
										<a href="<?php echo base_url('post/create_view') ?>" class="btn btn-success">Tambah berita</a>
									</div>
								</div>
						</div>
              <!-- /.card-header -->
              <div class="card-body">
								
							<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
					
					<?php 
					$i=1;
					foreach ($post as $key => $value) {
						?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $value->judul ?></td>
							<td><?php echo $value->deskripsi ?></td>
							<td><img src="<?php echo base_url('file/news/'.$value->foto) ?>" alt="" srcset="" width="50px"></td>
							<td>
								<a href="<?php echo base_url('post/edit_view/'.$value->id) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
								<a href="<?php echo base_url('post/delete_post/'.$value->id) ?>" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus?');"><i class="fa fa-trash"></i></a>
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
 