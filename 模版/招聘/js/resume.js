// JavaScript Document
/*简历登记页弹出层*/
$(function(){
	var resume_zz_height=$(document.body).height();
	$(".resume_zz").css("height",resume_zz_height)
	$(".resume_con_ty").click(function(){
		$(".resume_zz").show();
		$(this).attr("disabled","disabled");
		$(this).siblings(".resume_hide").show();
		/*性别选择*/
		//if($(this).is(".resume_con_sex")){}	
	});	
	$(".resume_hide p").click(function(){
		var a=$(this).text();
		$(this).addClass("resume_active").siblings().removeClass("resume_active")
		$(".resume_zz").hide();
		$(".resume_hide").hide();
		$(".resume_con_ty").removeAttr("disabled")
		/*性别选择*/
		if($(this).parent().is(".resume_hide_sex")){
			$(".resume_con_sex").val(a);
		}
		/*婚否选择*/
		if($(this).parent().is(".resume_hide_marry")){
			$(".resume_con_marry").val(a);
		}
		/*工作经验选择*/
		if($(this).parent().is(".resume_hide_gzjy")){
			$(".resume_con_gzjy").val(a);
		}
		/*学历选择*/
		if($(this).parent().is(".resume_hide_education")){
			$(".resume_con_education").val(a);
		}
		/*月薪选择*/
		if($(this).parent().is(".resume_hide_monthly")){
			$(".resume_con_monthly").val(a);
		}
		/*简历状态选择*/
		if($(this).parent().is(".resume_hide_state")){
			$(".resume_con_state").val(a);
		}
		
	});
	
	/*点击空白处遮罩层消失*/
	$(".resume_zz").click(function(){
		$(this).hide();
		$(".resume_hide").hide();
		$(".resume_con_ty").removeAttr("disabled");
	});
	/*手机号检测*/
	$(".resume_tel").blur(function(){
		var phone=$(this).val();
		 if(phone.length!=11){
			 $(".resume_xxts").show();
			 $(".resume_xxts").text("手机号长度不正确");
			 $(".resume_xxts").delay(2000).fadeOut();
			 $(".resume_tel").val("");
		 }else{
			 if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(phone))){
				 $(".resume_xxts").show();
				 $(".resume_xxts").text("手机号码有误");
			 	 $(".resume_xxts").delay(2000).fadeOut();
				 $(".resume_tel").val("");
			 }
		}
	});
	/*邮箱检测*/
	$(".resume_Email").blur(function(){
		var resume_Email=$(this).val();
		if(!(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/ .test(resume_Email))){
			$(".resume_xxts").show();
			$(".resume_xxts").text("邮箱有误");
			$(".resume_xxts").delay(2000).fadeOut();
			$(".resume_Email").val("");
		}
	});
	/*多行文本框设置---简历登记*/
	$(".resume_dhwb").val("请填写简历正文");
		$(".resume_dhwb").css("color","#ccc");
		$(".resume_dhwb").focus(function(){
			if($(this).val()==""||$(this).val()=="请填写简历正文"){
				$(this).val("");
				$(this).css("color","#000");
			}
		})
		$(".resume_dhwb").blur(function(){
			if($(this).val()==""){
				$(this).val("请填写简历正文");
				$(this).css("color","#ccc");
			}
		});
	
	
	$(".resume_form").submit(function(check){
		/*多行文本框检测---简历登记*/
		var a=$(".resume_dhwb").val();
		var b=a.length;
		if(a==""||a=="请填写简历正文"||b<10){
			$(".resume_xxts").show();
			$(".resume_xxts").text("正文需10字以上");
			$(".resume_xxts").delay(2000).fadeOut();
			return false;
		}
		
		/*照片检测*/
		var resume_src=$("#pic").attr("src");
		 if(resume_src==""){
			$(".resume_xxts").show();
			$(".resume_xxts").text("请上传照片");
			(".resume_xxts").delay(2000).fadeOut(); 
			  check.preventDefault();
			 return false
    	}
	});
	
});/*初始化结束*/