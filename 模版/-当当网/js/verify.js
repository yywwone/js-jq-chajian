// JavaScript Document
//注册验证

$(function(){
		var Email=false;
		var userNameFlag=false;
		var password=false;
		var retype=false;
		
		$(".classname").focus(function(){
			$(this).removeClass("classname2").addClass("classname1").val("").siblings().hide().siblings(".normal").show();
		});
		$(".classname").blur(function(){
			//检验email
			if($(this).is("#txtEmail"))
				{	
					if(this.value==""||(this.value!=""&&!/^\w+@\w+\.[a-zA-Z]{2,3}(\.[a-zA-Z]{2,3})?$/.test(this.value)))
						{	
							$(this).removeClass("classname1").addClass("classname2").siblings().hide().siblings(".NO").show();
						}else{
							$(this).removeClass("classname1").siblings().hide().siblings(".OK").show();
							Email=true;
						}
				}
			//用户名验证
			if($(this).is("#txtName"))
				{
					if(this.value==""||(this.value!=""&&!/^[a-zA-Z][a-zA-Z0-9_]{3,15}$/.test(this.value)))
						{
							$(this).removeClass("classname1").addClass("classname2").siblings().hide().siblings(".NO").show();
						}else{
							$(this).removeClass("classname1").siblings().hide().siblings(".OK").show();
							userNameFlag=true;
						}	
				}
			//密码检验
			if($(this).is("#txtPass"))
				{
					if(this.value==""||(this.value!=""&&!/^[a-zA-Z0-9]{6,20}$/.test(this.value)))
						{
							$(this).removeClass("classname1").addClass("classname2").siblings().hide().siblings(".NO").show();
						}else{
							$(this).removeClass("classname1").siblings().hide().siblings(".OK").show();
							password=true;
						}	
				}
			//密码确认密码一致
			if($(this).is("#rePass"))
				{
					if($(this).val()!=$("#txtPass").val())
						{
							$(this).removeClass("classname1").addClass("classname2").siblings().hide().siblings(".NO").show();
						}else{
							$(this).removeClass("classname1").siblings().hide().siblings(".OK").show();
							retype=true;
						}	
				}
		});
	$("#myform").submit(function(){
		
		$(".classname").trigger('blur');
		if(userNameFlag==true&&Email==true&&password==true&&retype==true){
			return true;
		}else{return false;}
		
	});
});

