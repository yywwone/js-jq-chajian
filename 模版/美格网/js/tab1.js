// JavaScript Document
$(function(){
	$(".tit li").click(function(){
		var a;
		a=$(this).index();
		$(".tab").eq(a).show().siblings().hide();
		$(".tit li").eq(a).addClass("active").siblings().removeClass("active")
		
	})
	$('.tit li').eq(0).trigger("click")
});




