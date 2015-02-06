<?php
    require('settings/connect.php');
	require('save_data.php');
    require('get_data.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>edmak.GQ</title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<div id="title">
	<div id="div_title_container">
		<div id="div_title">
			<div id="div_logo_container">
				<img id="img_logo" alt="l" src="graphics/edlogo.png"/>
				<p id="p_logo">edmak.GQ</p><br/>
				<p id="p_logo_subheader">solver / style / student</p>
			</div>
			<div id="div_cupcake"><img id="img_cupcake" alt="l" src="graphics/rubiksdh.png"/></div>
			<span id="div_sociallinks_container">
				<span id="div_sociallinks">
					<a href="https://twitter.com/ed_mak"><img alt="twitter" src="graphics/twitter.png"/></a>
					<a href="https://plus.google.com/u/0/+EdMakAttack"><img alt="google" src="graphics/google_plus.png"/></a>
					<a href="https://www.facebook.com/ed.mak.5"><img alt="facebook" src="graphics/facebook.png"/></a>
					<a href="https://ca.linkedin.com/in/edwardmak"><img alt="facebook" src="graphics/linkedin.png"/></a>
				</span>
			</span>
			</div>
		</div>
	<div id="div_navigation_container">
		<?php foreach ($pagenames as $nav_page): ?>
			<a href="?page=<?=$nav_page[1]?>"><?= $nav_page[0] ?></a>
			<?php if ($edit_mode): ?>
				<form class="form_remove_page border" method="post" action="index.php">(delete)<input type=hidden name="delete_page_id" value="<?=$pageid?>"></form>
				<form class="form_update border" db_id="<?=$nav_page[2]?>" _data="<?=$nav_page[1]?>" _idcolumn="page_id" _column="page_link" _table="pages" method="post" action="index.php?page=<?=$nav_page[0]?>">(pagelink)</form>
				<form class="form_update border" db_id="<?=$nav_page[2]?>" _data="<?=$nav_page[0]?>" _idcolumn="page_id" _column="page_name" _table="pages" method="post" action="index.php?page=<?=$nav_page[0]?>">(pagename)</form>
			<?php endif; ?>
		<?php endforeach; ?>
		<?php if ($edit_mode): ?>
			<form class="border" id="form_create_page" _column="page_name" _table="pages" method="post" action="index.php?page=<?=$pagelink?>">
				<p>(create)</p><input type=hidden name="create_page" value="create_page">
			</form>
		<?php endif; ?>
	</div>

	<?php require("content.php"); ?>
</div>

<div id="div_password">
	<form action="index.php?page=<?=$pagelink?>" method="POST">
	<input type="text" id="password" name="password" value="">
	<input id="submit_login" type="submit" value="Login">
	</form>
</div>

</body>
</html>
