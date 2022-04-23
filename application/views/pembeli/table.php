<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Telp</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($pembeli as $item) : ?>
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo $item->nama ?></td>
					<td><?php echo $item->alamat ?></td>
					<td><?php echo $item->telp ?></td>
					<td>
						<button type="button" class="btn btn-primary button_modal" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" data-id="<?php echo $item->id ?>" data-nama="<?php echo $item->nama ?>" data-alamat="<?php echo $item->alamat ?>" data-telp="<?php echo $item->telp ?>">
							Edit
						</button>
						<button class="btn btn-danger deleted" data-id="<?= $item->id ?>">Delete</button>
						<!-- <a href="<?= base_url('pembeli/hapus') ?>" onclick="confirm('Anda yakin akan dihapus?');return true" class="btn btn-danger">hapus</a> -->
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
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container">
					<h4>Tambah Pembeli</h4>
					<form>
						<div class="form-group">
							<label for="">Nama</label>
							<input type="hidden" id="id" name="id" class="form-control" aria-required="true">
							<input type="text" id="nama" name="nama" class="form-control" aria-required="true">
						</div>
						<div class="form-group">
							<label for="">Alamat</label>
							<input type="text" id="alamat" name="alamat" class="form-control" aria-required="true">
						</div>
						<div class="form-group">
							<label for="">Telp</label>
							<input type="text" id="telp" name="telp" class="form-control" aria-required="true">
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
		let alamat = $(this).attr('data-alamat');
		let telp = $(this).attr('data-telp');
		$("[name=id]").val(id)
		$("[name=nama]").val(nama)
		$("[name=alamat]").val(alamat)
		$("[name=telp]").val(telp)
	})
</script>
<script>
	$(".deleted").on("click", function() {

		let text = "Anda yakin akan dihapus?";
		if (confirm(text) == true) {
			var id = $(this).attr('data-id')
			$.ajax({
				url: "<?= base_url('pembeli/delete') ?>",
				method: "POST",
				data: {
					id: id,
				},
				success: function(data) {
					$.ajax({
						url: "<?= base_url('pembeli/table') ?>",
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
		var alamat = $("#alamat").val()
		var telp = $("#telp").val()
		$.ajax({
			url: "<?= base_url('pembeli/update') ?>",
			method: "POST",
			data: {
				id: id,
				nama: nama,
				alamat: alamat,
				telp: telp,
			},
			success: function(data) {
				$(".closedmodal").trigger('click')
				$.ajax({
					url: "<?= base_url('pembeli/table') ?>",
					method: "GET",
					success: function(data) {
						$("#table").html(data);
					}
				})
			}
		})
	})
</script>
