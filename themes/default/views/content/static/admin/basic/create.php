
<div>
<?php echo form::open(); ?>
	<fieldset>
		<legend>New Basic Content</legend>
		<input type="hidden" name="create_basic_content" value="TRUE" />
		<label>Name: <input name="name" type="text" value="<?php echo (isset($_POST['name']))?$_POST['name']:NULL;?>" /></label>
		<label>Format:
			<select name="format_id">
				<?php foreach ($formats as $id => $name ): ?>
				<option value="<?php echo $id; ?>" ><?php echo $name; ?></option>
				<?php endforeach; ?>
			</select>
		</label>
		<label>Content: <textarea name="content" id="markdown"><?php echo (isset($_POST['content']))?$_POST['content']:NULL;?></textarea></label>
		<label><button>Create</button></label>
	</fieldset>
<?php echo form::close(); ?>
</div>