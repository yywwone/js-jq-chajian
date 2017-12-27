// JavaScript Document
$(function(){
	$(".tit").click(function(){
		var index_tit=$(this).index();
		$(this).addClass("active").siblings().removeClass("active")
		$(".form_box form").eq(index_tit).show().siblings().hide();
	});
	$(".tit").eq(0).trigger("click");
});/*结束*/