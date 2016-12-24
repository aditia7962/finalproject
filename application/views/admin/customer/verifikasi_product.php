<body>
<?php foreach ($verify as $value) { } ?>

<?php echo form_open_multipart(); ?>
	<label>Nama Pengirim : </label>
		<input type="text" name="nama_pengirim" value="<?=$value->nama_pengirim?>">
	<br />
	<label>Bank Asal : </label>
		<input type="text" name="bank_asal" value="<?=$value->bank_asal?>">
	<br />
	<label>Bank Tujuan : </label>
		<input type="text" name="bank_tujuan" value="<?=$value->bank_tujuan?>">
	<br />
	<label>Nominal : </label>
		<input type="text" name="nominal" value="<?=$value->nominal?>">
	<br />
	<label>Bukti Transfer : </label>
	<img src="<?=$value->gambar?>" alt="">
	<input type="file" name="gambar" value="">
	<br />
	<input type="submit" name="submit" value="submit">
<?php form_close(); ?>
</body>