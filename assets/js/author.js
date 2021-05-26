$(document).ready(function () {
	$(".ql-editor").attr("name", "textcont");
	
	var mySpan = $(".ql-editor").children();
	var myHTML = $('<div/>').append(mySpan.clone()).html();
	$("#content").html(myHTML);
	window.setInterval(ganttEach, 500);
});
function ganttEach() {
	$(".ql-editor").attr("name", "textcont");

	var mySpan = $(".ql-editor").children();
	var myHTML = $('<div/>').append(mySpan.clone()).html();
	$("#content").html(myHTML);
}