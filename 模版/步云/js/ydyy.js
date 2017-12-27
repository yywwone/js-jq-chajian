// JavaScript Document
$(function(){
	$(".by_ydyy_con_tab_text_box").click(function(){
		var ydyy_index=$(this).index();
		$(".by_ydyy_con_img img").eq(ydyy_index).show().siblings().hide();
		$(this).addClass("by_ydyy_con_tab_text_box1").siblings().removeClass("by_ydyy_con_tab_text_box1")
	}).eq(0).trigger("click");
});