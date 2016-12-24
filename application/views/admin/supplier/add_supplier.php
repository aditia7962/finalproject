<body>
<?php echo form_open(); ?>
	<label>Company Name : </label>
		<input type="text" name="company_name" value="">
	<br />
	<label>Phone : </label>
		<input type="text" name="phone" value="">
	<br />
	<label>Email : </label>
		<input type="text" name="email" value="">
	<br />
	<label>Address : </label>
		<input type="text" name="address" value="">
	<br />
	<label>Country </label>
		<input type="text" name="country" value="">
	<br />
	<label>City : </label>
		<input type="text" name="city" value="">
	<br />

	<label>Postal Code : </label>
		<input type="text" name="postal_code" value="">
	<br />
	<input type="submit" name="submit" value="submit">
<?php form_close(); ?>
</body>