// JavaScript Document
$(function(){
	$(".bx_qt_li").hover(function(){
		$(this).find("ul").stop(true,true).slideDown();
	},function(){
		$(this).find("ul").stop(true,true).slideUp();
	});
	
});/*结束*/























