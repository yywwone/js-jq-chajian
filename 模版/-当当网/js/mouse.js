// JavaScript Document
//登录页鼠标移入移出事件
$(function(){
	$(".login-button").hover(function(){
		$(this).addClass("login-button1");
	},function(){
		$(this).removeClass("login-button1");
	});
	$(".register-buttom").hover(function(){
		$(this).addClass("register-buttom1");
	},function(){
		$(this).removeClass("register-buttom1");
	});
});