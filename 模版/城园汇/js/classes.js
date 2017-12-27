// JavaScript Document
$(function(){
	$(".classes").click(function(){
		
		$(this).addClass("active").siblings().removeClass("active");
		var price=$(this).attr("price")
		var model=$(this).text();
		$(".totlePrice").text("总计："+price+"元")
		$(".totlePrice1").text(model);
		$(".xz").val(model);
		$(".jg").val(price);
	});
});






































