// JavaScript Document
$(function(){
	//搜索栏 热点提示 显示 隐藏
	var a=0;
	$(".search input").click(function(){
		if(a==1){
			a=0;
		}else{
			if(!$(".search-hot").is(":animated")){
			$(".search-hot").slideToggle(300);
		}
		}
	});
	$(".search input").focus(function(){
		$(".search-hot").slideDown();
		a=1;
	});
	$(".search input").blur(function(){
		$(".search-hot").slideUp();
	});
	$(".search input").keydown(function(){
		$(".search-hot").slideUp();
	});
	
});