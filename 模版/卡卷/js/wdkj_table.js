// JavaScript Document
$(function(){
	$(".wdkj_con_tit").click(function(){
		var wdkj_con_tit=$(this).index();
		$(".wdkj_yhj").eq(wdkj_con_tit).show().siblings().hide();
	}).eq(0).trigger("click");
});
















