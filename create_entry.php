<div id="div_create_entry">
	<form id="form_create_entry" action="index.php?page=<?=$pagelink?>" method="POST">
		<div id="create_type1">
			<p>Create type 1</p>
			<div class="create_single_div"></div>
			<div class="create_single_div"></div>
			<div class="create_single_div"></div>
		</div>
		<div id="create_type2">
			<p>Create type 2</p>
			<div class="create_double_div"></div>
			<div class="create_single_div"></div>
		</div>
		<div id="create_type3">
			<p>Create type 3</p>
			<div class="create_single_div"></div>
			<div class="create_double_div"></div>
		</div>
		<div id="create_type4">
			<p>Create type 4</p>
			<div class="create_triple_div"></div>
		</div>
		<div id="create_type5">
			<p>Create type 5</p>
			<div class="create_half_div"></div>
			<div class="create_half_div"></div>
		</div>
		<input type=hidden id="create_entry" name="create_entry" value="">
		<input type=hidden id="page_id" name="page_id" value="<?= $pageid ?>">
	</form>
</div>