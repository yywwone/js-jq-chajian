// JavaScript Document
$(function(){
	$(".bx_qt_we_tit li").click(function(){
		$(this).addClass("bx_qt_we_tit_text").siblings().removeClass("bx_qt_we_tit_text");
		var bx_qt_we_tit=$(this).index();
		$(".bx_qt_we_main").eq(bx_qt_we_tit).show().siblings().hide();
	}).eq(0).trigger("click");
	/*标题li宽度设定*/
	var bx_qt_we_tit_li=$(".bx_qt_we_tit li").size();
	var bx_qt_we_tit_li_width=100/bx_qt_we_tit_li
	$(".bx_qt_we_tit li").width(bx_qt_we_tit_li_width+"%");
});/*结束*/