<body>

<a href="<?=base_url('/admin/dashboard/')?>logout">logout</a>
<?php if($this->session->flashdata('alert')): ?>
<div class="alert"><?php echo $this->session->flashdata('alert'); ?></div>
<?php endif ?>

<?php echo form_open('/admin/dashboard/update'); ?>
	<?php foreach ($admin as $value): ?>
	<label>Username : </label>
		<input type="text" name="username" value="<?=$value->username?>">
	<br>
	<label>Password : </label>
		<input type="password" name="password" value="<?=$value->password?>">
	<br />
	<label>Email : </label>
		<input type="text" name="email" value="<?=$value->email?>">
	<br />

	<input type="submit" name="submit" value="submit">
	<?php endforeach ?>
<?php form_close(); ?>
</body>

