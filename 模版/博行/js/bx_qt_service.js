// JavaScript Document
$(function(){
	$(".bx_qt_service_fwbz").click(function(){
		var bx_qt_service_fwbz=$(this).index();
		$(".bx_qt_service_text").eq(bx_qt_service_fwbz).show().siblings().hide();
	}).eq(0).trigger("click");
});