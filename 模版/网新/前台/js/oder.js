;(function(){
	var index6
	//选项卡切换内容
	$(".tab-nav li").click(function(){
		index6=$(this).index()
		$(".all-oder").eq(index6).show().siblings().hide()
		$(".tab-nav li").eq(index6).css({"color":"#666666","background-color":"#fff"})
		.siblings().css({"color":"#fff","background-color":"#233B83"})
	}).eq(0).trigger("click")
})()
