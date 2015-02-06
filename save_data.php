<?php

if (!$connection_error)
{
	$saved_something = true;

	if (isset($_POST["text_input"]) && isset($_POST["text_id"]) && isset($_POST["text_table"]) && isset($_POST["text_column"]) && isset($_POST["text_idcolumn"]))
	{
		$sql_query = "UPDATE {$_POST['text_table']} SET {$_POST['text_column']}='{$_POST['text_input']}' WHERE {$_POST['text_idcolumn']}='{$_POST['text_id']}';";
		$result = $db->query($sql_query);
		$edit_mode = true;
	}

	else if (isset($_POST["create_page"]))
	{
		$sql_query = "INSERT INTO pages (page_name) values ('New Page');";
		$result = $db->query($sql_query);
		$entry_id = $db->insert_id;

		$sql_query = "UPDATE pages SET page_link='{$entry_id}' WHERE page_id='{$entry_id}';";
		$result = $db->query($sql_query);
	}

	else if (isset($_POST["create_entry"]) && isset($_POST["page_id"]))
	{
		$sql_query = "INSERT INTO entries (entry_type, entry_page_id) values ({$_POST["create_entry"]},{$_POST["page_id"]});";
		$result = $db->query($sql_query);
		$entry_id = $db->insert_id;

		$sql_query = "INSERT INTO content (content_entry_id, content_text) values ('{$entry_id}','Insert content');";
		$result = $db->query($sql_query);

		$sql_query = "INSERT INTO content (content_entry_id, content_text) values ('{$entry_id}','Insert content');";
		$result = $db->query($sql_query);

		$sql_query = "INSERT INTO content (content_entry_id, content_text) values ('{$entry_id}','Insert content');";
		$result = $db->query($sql_query);
	}

	else if (isset($_POST["entry_id"]))
	{
		$sql_query = "DELETE from content where content_entry_id='{$_POST["entry_id"]}'";
		$result = $db->query($sql_query);

		$sql_query = "DELETE from entries where entry_id='{$_POST["entry_id"]}'";
		$result = $db->query($sql_query);
	}

	else if (isset($_POST["delete_page_id"]))
	{
		$sql_query = "DELETE from content where content_entry_id IN (SELECT entry_id from entries where entry_page_id='{$_POST['delete_page_id']}')";
		$result = $db->query($sql_query);

		$sql_query = "DELETE from entries where entry_page_id='{$_POST['delete_page_id']}'";
		$result = $db->query($sql_query);

		$sql_query = "DELETE from pages where page_id='{$_POST['delete_page_id']}'";
		$result = $db->query($sql_query);
	}

	else if (isset($_POST["add_page_id"]))
	{
		$sql_query = "INSERT INTO content (page_name, content_text) values ('{$entry_id}','Insert content');";
		$result = $db->query($sql_query);
	}
	else
		$saved_something = false;

	if ($saved_something || $edit_mode)
		$edit_mode = true;
}

?>
