<body>
<?php echo form_open_multipart(); ?>
	<label>Company Name : </label>
		<input type="text" name="company_name" value="<?=$supplier->company_name?>">
	<br />
	<label>Phone : </label>
		<input type="text" name="phone" value="<?=$supplier->phone?>">
	<br />
	<label>Email : </label>
		<input type="text" name="email" value="<?=$supplier->email?>">
	<br />
	<label>Address : </label>
		<input type="text" name="address" value="<?=$supplier->address?>">
	<br />
	<label>Country </label>
		<input type="text" name="country" value="<?=$supplier->country?>">
	<br />
	<label>City : </label>
		<input type="text" name="city" value="<?=$supplier->city?>">
	<br />

	<label>Postal Code : </label>
		<input type="text" name="postal_code" value="<?=$supplier->postal_code?>">
	<br />
	<input type="submit" name="submit" value="submit">
<?php form_close(); ?>
</body>