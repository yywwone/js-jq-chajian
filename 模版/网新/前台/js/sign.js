;(function(){
	//验证用户名是否为空
	var nid=$(".worn-tel1")
	function show1(){
		if(nid.val()=="")
		{
		$(".marsk-tips").fadeIn() 
		$(".marsk-tips").text("用户名不能为空")
			if($(".marsk-tips").fadeIn())
			{
				setTimeout(function () {   
	            $('.marsk-tips').fadeOut();  
	        	},1500);  
			}	
		}
		else
		{
			var gps=nid.val()
			var reg= /^[\u4E00-\u9FA5]+$/;
			if(!reg.test(gps))
			{
				$(".marsk-tips").fadeIn() 
				$(".marsk-tips").text("输入有误重新输入")
				setTimeout(function (){   
				$('.marsk-tips').fadeOut();  
				},1200);
				return false			
			}
		}
	}
	$(".worn-tel1").blur(function(){
		show1()
		var nid=$(".worn-tel1").val();
		console.log(nid)
	})
	//验证手机号是否正确
	$(".js-tel").blur(function(){
		var tel=$(".js-tel").val()
		var dtel=/^1[3|4|5|6|7|8][0-9]\d{4,8}$/
		if($(".js-tel").val().length==0)
		{
			$(".marsk-tips").fadeIn() 
			$(".marsk-tips").text("手机号为空")
			if($(".marsk-tips").fadeIn())
			{
				setTimeout(function () {   
	            $('.marsk-tips').fadeOut();  
	        	},1200);  
			}
			return false
		}
		else
		{	
			if($(".js-tel").val().length!=11)
			{
				$(".marsk-tips").fadeIn() 
				$(".marsk-tips").text("手机号格式不正确")
					setTimeout(function () {   
		            $('.marsk-tips').fadeOut();  
		        	},1200);
		        return false	
			}
			else
			{
				if(!dtel.test(tel))
				{
					$(".marsk-tips").fadeIn() 
					$(".marsk-tips").text("手机号码输入有误")
					setTimeout(function (){   
					$('.marsk-tips').fadeOut();  
					},1200);
					return false	
				}
				else
				{
					
				}
			}
			
		}
	})
	//验证 公司名字是否正确
	$(".js-company").blur(function(){
		var com=$(".js-company").val()
		console.log(com.length)
		if(com.length<=1)
		{
			$(".marsk-tips").fadeIn() 
			$(".marsk-tips").text("公司输入有误")
			setTimeout(function (){   
			$('.marsk-tips').fadeOut();  
			},1200);  	
		}
		
	})
	//验证密码是否一致
	var pas1
	var pas2
	$(".js-password1").blur(function(){
		pas1=$(".js-password1").val()
		if(pas1.length<=6)
		{
		  $(".marsk-tips").fadeIn() 
			$(".marsk-tips").text("密码长度6位以上")
			setTimeout(function (){   
			$('.marsk-tips').fadeOut();  
			},1200);  	
		}
		$(".js-password1").val("")
		console.log(pas1)
	})
	
	$(".js-password2").blur(function(){
		pas2=$(".js-password2").val()
		if(pas1!=pas2)
		{
			$(".marsk-tips").fadeIn() 
			$(".marsk-tips").text("密码不一致")
			setTimeout(function (){   
			$('.marsk-tips').fadeOut();  
			},1200);  		
		}
	})
	
	
})()
