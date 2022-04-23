<section class="struktur">
	<img src="<?php echo base_url('file/11.jpeg') ?>" width="100%" height="400px" style="object-fit: cover;" alt="">
	<h1 style="text-align: center;" class="mt-4 my-4">Struktur Organisasi</h1>
	<div class="container">
	<table class="table" style="text-align: center;">
		<tr>
			<th>No</th>
			<th>Pengurus</th>
			<th>Jabatan</th>
		</tr>
		<?php 
		$no = 1;
		foreach($struktur as $key => $value){ ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $value->pengurus; ?></td>
				<td><?= $value->jabatan; ?></td>
			</tr>
		<?php 
		$no++;
		} 
		?>
	</table>
	</div>
</section>
