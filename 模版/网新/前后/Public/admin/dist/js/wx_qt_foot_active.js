$(function(){
	var a=$(".wx_qt_dbgdl_active").text();
	$(".wx_qt_foot_main_con").eq(a).addClass("wx_qt_foot_main_con_active").siblings().removeClass("wx_qt_foot_main_con_active")
});