// JavaScript Document
//导航栏二级菜单显示隐藏

$(function(){
	var i;
	$(".nav-con li:not(:last)").hover(function(){
		$(".nav-con-none").show();
		i=$(this).index();
		$(".none-wrap").eq(i).show().siblings().hide();
	},function(){
		$(".nav-con-none").hide();
		
	});
	$(".nav-con-none").hover(function(){
		$(".nav-con-none").show();
	},function(){
		$(".nav-con-none").hide();
	});
});


















