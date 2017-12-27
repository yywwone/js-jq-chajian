// JavaScript Document
$(function(){
	var by_wlyx_width=$(window).width()
	if(by_wlyx_width>768){
		$(".by_wlyx_con_right_imgbox").hover(function(){
			$(this).find("img").eq(0).hide().siblings().show();
		},function(){
			$(this).find("img").eq(1).hide().siblings().show();
		});
	}
	
});



















