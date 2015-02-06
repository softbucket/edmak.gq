<?php

$pagename = "";
$pagelink = "";
$pageid = 1;
$pagenames = array();
$pagelinks = array();
$contents = array();

if (isset($_GET["page"]))
	$pagelink = $_GET["page"];

if (!$connection_error)
{
	//get the current page name
	$sql_query = "SELECT * from pages where page_link='".$pagelink."'";

	if ($row = $db->query($sql_query)->fetch_assoc())
	{
	}
	else
	{
		$sql_query = "SELECT * from pages";
		$row = $db->query($sql_query);
		$row = $row->fetch_assoc();
	}

	if ($row != null)
	{

		$pagename = $row["page_name"];
		$pagelink = $row["page_link"];
		$pageid = $row["page_id"];
		$pagestyle = $row["page_style"];

		$sql_query = "SELECT * from pages order by page_order asc";

		$pages_result = $db->query($sql_query);

		while ($row = $pages_result->fetch_assoc())
		{
			$pagenames[] = array($row['page_name'], $row['page_link'], $row["page_id"]);
		}

		//get all content for the page
		$sql_query = "SELECT * from entries where entry_page_id='{$pageid}' order by entry_order asc";

		$entries_result = $db->query($sql_query);

		while ($row = $entries_result->fetch_assoc())
		{
			$content = array();

			$sql_query = "SELECT * from content where content_entry_id='".$row["entry_id"]."' order by content_order asc";
			$content_result = $db->query($sql_query);

			while ($row_content = $content_result->fetch_assoc())
			{
				$content[] = $row_content;
			}

			$content["type"] = $row["entry_type"];
			$content["entry_id"] = $row["entry_id"];

			$contents[] = $content;
		}
	}
}

?>