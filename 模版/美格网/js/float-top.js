//浮动返回顶部
var advInitTop=0;


function move()
{
	var sTop;
	//浏览器兼容
	sTop=document.documentElement.scrollTop == 0 ? document.body.scrollTop:document.documentElement.scrollTop;
	if(sTop>200){
	document.getElementById("float-top").style.display="block";	
	}else{
		document.getElementById("float-top").style.display="none"
	}
	
}

window.onscroll=move;




