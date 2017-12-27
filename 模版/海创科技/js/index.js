$(document).ready(function(){
	$(".list-nav-b li a").hover(function(){
		$(this).css("color","#5e92f2")
	},function(){
		$(this).css("color","#000")
	})
})
var index=0//控制走的值
var win=$(".window").width()//窗口的宽度
var len=$(".content1-box li").length//li的个数
var wid=$(".content1-box").width()
function show(data){
	
	var nowleft=index*-win
	$(".content1-box").stop().animate({"left":nowleft},1000)
}
$(".upup").click(function(){
		index++
		if(index==len)
		{	
			index=1
			$(".content1-box").css("left",0)
		}
		show(index)
})
$(".momo").click(function(){
		index--
		if(index==-1)
		{	
			index=len-2
			$(".content1-box").css("left",-wid)
			
		}
		show(index)
})

$(".cxx li").click(function(){
	 var indexl=$(this).index()
	 $(".haha .first").eq(indexl).show().siblings().hide()
}).eq(0).trigger("click")
