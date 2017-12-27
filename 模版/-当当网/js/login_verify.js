// JavaScript Document
//登录验证
$(function(){
		var Email=false;
		var userNameFlag=false;
		var password=false;	
		$(".classname").focus(function(){
			$(this).val('')
		})
		$(".classname").blur(function(){
			//检验email
			if($(this).is("#txtEmail"))
				{	
					if(this.value!=""&&/^\w+@\w+\.[a-zA-Z]{2,3}(\.[a-zA-Z]{2,3})?$/.test(this.value))
						{	
							Email=true;
						}
				}
			//用户名验证
			if($(this).is("#txtEmail"))
				{
					if(this.value!=""&&/^[a-zA-Z][a-zA-Z0-9_]{3,15}$/.test(this.value))
						{
							userNameFlag=true;
						}
				}
			//密码检验
			if($(this).is("#txtPass"))
				{
					if(this.value!=""&&/^[a-zA-Z0-9]{6,20}$/.test(this.value))
						{
							password=true;
						}							
				}
		});
	$("#myform").submit(function(){
		
		$(".classname").trigger('blur');
		if((userNameFlag==true||Email==true)&&password==true){
			return true;
		}else{
			alert("用户名/邮箱/密码 错误");
			$(".classname").val('');
			return false;
		}
		
	});
});