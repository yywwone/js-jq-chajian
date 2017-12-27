// JavaScript Document
$(function(){
	var a=$('#fuwu .row').height();
	$("#fuwu-box").css("height",a);
	var index=0
	var picTimer;
	picTimer=setInterval(function(){
				index++;			
				if(index==3){index=1;$("#fuwu").css("top","0")};
				showPics(index);
			},2000);
	
	
	function showPics(index){
		var a=$('#fuwu .row').height();
		$("#fuwu-box").css("height",a);
		var nowTop=-index*a;
		$("#fuwu").stop(true,false).animate({'top':nowTop},300);
		
		
	}
	
		
});
