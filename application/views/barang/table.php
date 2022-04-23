<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Harga</th>
				<th>Stok</th>
				<th>Berat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($barang as $item) : ?>
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo $item->nama_barang ?></td>
					<td>Rp. <?php echo number_format($item->harga, 2, ",", ".") ?></td>
					<td><?php echo $item->stok ?></td>
					<td><?php echo $item->berat ?> gr</td>
					<td>
						<button type="button" class="btn btn-primary button_modal" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" data-id="<?php echo $item->id ?>" data-nama="<?php echo $item->nama_barang ?>" data-harga="<?php echo $item->harga ?>" data-stok="<?php echo $item->stok ?>" data-berat="<?php echo $item->berat ?>">
							Edit
						</button>
						<button class="btn btn-danger deleted" data-id="<?= $item->id ?>">Delete</button>
						<!-- <a href="<?= base_url('barang/hapus') ?>" onclick="confirm('Anda yakin akan dihapus?');return true" class="btn btn-danger">hapus</a> -->
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
<!-- Modal edit -->
<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal Barang</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container">
					<h4>Tambah Barang</h4>
					<form>
						<div class="form-group">
							<label for="">Nama</label>
							<input type="hidden" id="id" name="id" class="form-control" aria-required="true">
							<input type="text" id="nama" name="nama" class="form-control" aria-required="true">
						</div>
						<div class="form-group">
							<label for="">Harga</label>
							<input type="text" id="harga" name="harga" class="form-control" aria-required="true">
						</div>
						<div class="form-group">
							<label for="">Stok</label>
							<input type="text" id="stok" name="stok" class="form-control" aria-required="true">
						</div>
						<div class="form-group">
							<label for="">Berat</label>
							<input type="text" id="berat" name="berat" class="form-control" aria-required="true">
						</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary closedmodal" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary updated">Update</button>
			</div>
			</form>
		</div>
	</div>
</div>
<script>
	$(".button_modal").on('click', function() {
		let id = $(this).attr('data-id');
		let nama = $(this).attr('data-nama');
		let harga = $(this).attr('data-harga');
		let stok = $(this).attr('data-stok');
		let berat = $(this).attr('data-berat');
		$("[name=id]").val(id)
		$("[name=nama]").val(nama)
		$("[name=harga]").val(harga)
		$("[name=stok]").val(stok)
		$("[name=berat]").val(berat)
	})
</script>
<script>
	$(".deleted").on("click", function() {

		let text = "Anda yakin akan dihapus?";
		if (confirm(text) == true) {
			var id = $(this).attr('data-id')
			$.ajax({
				url: "<?= base_url('barang/delete') ?>",
				method: "POST",
				data: {
					id: id,
				},
				success: function(data) {
					$.ajax({
						url: "<?= base_url('barang/table') ?>",
						method: "GET",
						success: function(data) {
							$("#table").html(data);
						}
					})
				}
			})
		}
	})
</script>
<script>
	$(".updated").on("click", function() {
		var id = $("#id").val()
		var nama = $("#nama").val()
		var harga = $("#harga").val()
		var stok = $("#stok").val()
		var berat = $("#berat").val()
		$.ajax({
			url: "<?= base_url('barang/update') ?>",
			method: "POST",
			data: {
				id: id,
				nama: nama,
				harga: harga,
				stok: stok,
				berat: berat,
			},
			success: function(data) {
				$(".closedmodal").trigger('click')
				$.ajax({
					url: "<?= base_url('barang/table') ?>",
					method: "GET",
					success: function(data) {
						$("#table").html(data);
					}
				})
			}
		})
	})
</script>
