// JavaScript Document
/*地区选择*/
$(function(){
	$(".work_dq_box li").click(function(){
		var a=$(this).index();
		$(".work_dq_box1 ul").eq(a).show().siblings().hide();
		
	});
});