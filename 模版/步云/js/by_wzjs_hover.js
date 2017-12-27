// JavaScript Document
$(function(){
	var by_wzjs_dqck=$(window).width();
	if(by_wzjs_dqck>=1300){
		$(".by_wzjs_con2_p").hover(function(){
			$(this).find(".by_wzjs_con2_bg").animate({"height":"148","top":0});
			$(this).css("color","#fff");
		},function(){
			$(this).find(".by_wzjs_con2_bg").animate({"height":"0","top":74});
			$(this).css("color","#666");
		});
	}
	
});