function load()
{

	if ($("#div_edit").length > 0)
	{
		$(".div_position").each(function(i, obj){
			var j = $(obj);
			j.click(function()
			{
				$("#div_edit").show();
				$("#div_edit").css("left",j.position().left+30);
				$("#div_edit").css("top",j.position().top+30);

				$("#text_edit").val(j.html());
				$("#text_edit").css("height",Math.max(j.height(),200));
				$("#text_edit").css("width",Math.max(j.width(),200));

				$("#text_table").val("content");
				$("#text_column").val("content_text");
				$("#text_id").val(j.attr("db_id"));
				$("#text_idcolumn").val("content_id");

				$("#text_edit").focus();
			});

			j.hover(
				function() {
				$( this ).addClass("border");
				}, function() {
				$( this ).removeClass("border");
			});
		});

		$(".form_update").each(function(i, obj){
			var j = $(obj);
			j.click(function()
			{
				$("#div_edit").show();
				$("#div_edit").css("left",j.position().left+30);
				$("#div_edit").css("top",j.position().top+30);

				$("#text_edit").val(j.attr("_data"));
				$("#text_edit").css("height",Math.max(j.height(),200));
				$("#text_edit").css("width",Math.max(j.width(),200));

				$("#text_table").val(j.attr("_table"));
				$("#text_column").val(j.attr("_column"));
				$("#text_id").val(j.attr("db_id"));
				$("#text_idcolumn").val(j.attr("_idcolumn"));

				$("#text_edit").focus();
			});
		});

		$("#form_create_page").click(function()
		{
			$(this).submit();
		});

		$("#btn_edit_discard").click(function()
		{
			$("#div_edit").hide();
		});

		$("#submit_save").click(function()
		{
			$("#text_input").val($("#text_edit").val());
		});

		$("#create_type1").click(function()
		{
			$("#create_entry").val("1");
			$("#form_create_entry").submit();
		});

		$("#create_type2").click(function()
		{
			$("#create_entry").val("2");
			$("#form_create_entry").submit();
		});

		$("#create_type3").click(function()
		{
			$("#create_entry").val("3");
			$("#form_create_entry").submit();
		});

		$("#create_type4").click(function()
		{
			$("#create_entry").val("4");
			$("#form_create_entry").submit();
		});

		$("#create_type5").click(function()
		{
			$("#create_entry").val("5");
			$("#form_create_entry").submit();
		});

		$(".form_remove_content").each(function(i, obj){
			var j = $(obj);
			j.click(function()
			{
				j.submit();
			});
		});

		$(".form_remove_page").each(function(i, obj){
			var j = $(obj);
			j.click(function()
			{
				j.submit();
			});
		});
	}
}

//add the load event on start of the webpage
document.addEventListener("DOMContentLoaded", load, false);