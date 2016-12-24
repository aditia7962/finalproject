<body>
<?php echo form_open_multipart(); ?>
<label>Username : </label>
		<input type="text" name="username" value="<?=$customer->username?>">
<br />
<label>Password : </label>
		<input type="text" name="password" value="<?=$customer->password?>">
<br />

<label>Picture : </label>
<br />
<img src="<?=base_url().$customer->picture?>" alt="">
<br />
		<input type="file" name="picture">
<br />
<label>Firstname : </label>
		<input type="text" name="firstname" value="<?=$customer->firstname?>">
<br />
<label>Lastname : </label>
		<input type="text" name="lastname" value="<?=$customer->lastname?>">
<br />

<label>Phone : </label>
		<input type="text" name="phone" value="<?=$customer->phone?>">
<br />
<label>Email : </label>
		<input type="text" name="email" value="<?=$customer->email?>">
<br />
<label>Address : </label>
		<input type="text" name="addreess" value="<?=$customer->address?>">
<br />
<label>Country : </label>
		<input type="text" name="country" value="<?=$customer->country?>">
<br />
<label>City : </label>
		<input type="text" name="city" value="<?=$customer->city?>">
<br />
<label>Postal Code : </label>
		<input type="text" name="postal_code" value="<?=$customer->postal_code?>">
<br />

<input type="submit" name="submit" value="submit">

<?php echo form_close(); ?>
</body>
