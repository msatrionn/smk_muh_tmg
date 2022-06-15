<h1>Latian 1</h1>

<div class="container">
	<a href="<?= base_url("latian/create") ?>">create</a>
	<table class="table">
		<tr>
			<th>Nomor</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>no HP</th>
		</tr>
		<?php
		$no =1;
		foreach ($datadiri as $key => $value) {
		?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $value->nama ?></td>
			<td><?= $value->alamat ?></td>
			<td><?= $value->no_telp ?></td>
		</tr>
		<?php } ?>
	</table>
</div>
