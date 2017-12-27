// JavaScript Document
/*提及需求展示*/
var dome=document.getElementById("dome");
	var dome1=document.getElementById("dome1");
	var dome2=document.getElementById("dome2");
	var speed=50;
	dome2.innerHTML=dome1.innerHTML;
	function moveTop(){
		if(dome2.offsetTop-dome.scrollTop<=0)
			{
				dome.scrollTop=dome.scrollTop-dome1.offsetHeight
			}
		else{
			dome.scrollTop++
		}
	}
	var MyMar=setInterval(moveTop,speed);
	dome.onmouseover=function(){clearInterval(MyMar)};
	dome.onmouseout=function(){MyMar=setInterval(moveTop,speed)};