// JavaScript Document
$(function(){
	/*用户名验证*/
	$(".wjmm_userName").blur(function(){	
		var wjmm_userName_val=$(this).val();
		if(wjmm_userName_val!=""){
			$.ajax({
			type: "post",  //get   
			url: "",  //html  txt  xml  php  jsp 
			data: ""+wjmm_userName_val+""  , //传给服务器的数据
			dataType:"",
			success: function(data){  //data存返回数据
					if(data==1){
						$(".wjmm_zz").hide();
					}else{
						$(".wjmm_userName").val("");
						$(".wjmm_zz").show();
						}
				}
			});
		}
		
	});
	/*手机号验证*/
	$(".wjmm_tel").blur(function(){
		var wjmm_userName_val=$(".wjmm_userName").val();
		var wjmm_tel_val=$(this).val();
		if(wjmm_tel_val!=""){
			$.ajax({
				type: "get",  //get   
				url: "",  //html  txt  xml  php  jsp 
				data: "用户名:"+wjmm_userName_val+"手机号:"+wjmm_tel_val+"" , //传给服务器的数据
				dataType:"",
				success: function(data){  //data存返回数据
					if(data==1){
						$(".wjmm_zz1").hide();	
					}else{
						$(".wjmm_tel").val("");
						$(".wjmm_zz1").show();	
					}
				}
			});
		}		
	});
	/*密码验证*/
	$(".wjmm_pad").blur(function(){
		var wjmm_pad_val=$(this).val();
		if(wjmm_pad_val!=""){
			var leng=wjmm_pad_val.length;
			if(leng<6){
				$(this).val("");
				$(".wjmm_zz2").show();	
			}else{
				$(".wjmm_zz2").hide();
			}
		}
		
	});
	/*重复密码验证*/
	$(".wjmm_pad1").blur(function(){
		var wjmm_pad1_val=$(this).val();
		if(wjmm_pad1_val!=""){
			var wjmm_pad_val=$(".wjmm_pad").val();
			if(wjmm_pad1_val!=wjmm_pad_val){
				$(this).val("");
				$(".wjmm_zz3").show();	
			}else{
				$(".wjmm_zz3").hide();
			}
		}	
	});
});/*结束*/