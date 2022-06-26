<div class="content-wrapper pb-0">
	<div class="page-header flex-wrap">
		<h3>Tabel User</h3>
	</div>
	<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped" id="tables">
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
              </div>
</div>
					
