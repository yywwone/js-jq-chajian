// JavaScript Document
//对联广告
var advInitTop=0;
var advInitTop1=0;
var closeInitTop=0;
var closeInitTop1=0;
function inix()
{    
	 advInitTop=parseInt(document.getElementById("advLayer").style.top);
	 closeInitTop=parseInt(document.getElementById("closeLayer").style.top);
}
function move()
{
	var sTop;
	//浏览器兼容
	sTop=document.documentElement.scrollTop == 0 ? document.body.scrollTop:document.documentElement.scrollTop;
	document.getElementById("advLayer").style.top=advInitTop+sTop+"px";
	document.getElementById("closeLayer").style.top=closeInitTop+sTop+"px";
}
function closeMe()
{

	document.getElementById("advLayer").style.display="none";
	document.getElementById("closeLayer").style.display="none";
}
window.onscroll=move; //窗口的滚动事件，当页面滚动时调用move()函数
inix();