// JavaScript Document
$(function(){
	$(".my_xgmm_pad").blur(function(){
		var a=$(this).val();
		var b=a.length;
		if(b<6){
			$(this).val("");
			$(".resume_xxts").show().text("请输入6位以上密码");
			$(".resume_xxts").delay(2000).fadeOut();
			
		}
	});
		$(".my_xgmm_pad1").blur(function(){
		var a=$(this).val();
		var b=$(".my_xgmm_pad").val();
		if(a!=b){
			$(this).val("");
			$(".resume_xxts").show().text("两次密码输入不一致");
			$(".resume_xxts").delay(2000).fadeOut();
			
		}
	});
});/*结束*/