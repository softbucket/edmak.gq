
<div id="content">
	<?php foreach ($contents as $content): ?>
		<div class="div_content_container">
			<?php if ($edit_mode): ?>
				<form class="form_remove_content" method="post" action="index.php">
					Delete This Row<input type=hidden name="entry_id" value="<?=$content['entry_id']?>">
				</form>
			<?php endif; ?>
			<div class="div_content">
				<?php if ($content["type"] == 1): ?>
					<div class="div_position div_position_single" db_id="<?=$content[0]["content_id"]?>"><?=$content[0]["content_text"]?></div>
					<div class="div_position div_position_single" db_id="<?=$content[1]["content_id"]?>"><?=$content[1]["content_text"]?></div>
					<div class="div_position div_position_single" db_id="<?=$content[2]["content_id"]?>"><?=$content[2]["content_text"]?></div>

				<?php endif; ?>
				<?php if ($content["type"] == 2): ?>
					<div class="div_position div_position_double" db_id="<?=$content[0]["content_id"]?>"><?=$content[0]["content_text"]?></div>
					<div class="div_position div_position_single" db_id="<?=$content[1]["content_id"]?>"><?=$content[1]["content_text"]?></div>
				<?php endif; ?>
				<?php if ($content["type"] == 3): ?>
					<div class="div_position div_position_single" db_id="<?=$content[0]["content_id"]?>"><?=$content[0]["content_text"]?></div>
					<div class="div_position div_position_double" db_id="<?=$content[1]["content_id"]?>"><?=$content[1]["content_text"]?></div>
				<?php endif; ?>
				<?php if ($content["type"] == 4): ?>
					<div class="div_position div_position_triple" db_id="<?=$content[0]["content_id"]?>"><?=$content[0]["content_text"]?></div>
				<?php endif; ?>
				<?php if ($content["type"] == 5): ?>
					<div class="div_position div_position_half" db_id="<?=$content[0]["content_id"]?>"><?=$content[0]["content_text"]?></div>
					<div class="div_position div_position_half" db_id="<?=$content[1]["content_id"]?>"><?=$content[1]["content_text"]?></div>
				<?php endif; ?>
			</div>
		</div>
	<?php endforeach; ?>

	<?php if ($edit_mode): ?>
		<?php require("edit.php"); ?>
		<?php require("create_entry.php"); ?>
		<?php require("edit_styles.php"); ?>
	<?php endif; ?>
</div>