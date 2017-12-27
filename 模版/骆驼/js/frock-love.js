// JavaScript Document
$(function(){
	var i=0;
	var a=parseInt($(".love-number").text());
	$(".span1").click(function(){
		if(i==0){
			$(".frock-love .glyphicon-heart").css("color","red");
			i=1;
			a++;
			$(".love-number").text(a);
			$(".love-reminder").fadeIn();
			$(".love-reminder").delay(1000).fadeOut()
				
		}else{
			$(".frock-love .glyphicon-heart").css("color","#000");
			i=0;
			a--;
			$(".love-number").text(a);
			$(".love-reminder1").fadeIn();
			$(".love-reminder1").delay(1000).fadeOut()
		}
	});
	$(".frock-love").click(function(){
			if(i==0){
			$(".glyphicon-heart").css("color","red");
			i=1;
			a++;
			$(".love-number").text(a);
				
		}else{
			$(".glyphicon-heart").css("color","#000");
			i=0;
			a--;
			$(".love-number").text(a);
		}
		
	});
});