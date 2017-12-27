// JavaScript Document
$(function(){
	$(".bx_qt_zxkf").hover(function(){
		$(".bx_qt_zxkf").stop(true,true).animate({right:"0"},500)
	},function(){
		$(".bx_qt_zxkf").stop(true,true).animate({right:"-155"},500)
	});
});