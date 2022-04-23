<select name="id_barang" id="id_barang" class="form-select">
	<option value="<?php echo $detail->id ?>"><?php echo $detail->nama_barang ?> (dipilih)</option>
	<?php foreach ($barang as $item) : ?>
		<option value="<?php echo $item->id ?>"><?php echo $item->nama_barang ?></option>
	<?php endforeach ?>
</select>
