<div class="container">

	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pembeli</th>
				<th>Jumlah</th>
				<th>Total Transaksi</th>
				<th>Tanggal Transaksi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($transaksi as $item) : ?>
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo $item->nama ?></td>
					<td><?php echo $item->jumlah ?></td>
					<td>Rp. <?php echo number_format($item->total_harga, 2, ",", ".") ?></td>
					<td><?php echo date("Y-m-d", strtotime($item->created_at)) ?></td>
					<td>
						<button type="button" class="btn btn-primary button_modal" data-bs-toggle="modal" data-bs-target="#exampleModalDetail<?php echo $item->id_pembelian ?>" onclick="detail(<?php echo $item->id_pembelian ?>)">
							Detail
						</button>
						<button class="btn btn-danger deleted" data-id="<?= $item->id_pembelian ?>">Delete</button>
					</td>
				</tr>
				<!-- Modal DEtail -->
				<div class="modal fade" id="exampleModalDetail<?php echo $item->id_pembelian ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Modal Transaksi</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div class="container">
									<div class="details"></div>
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary closedmodals" data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</tbody>
	</table>
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
				url: "<?= base_url('transaksi/delete') ?>",
				method: "POST",
				data: {
					id: id,
				},
				success: function(data) {
					$.ajax({
						url: "<?= base_url('transaksi/table') ?>",
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
<script>
	function detail(params) {
		$.ajax({
			url: "<?php echo base_url('Transaksi/detail') ?>",
			method: "GET",
			data: {
				param: params
			},
			success: function(data) {
				$(".details").html(data)
			}
		})
	}
</script>
