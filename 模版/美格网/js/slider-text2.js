// JavaScript Document
/*合作公司展示*/
var dome10=document.getElementById("dome10");
	var dome11=document.getElementById("dome11");
	var dome12=document.getElementById("dome12");
	var speed1=50;
	dome12.innerHTML=dome11.innerHTML
	function moveTop1(){
		if(dome12.offsetTop-dome10.scrollTop<=0)
			{
				
				dome10.scrollTop=dome10.scrollTop-dome11.offsetHeight
			}
		else{
			dome10.scrollTop++;
			
			 }
	}
	var MyMar1=setInterval(moveTop1,speed1);
	dome10.onmouseover=function(){clearInterval(MyMar1)};
	dome10.onmouseout=function(){MyMar1=setInterval(moveTop1,speed1)};