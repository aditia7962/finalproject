<body>
<?php echo form_open(); ?>
	<label>Category Name : </label>
		<input type="text" name="category_name" value="<?=$category->category_name?>">
	<br />
	<label>Description : </label>
		<textarea name="description" col="50"><?=$category->description?></textarea>
	<br />

	<input type="submit" name="submit" value="submit">
<?php form_close(); ?>
</body>