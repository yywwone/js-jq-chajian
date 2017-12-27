(function(){
	var html=document.documentElement;//返回跟节点
	var hWidth=html.getBoundingClientRect().width;
	console.log(hWidth)
	html.style.fontSize=hWidth/16+"px";
	//1rem=20px; 
	})()