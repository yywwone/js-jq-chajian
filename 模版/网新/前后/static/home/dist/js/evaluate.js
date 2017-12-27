;(function(){
	var num=2
	var ipv
	$item=$(".js-star").find("li")
	//设置初始点亮
	var lighton=function(num){

			$item.each(function(index){
			
				if(index<num)
				{	
					$(this).css("background-position","0 0");
				}
				else
				{
					$(this).css("background-position","0 -0.185rem");
				}
			})	
		
	}
	
	//初始化
	lighton(num)
	//时间绑定
	
	$item.on("click",function(){
		num=$(this).index()+1
		lighton(num)
		ipv=$(".hide").val(num)
	})
	
	
	
})()
