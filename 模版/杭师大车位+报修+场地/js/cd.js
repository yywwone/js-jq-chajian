// JavaScript Document
$(document).ready(function(){
	var swidth=$(".banner li").width()+28;
	var index=0
	var leng=$(".banner li").length; 
	var dwidth=$(".banner").width()
	function showpic()
	{
		
		
	var j=index*-swidth	
	
	$(".banner").stop().animate({"left":j},200)	
	}
	$(".next").click(function(){
	index++
	if(index==leng-1)
	{	
		index=0
	}	
	showpic(index)
		})
	$(".nextup").click(function(){
	index--
	if(index==-1)
	{	
		$(".banner").stop().css("left","dwidth")
		index=leng-2
		
	}	
	showpic(index)
		})  	  
	
});