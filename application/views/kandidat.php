<section class="struktur">
	<img src="<?php echo base_url('file/11.jpeg') ?>" width="100%" height="400px" style="object-fit: cover;" alt="">
	<h1 style="text-align: center;" class="mt-4 my-4">Kandidat</h1>
	<div class="container">
	<table class="table" style="text-align: center;">
		<tr>
			<th>No</th>
			<th>Nama Kandidat</th>
			<th>Keterangan</th>
			<th>CV</th>
			<th style="width: 30%;">Hasil Seleksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($hasil as $key => $value){ ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $value->nama_alumni; ?></td>
				<td><?= $value->keterangan_kandidat; ?></td>
				<td><a href="<?php echo base_url("file/cv/".$value->cv) ;?>">Download CV</a></td>
				<td>
					<form action="<?php echo base_url('hasil/update_hasil/'.$value->id_lamaran) ?>"method="POST">
						<div class="row">
						<div class="col-md-8">
						<select name="hasil" class="form-control ">
							<?php if ($value->hasil=="Sedang direview perusahaan") { ?>
								<option selected value="Sedang direview perusahaan">Sedang direview perusahaan</option>
								<option value="Perusahaan tertarik dengan anda">Perusahaan tertarik dengan anda</option>
								<option value="Sedang menjalankan ujian">Sedang menjalankan ujian</option>
								<option value="Selamat, anda diterima">Selamat, anda diterima</option>
								<option value="Maaf, Kami tidak dapat melanjutkan lamaran anda">Maaf, Kami tidak dapat melanjutkan lamaran anda</option>
								<option value="Maaf, Kamu kurang cocok dengan perusahaan kami">Maaf, Kamu kurang cocok dengan perusahaan kami</option>
								<option value="Maaf, anda gagal mendaftar diperusahaan kami">Maaf, anda gagal mendaftar diperusahaan kami</option>
							<?php }elseif($value->hasil=="Perusahaan tertarik dengan anda") { ?>
								<option selected value="Perusahaan tertarik dengan anda">Perusahaan tertarik dengan anda</option>
								<option value="Sedang menjalankan ujian">Sedang menjalankan ujian</option>
								<option value="Selamat, anda diterima">Selamat, anda diterima</option>
								<option value="Maaf, Kami tidak dapat melanjutkan lamaran anda">Maaf, Kami tidak dapat melanjutkan lamaran anda</option>
								<option value="Maaf, Kamu kurang cocok dengan perusahaan kami">Maaf, Kamu kurang cocok dengan perusahaan kami</option>
								<option value="Maaf, anda gagal mendaftar diperusahaan kami">Maaf, anda gagal mendaftar diperusahaan kami</option>
							<?php }elseif($value->hasil=="Sedang menjalankan ujian") { ?>
								<option selected value="Sedang menjalankan ujian">Sedang menjalankan ujian</option>
								<option value="Perusahaan tertarik dengan anda">Perusahaan tertarik dengan anda</option>
								<option value="Selamat, anda diterima">Selamat, anda diterima</option>
								<option value="Maaf, Kami tidak dapat melanjutkan lamaran anda">Maaf, Kami tidak dapat melanjutkan lamaran anda</option>
								<option value="Maaf, Kamu kurang cocok dengan perusahaan kami">Maaf, Kamu kurang cocok dengan perusahaan kami</option>
								<option value="Maaf, anda gagal mendaftar diperusahaan kami">Maaf, anda gagal mendaftar diperusahaan kami</option>
							<?php }elseif($value->hasil=="Selamat, anda diterima") { ?>
								<option selected value="Selamat, anda diterima">Selamat, anda diterima</option>
								<option value="Perusahaan tertarik dengan anda">Perusahaan tertarik dengan anda</option>
								<option value="Sedang menjalankan ujian">Sedang menjalankan ujian</option>
								<option value="Maaf, Kami tidak dapat melanjutkan lamaran anda">Maaf, Kami tidak dapat melanjutkan lamaran anda</option>
								<option value="Maaf, Kamu kurang cocok dengan perusahaan kami">Maaf, Kamu kurang cocok dengan perusahaan kami</option>
								<option value="Maaf, anda gagal mendaftar diperusahaan kami">Maaf, anda gagal mendaftar diperusahaan kami</option>
							<?php }elseif($value->hasil=="Maaf, Kami tidak dapat melanjutkan lamaran anda") { ?>
								<option selected value="Maaf, Kami tidak dapat melanjutkan lamaran anda">Maaf, Kami tidak dapat melanjutkan lamaran anda</option>
								<option value="Perusahaan tertarik dengan anda">Perusahaan tertarik dengan anda</option>
								<option value="Sedang menjalankan ujian">Sedang menjalankan ujian</option>
								<option value="Selamat, anda diterima">Selamat, anda diterima</option>
								<option value="Maaf, Kamu kurang cocok dengan perusahaan kami">Maaf, Kamu kurang cocok dengan perusahaan kami</option>
								<option value="Maaf, anda gagal mendaftar diperusahaan kami">Maaf, anda gagal mendaftar diperusahaan kami</option>
							<?php }elseif($value->hasil=="Maaf, Kamu kurang cocok dengan perusahaan kami") { ?>
								<option selected value="Maaf, Kamu kurang cocok dengan perusahaan kami">Maaf, Kamu kurang cocok dengan perusahaan kami</option>
								<option value="Perusahaan tertarik dengan anda">Perusahaan tertarik dengan anda</option>
								<option value="Sedang menjalankan ujian">Sedang menjalankan ujian</option>
								<option value="Selamat, anda diterima">Selamat, anda diterima</option>
								<option value="Maaf, Kami tidak dapat melanjutkan lamaran anda">Maaf, Kami tidak dapat melanjutkan lamaran anda</option>
								<option value="Maaf, anda gagal mendaftar diperusahaan kami">Maaf, anda gagal mendaftar diperusahaan kami</option>
							<?php }elseif($value->hasil=="Maaf, anda gagal mendaftar diperusahaan kami") { ?>
							<option selected value="Maaf, anda gagal mendaftar diperusahaan kami">Maaf, anda gagal mendaftar diperusahaan kami</option>
							<option value="Perusahaan tertarik dengan anda">Perusahaan tertarik dengan anda</option>
								<option value="Sedang menjalankan ujian">Sedang menjalankan ujian</option>
								<option value="Selamat, anda diterima">Selamat, anda diterima</option>
								<option value="Maaf, Kami tidak dapat melanjutkan lamaran anda">Maaf, Kami tidak dapat melanjutkan lamaran anda</option>
								<option value="Maaf, Kamu kurang cocok dengan perusahaan kami">Maaf, Kamu kurang cocok dengan perusahaan kami</option>
							<?php } ?>
						</select>
						</div>
						<div class="col-md-2">
							<button type="submit" class="btn btn-success" onclick="return confirm('Anda yakin merubah status?');">Submit</button>
						</div>
						</div>
					</form>
				</td>
			</tr>
		<?php 
		$no++;
		} 
		?>
	</table>
	</div>
</section>
