// JavaScript Document
/*效果图展示*/
$(function(){
	$(".img-show6").click(function(){
		$(".img-show").attr('src',$(this).attr("src"))
		$(this).addclass()
	})
});