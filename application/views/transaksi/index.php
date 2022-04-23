<div class="container mt-5">
	<!-- Button trigger modal -->
	<div class="row">
		<div class="col-md-6">
			<div class="container">
				<h2>Tambah Transaksi</h2>
				<form action="<?= base_url("Transaksi/save_transaksi") ?>" method="POST">
					<div class="form-group">
						<label for="">Nama Pembeli</label>
						<div class="col-md-6">
							<select name="pembeli" class="form-control " id="">
								<?php foreach ($pembeli as $item) : ?>
									<option value="<?php echo $item->id ?>"><?php echo $item->nama ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-1">
							<i class="fa fa-plus" style="color: green;font-size:30px;cursor:pointer" onclick="addRow()"></i>
						</div>
					</div>
					<div class=" row">
						<div class="form-group col-md-3">
							<label for="">Nama Barang</label>
							<select name="barang[]" class="form-control" id="" required>
								<?php foreach ($barang as $item) : ?>
									<option value="<?php echo $item->id ?>"><?php echo $item->nama_barang ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label for="">Harga</label>
							<input type="text" id="harga" name="harga[]" class="form-control" required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-3">
							<label for="">jumlah</label>
							<input type="text" id="stok" name="stok[]" class="form-control" required>
						</div>

					</div>

					<div id="add_input"></div>
					<button type="submit" class="btn btn-success mt-3">Tambah</button>
				</form>

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
							<h4>Tambah transaksi</h4>
							<form>
								<div class="form-group">
									<label for="">Nama</label>
									<input type="text" name="nama" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="">jumlah</label>
									<input type="text" name="stok" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="">Harga</label>
									<input type="text" name="harga" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="">Berat</label>
									<input type="text" name="berat" class="form-control" required>
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



		<div class="col-md-6">
			<br>
			<br>
			<br>
			<div class="row">
				<div class="col-md-5">
					<input type="text" class="form-control" placeholder="Pencarian" name="search">
				</div>
				<div class="col-md-7">
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
			<div id="table"></div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
	$.ajax({
		url: "<?= base_url('transaksi/table') ?>",
		method: "GET",
		success: function(data) {
			$("#table").html(data)
		}
	})

	function save() {
		$.ajax({
			url: "<?= base_url('transaksi/insert') ?>",
			method: "POST",
			data: {
				nama: $("[name=nama]").val(),
				stok: $("[name=stok]").val(),
				harga: $("[name=harga]").val(),
				berat: $("[name=berat]").val(),
			},
			success: function(data) {
				$.ajax({
					url: "<?= base_url('transaksi/table') ?>",
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
			url: "<?= base_url('transaksi/table') ?>",
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
			url: "<?= base_url('transaksi/table') ?>",
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

<script>
	var x = 0;

	function addRow() {
		x++;
		var add_input = `
		<div id="new_input${x}">
							<div class="row">
											<div class="col-md-6"></div>
											<div class="col-md-1">
												<i class="fa fa-trash" style="color: red;font-size:30px;cursor:pointer" onclick="deleteRow(${x})"></i>
											</div>
										</div>
							<div class=" row">
							<div class="form-group col-md-3">
								<label for="">Nama Barang</label>
								<select name="barang[]" class="form-control" id="">
									<?php foreach ($barang as $item) : ?>
										<option value="<?php echo $item->id ?>"><?php echo $item->nama_barang ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group col-md-3">
								<label for="">Harga</label>
								<input type="text" id="harga" name="harga[]" class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-3">
								<label for="">jumlah</label>
								<input type="text" id="stok" name="stok[]" class="form-control" required>
							</div>
						
						</div>
		</div>
		`;
		$("#add_input").append(add_input)

	}

	function deleteRow(params) {
		$("#new_input" + params).remove()
	}
</script>
