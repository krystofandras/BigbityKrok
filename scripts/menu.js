// JavaScript Document
var visible = false;
function showmenu(){
	visible = true;
	$("#bar").attr("href","javascript:hidemenu()");
	$(".mobilemenudown").css("left", "0%");
}
function hidemenu(){
	visible = false;
	$("#bar").attr("href","javascript:showmenu()");
	$(".mobilemenudown").css("left", "-110%");
}
