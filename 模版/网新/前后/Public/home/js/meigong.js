// JavaScript Document
$(document).ready(function(){
	$(".back .col-md-12").eq(0).show().siblings(".col-md-12").hide()
	var length=$(".back .col-md-12").length
	var index=0
	var mytimer
	function showpic(d){
	$(".back .col-md-12").eq(d).fadeIn(1000).siblings().fadeOut(800)	
	}
	$(".back").hover(function(){
			clearInterval(mytimer)
			},function(){
			mytimer=setInterval(function(){
			index++		
			if(index==length){
			index=0}
			showpic(index)	
			},2000)	
			}).trigger("mouseleave")
	$(".right1").click(function(){
			clearInterval(mytimer)
			index++
			if(index==length)
			{index=0}
			showpic(index)
		})
	$(".left1").click(function(){
			clearInterval(mytimer)
			index--	
			if(index==-1){
			index=length-1
			}
			showpic(index)
			})	
});