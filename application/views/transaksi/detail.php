<div id="details">
	<h4>Detail Pesanan</h4>
	<table class="table">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>harga</th>
		</tr>
		<?php $i = 1 ?>
		<?php foreach ($detail as $item) : ?>
			<tr>
				<td><?php echo $i++ ?></td>
				<td><select name="barang" id="" class="form-select" style="width: 100px;" data-id_pembelian="<?php echo $item->id ?>">
						<option value="<?php echo $item->id_barang ?>"><?php echo $item->nama_barang ?> (selected)</option>
						<?php foreach ($barang as $items) : ?>
							<option value="<?php echo $items->id ?>"><?php echo $items->nama_barang ?></option>
						<?php endforeach ?>
					</select></td>
				<td><input type="text" name="jumlah" class="form-control" value="<?php echo $item->jumlah ?>" data-id_pembelian="<?php echo $item->id ?>"></td>
				<td><input type="text" name="harga" class="form-control" value="<?php echo $item->harga ?>" data-id_pembelian="<?php echo $item->id ?>"></td>
			</tr>
		<?php endforeach ?>
	</table>
</div>

<script>
	$("[name=barang]").on('change', function() {
		var id_pemb = $(this).attr('data-id_pembelian')
		$.ajax({
			url: "<?php echo base_url('Transaksi/edit_barang') ?>",
			method: "POST",
			data: {
				id: id_pemb,
				barang: $(this).val()
			},
			success: function(data) {
				$.ajax({
					url: "<?= base_url('transaksi/table') ?>",
					method: "GET",
					success: function(data) {
						$(".closedmodals").trigger('click')
						$("#table").html(data)
					}
				})
			}
		})
	})
</script>
<script>
	$("[name=harga]").on('change', function() {
		var id_pemb = $(this).attr('data-id_pembelian')
		$.ajax({
			url: "<?php echo base_url('Transaksi/edit_harga') ?>",
			method: "POST",
			data: {
				id: id_pemb,
				harga: $(this).val()
			},
			success: function(data) {
				$.ajax({
					url: "<?= base_url('transaksi/table') ?>",
					method: "GET",
					success: function(data) {
						$(".closedmodals").trigger('click')
						$("#table").html(data)
					}
				})
			}
		})
	})
</script>
<script>
	$("[name=jumlah]").on('change', function() {
		var id_pemb = $(this).attr('data-id_pembelian')
		$.ajax({
			url: "<?php echo base_url('Transaksi/edit_jumlah') ?>",
			method: "POST",
			data: {
				id: id_pemb,
				jumlah: $(this).val()
			},
			success: function(data) {
				$.ajax({
					url: "<?= base_url('transaksi/table') ?>",
					method: "GET",
					success: function(data) {
						$(".closedmodals").trigger('click')
						$("#table").html(data)
					}
				})
			}
		})
	})
</script>
