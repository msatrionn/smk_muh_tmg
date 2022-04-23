<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Tanggal</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($pengeluaran as $item) : ?>
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo $item->nama_barang ?></td>
					<td>Rp. <?php echo number_format($item->harga, 2, ",", ".") ?></td>
					<td><?php echo $item->jumlah ?></td>
					<td><?php echo date("Y-m-d", strtotime($item->created_at)) ?></td>
					<td>
						<button type="button" class="btn btn-primary button_modal" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" data-id="<?php echo $item->id ?>" data-id_barang="<?php echo $item->id_barang ?>" data-harga="<?php echo $item->harga ?>" data-jumlah="<?php echo $item->jumlah ?>">
							Edit
						</button>
						<button class="btn btn-danger deleted" data-id="<?= $item->id ?>">Delete</button>
						<!-- <a href="<?= base_url('pengeluaran/hapus') ?>" onclick="confirm('Anda yakin akan dihapus?');return true" class="btn btn-danger">hapus</a> -->
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
					<h4>Edit Pengeluaran</h4>
					<form>
						<div class="form-group">
							<label for="">Nama</label>
							<input type="hidden" id="id" name="id" class="form-select" aria-required="true">
							<div class="show_barang"></div>
						</div>
						<div class="form-group">
							<label for="">Harga</label>
							<input type="text" id="harga" name="harga" class="form-control" aria-required="true">
						</div>
						<div class="form-group">
							<label for="">Jumlah</label>
							<input type="text" id="jumlah" name="jumlah" class="form-control" aria-required="true">
							<input type="hidden" id="jumlah_awal" name="jumlah_awal" class="form-control" aria-required="true">
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
		let id_barang = $(this).attr('data-id_barang');
		let harga = $(this).attr('data-harga');
		let jumlah = $(this).attr('data-jumlah');
		let jumlah_awal = $(this).attr('data-jumlah');
		let berat = $(this).attr('data-berat');
		$.ajax({
			url: "<?php echo base_url('Pengeluaran/show_barang') ?>",
			method: "GET",
			data: {
				id_barang: id_barang
			},
			success: function(data) {
				$(".show_barang").html(data)
			}
		})

		$("[name=id]").val(id)
		$("[name=id_barang]").val(id_barang)
		$("[name=harga]").val(harga)
		$("[name=jumlah]").val(jumlah)
		$("[name=jumlah_awal]").val(jumlah_awal)
	})
</script>
<script>
	$(".deleted").on("click", function() {

		let text = "Anda yakin akan dihapus?";
		if (confirm(text) == true) {
			var id = $(this).attr('data-id')
			$.ajax({
				url: "<?= base_url('pengeluaran/delete') ?>",
				method: "POST",
				data: {
					id: id,
				},
				success: function(data) {
					$.ajax({
						url: "<?= base_url('pengeluaran/table') ?>",
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
		var id_barang = $("#id_barang").val()
		var harga = $("#harga").val()
		var jumlah = $("#jumlah").val()
		var jumlah_awal = $("#jumlah_awal").val()
		$.ajax({
			url: "<?= base_url('pengeluaran/update') ?>",
			method: "POST",
			data: {
				id: id,
				id_barang: id_barang,
				harga: harga,
				jumlah: jumlah,
				jumlah_awal: jumlah_awal,
			},
			success: function(data) {
				$(".closedmodal").trigger('click')
				$.ajax({
					url: "<?= base_url('pengeluaran/table') ?>",
					method: "GET",
					success: function(data) {
						$("#table").html(data);
					}
				})
			}
		})
	})
</script>
