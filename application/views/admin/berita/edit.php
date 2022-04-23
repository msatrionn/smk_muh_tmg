    <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Berita</h1>
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
				<form action="<?php echo base_url('post/update_post') ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Judul</label>
				<input type="text" class="form-control col-md-5" name="judul" value="<?php echo $post->judul ?>">
				<input type="hidden" class="form-control col-md-5" name="id" value="<?php echo $post->id ?>">
			</div>
			<div class="form-group">
				<label for="">Deskripsi</label>
				<input type="text" class="form-control col-md-5" name="deskripsi" value="<?php echo $post->deskripsi ?>">
			</div>
			<div class="form-group">
				<label for="">foto</label>
				<br>
				<input type="hidden" name="foto_new_post" id="" value="<?php echo $post->foto ?>">
				<img src="<?php echo base_url('/file/news/'.$post->foto) ?>" width="100px" alt="">
				<input type="file" name="foto_post" class="form-control col-md-5" value="<?php echo $post->foto ?>"></a>
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
 
 