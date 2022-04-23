<div class="container mt-5">
	<!-- Button trigger modal -->
	<div class="row">
		<div class="col-md-3">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
				Tambah
			</button>
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-3">
			<input type="text" class="form-control" placeholder="Pencarian" name="search">
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-6">
					<input type="date" name="tgl_awal" id="" class="form-control" onchange="filter()">
				</div>
				<div class="col-md-6">
					<input type="date" name="tgl_akhir" id="" class="form-control" onchange="filter()">
				</div>
			</div>
		</div>
	</div>


	<!-- Modal insert -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="container">
						<h4>Tambah pengeluaran</h4>
						<form>
							<div class="form-group">
								<label for="">Barang</label>
								<select name="id_barang" id="" class="form-select">
									<?php foreach ($barang as $item) : ?>
										<option value="<?php echo $item->id ?>"><?php echo $item->nama_barang ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label for="">Jumlah</label>
								<input type="text" name="jumlah" class="form-control" aria-required="true">
							</div>
							<div class="form-group">
								<label for="">Harga</label>
								<input type="text" name="harga" class="form-control" aria-required="true">
							</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary closed" data-bs-dismiss="modal" id="closed">Close</button>
					<button type="button" class="btn btn-primary" onclick="save()">Save changes</button>
				</div>
				</form>
			</div>
		</div>
	</div>



	<div id="table"></div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
	$.ajax({
		url: "<?= base_url('pengeluaran/table') ?>",
		method: "GET",
		success: function(data) {
			$("#table").html(data)
		}
	})

	function save() {
		$.ajax({
			url: "<?= base_url('pengeluaran/insert') ?>",
			method: "POST",
			data: {
				id_barang: $("[name=id_barang]").val(),
				jumlah: $("[name=jumlah]").val(),
				harga: $("[name=harga]").val(),
			},
			success: function(data) {
				$.ajax({
					url: "<?= base_url('pengeluaran/table') ?>",
					method: "GET",
					success: function(data) {
						$("#table").html(data);
						$(".closed").trigger('click');
					}
				})
			}
		})

	}
</script>
<script>
	$("[name=search]").on("keyup", function() {
		$.ajax({
			url: "<?= base_url('pengeluaran/table') ?>",
			method: "POST",
			data: {
				search: $(this).val()
			},
			success: function(data) {
				$("#table").html(data);
			}
		})
	})
</script>
<script>
	function filter() {
		$.ajax({
			url: "<?= base_url('pengeluaran/table') ?>",
			method: "POST",
			data: {
				tgl_awal: $("[name=tgl_awal]").val(),
				tgl_akhir: $("[name=tgl_akhir]").val()
			},
			success: function(data) {
				$("#table").html(data);
			}
		})
	}
</script>
