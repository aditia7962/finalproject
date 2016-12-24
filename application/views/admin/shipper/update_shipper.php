<body>
<?php echo form_open_multipart(); ?>
	<label>Company Name : </label>
		<input type="text" name="company_name" value="<?=$shipper->company_name?>">
	<br />
	<label>Phone : </label>
		<input type="text" name="phone" value="<?=$shipper->phone?>">
	<br />
	<label>Address : </label>
		<input type="text" name="address" value="<?=$shipper->address?>">
	<br />
	
	<input type="submit" name="submit" value="submit">
<?php form_close(); ?>
</body>