// JavaScript Document
//导航栏 更多 下拉菜单
$(function(){
	$(".nav_left_li4").hover(function(){
		
		$(this).find("p").addClass("nav_left_li4_p");
		$("#nav_left_li4_down-list").stop().slideDown();
	},function(){
		$(this).find("p").removeClass("nav_left_li4_p");
		$("#nav_left_li4_down-list").stop().slideUp();
	})
});