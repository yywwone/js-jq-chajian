// JavaScript Document
$(function(){
	$(".login_sub").click(function(){
		
		var register_une=$(".register_une").val();
		var register_pad=$(".register_pad").val();
		if(register_une!=""&&register_pad!=""){
			$.ajax({
				type: "post",  //get   
				url: "aaa.html",  //html  txt  xml  php  jsp 
				data: "用户名:"+register_une+"密码:"+register_pad+"" , //传给服务器的数据
				dataType:"",
				success: function(data){ //data存返回数据
					if(data==1){
						$(".register_zz").text("登录成功");
						$(".register_zz").show();
						$(".register_zz").delay(2000).fadeOut();
					}else{
						$(".register_zz").text("用户名/密码错误,请从新输入");
						$(".register_zz").show();
						$(".register_zz").delay(3000).fadeOut();
					}
				}
			});
		}else{
			$(".register_zz").text("帐号密码不能为空");
			$(".register_zz").show();
			$(".register_zz").delay(2000).fadeOut();
		}
	
	});
});/*结束*/