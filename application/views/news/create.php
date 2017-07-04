<h2>建立新聞項目</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

	
	<input type="input" name="title" /><br />

	
	<textarea name="text"></textarea><br />
	
	<input type="submit" name="submit" value="sumbit" /> 

</form>
