// JavaScript Document
$(function(){
	$(".my_remove").click(function(){
		$(this).parents(".my_wdjl_con").remove();
	});
	
	$(".my_wdjl_tit span").click(function(){
		$(this).addClass("my_wdjl_active").siblings().removeClass("my_wdjl_active")
		var my_wdjl_index=$(this).index();
		$(".my_wdjl_box").eq(my_wdjl_index).show().siblings().hide();
	});
	$(".my_wdjl_tit span").eq(0).trigger("click");
});/*结束*/