// JavaScript Document
/*广告位*/
$(function(){
	$(".main-ad li").hover(function(){
		$(this).find("div").show()
	},function(){
		$(this).find("div").hide()
	})
});