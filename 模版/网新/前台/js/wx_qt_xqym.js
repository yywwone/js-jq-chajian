// JavaScript Document
$(function(){
	$(".wx_qt_xqym_tab_tit").click(function(){
		var wx_qt_xqym_tab_tit_index=$(this).index();
		$(this).addClass("wx_qt_xqym_tab_tit_hover").siblings().removeClass("wx_qt_xqym_tab_tit_hover");
		$(".wx_qt_xqym_tab_con").eq(wx_qt_xqym_tab_tit_index).show().siblings().hide();
	}).eq(0).trigger("click");
});






