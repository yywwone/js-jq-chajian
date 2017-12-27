// JavaScript Document
/*招商引资选项卡*/
$(function(){
	$(".wx_qt_zsyz_main_tit ul li").click(function(){
		var wx_qt_zsyz_main_tit_ul_li=$(this).index();
			$(this).addClass("wx_qt_zsyz_main_tit_active");
			$(this).siblings().removeClass("wx_qt_zsyz_main_tit_active");
			$(".wx_qt_zsyz_main_con").eq(wx_qt_zsyz_main_tit_ul_li).show().siblings().hide();
	}).eq(0).trigger("click");
});