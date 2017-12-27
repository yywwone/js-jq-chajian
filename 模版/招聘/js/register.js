// JavaScript Document
$(function(){
	$(".register_une").blur(function(){
		var register_une=$(this).val();
		$.ajax({
			type: "post",  //get   
			url: "",  //html  txt  xml  php  jsp 
			data: ""+register_une+""  , //传给服务器的数据
			dataType:"",
			success: function(data){  //data存返回数据
				if(data==1){
					$(".register_zz").text("用户名已存在,请重新输入");
					$(".register_zz").show();
					$(".register_zz").delay(2000).fadeOut();
					$(".register_une").val("");
					
				}
			}
		});
	});
	$(".register_pad").blur(function(){
		var register_pad=$(this).val();
		var register_pad_length=register_pad.length
		if(register_pad_length<6){
			$(".register_zz").text("请输入6-12位密码");
			$(".register_zz").show();
			$(".register_zz").delay(2000).fadeOut();
			$(".register_pad").val("");
		}
	})
});/*结束*/