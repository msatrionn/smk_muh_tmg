
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data user</h1>
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
										<h3 class="card-title">Tabel user</h3>
									</div>
									<div class="col-md-7"></div>
								</div>
						</div>
              <!-- /.card-header -->
              <div class="card-body">
								
							<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
					
				<?php 
					$i=1;
					foreach ($user as $key => $value) {
						?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $value->nama_user ?? "" ?></td>
							<td><?php echo $value->username ?? "" ?></td>
							<td><?php echo $value->role ?? "" ?></td>
							<td>
								<a href="<?php echo base_url('admin/user_detail/'.$value->id_user ?? "") ?>" class="btn btn-primary">Detail</a>
							</td>
							<!-- <td><img src="<?php echo base_url("file/user/".$value->foto_user ?? "") ?>" alt="" width="200px"></td> -->
							<!-- <td><?php echo $value->no_hp ?? "" ?></td> -->
						
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
 