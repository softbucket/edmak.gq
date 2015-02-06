<div id="div_edit">
	<form action="index.php?page=<?=$pagelink?>" method="POST">
	<textarea id="text_edit"></textarea><br/>
	<input id="submit_save" type="submit" value="Save">
	<button type="button" id="btn_edit_discard">Discard</button>

	<input type=hidden id="text_input" name="text_input" value="">
	<input type=hidden id="text_table" name="text_table" value="">
	<input type=hidden id="text_column" name="text_column" value="">
	<input type=hidden id="text_idcolumn" name="text_idcolumn" value="">
	<input type=hidden id="text_id" name="text_id" value="">
	</form>
</div>