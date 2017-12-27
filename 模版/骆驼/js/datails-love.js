// JavaScript Document
$(function(){
	var i=0;
	var a=parseInt($(".love-number").text());
	$(".datails-love").click(function(){
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