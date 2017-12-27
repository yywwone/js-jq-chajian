;(function(){
	var nid=$(".js-cpany")
	function show8(){
		if(nid.val()=="")
		{
		$(".marsk-tips88").fadeIn() 
		$(".marsk-tips88").text("用户名不能为空")
			if($(".marsk-tips88").fadeIn())
			{
				setTimeout(function () {   
	            $('.marsk-tips88').fadeOut();  
	        	},1500);  
			}	
		}
		else
		{
			var gps=nid.val()
			var reg= /^[\u4E00-\u9FA5]+$/;
			if(!reg.test(gps))
			{
				$(".marsk-tips88").fadeIn() 
				$(".marsk-tips88").text("输入有误重新输入")
				setTimeout(function (){   
				$('.marsk-tips88').fadeOut();  
				},1200);
				return false			
			}
		}
	}
	$(".js-cpany").blur(function(){
		show8()
		var nid=$(".js-cpany").val();
		console.log(nid)
	})
	//验证用户名是否为空
	
	var nid1=$(".js-man")
	function show8(){
		if(nid1.val()=="")
		{
		$(".marsk-tips88").fadeIn() 
		$(".marsk-tips88").text("此为必填项")
			if($(".marsk-tips88").fadeIn())
			{
				setTimeout(function () {   
	            $('.marsk-tips88').fadeOut();  
	        	},1500);  
			}	
		}
		else
		{
			var gps=nid1.val()
			var reg= /^[\u4E00-\u9FA5]+$/;
			if(!reg.test(gps))
			{
				$(".marsk-tips88").fadeIn() 
				$(".marsk-tips88").text("输入有误重新输入")
				setTimeout(function (){   
				$('.marsk-tips88').fadeOut();  
				},1200);
				return false			
			}
		}
	}
	$(".js-man").blur(function(){
		show8()
		var nid1=$(".js-man").val();
	})
	
	
	//验证地址是否填写
	var nid2=$(".js-gps")
	function show8(){
		if(nid2.val()=="")
		{
		$(".marsk-tips88").fadeIn() 
		$(".marsk-tips88").text("此为必填项")
			if($(".marsk-tips88").fadeIn())
			{
				setTimeout(function () {   
	            $('.marsk-tips88').fadeOut();  
	        	},1500);  
			}	
		}
		else
		{
			var gps=nid2.val()
			var reg= /^[\u4E00-\u9FA5]+$/;
			if(!reg.test(gps))
			{
				$(".marsk-tips88").fadeIn() 
				$(".marsk-tips88").text("输入有误重新输入")
				setTimeout(function (){   
				$('.marsk-tips88').fadeOut();  
				},1200);
				return false			
			}
		}
	}
	$(".js-gps").blur(function(){
		show8()
		var nid1=$(".js-gps").val();
	})
	//验证手机号码
	$(".js-tel1").blur(function(){
		var tel1=$(".js-tel1").val()
		var dtel1=/^1[3|4|5|6|7|8][0-9]\d{4,8}$/
		if($(".js-tel1").val().length==0)
		{
			$(".marsk-tips88").fadeIn() 
			$(".marsk-tips88").text("手机号为空")
			if($(".marsk-tips88").fadeIn())
			{
				setTimeout(function () {   
	            $('.marsk-tips88').fadeOut();  
	        	},1200);  
			}
			return false
		}
		else
		{	
			if($(".js-tel1").val().length!=11)
			{
				$(".marsk-tips88").fadeIn() 
				$(".marsk-tips88").text("手机号格式不正确")
					setTimeout(function () {   
		            $('.marsk-tips88').fadeOut();  
		        	},1200);
		        return false	
			}
			else
			{
				if(!dtel1.test(tel1))
				{
					$(".marsk-tips88").fadeIn() 
					$(".marsk-tips88").text("手机号码输入有误")
					setTimeout(function (){   
					$('.marsk-tips88').fadeOut();  
					},1200);
					return false	
				}
				else
				{
					
				}
			}
			
		}
	})
	
	
	//验证主营业务
	
	var nid3=$(".zhu-y")
	function show8(){
		if(nid3.val()=="")
		{
		$(".marsk-tips88").fadeIn() 
		$(".marsk-tips88").text("此项不能为空")
			if($(".marsk-tips88").fadeIn())
			{
				setTimeout(function () {   
	            $('.marsk-tips88').fadeOut();  
	        	},1500);  
			}	
		}
		else
		{
			var gps3=nid3.val()
			var reg3= /^[\u4E00-\u9FA5]+$/;
			if(!reg3.test(gps3))
			{
				$(".marsk-tips88").fadeIn() 
				$(".marsk-tips88").text("输入有误重新输入")
				setTimeout(function (){   
				$('.marsk-tips88').fadeOut();  
				},1200);
				return false			
			}
		}
	}
	$(".zhu-y").blur(function(){
		show8()
		var nid3=$(".zhu-y").val();
		console.log(nid)
	})
	//diidi
	var nid4=$(".js-pep")
	function show8(){
		if(nid4.val()=="")
		{
		$(".marsk-tips88").fadeIn() 
		$(".marsk-tips88").text("此项不能为空")
			if($(".marsk-tips88").fadeIn())
			{
				setTimeout(function () {   
	            $('.marsk-tips88').fadeOut();  
	        	},1500);  
			}	
		}
		else
		{
			var gps4=nid4.val()
			var reg4= /^[\u4E00-\u9FA5]+$/;
			if(!reg4.test(gps4))
			{
				$(".marsk-tips88").fadeIn() 
				$(".marsk-tips88").text("输入有误重新输入")
				setTimeout(function (){   
				$('.marsk-tips88').fadeOut();  
				},1200);
				return false			
			}
		}
	}
	$(".js-pep").blur(function(){
		show8()
		var nid3=$(".js-pep").val();
		console.log(nid)
	})
	
	//2222
	var nid5=$(".js-di")
	function show8(){
		if(nid5.val()=="")
		{
		$(".marsk-tips88").fadeIn() 
		$(".marsk-tips88").text("此项不能为空")
			if($(".marsk-tips88").fadeIn())
			{
				setTimeout(function () {   
	            $('.marsk-tips88').fadeOut();  
	        	},1500);  
			}	
		}
		else
		{
			var gps5=nid5.val()
			var reg5= /^[\u4E00-\u9FA5]+$/;
			if(!reg5.test(gps5))
			{
				$(".marsk-tips88").fadeIn() 
				$(".marsk-tips88").text("输入有误重新输入")
				setTimeout(function (){   
				$('.marsk-tips88').fadeOut();  
				},1200);
				return false			
			}
		}
	}
	$(".js-di").blur(function(){
		show8()
		var nid5=$(".js-di").val();
		console.log(nid)
	})
	
	//阿萨德
	
	var nid6=$(".js-dd")
	function show8(){
		if(nid6.val()=="")
		{
		$(".marsk-tips88").fadeIn() 
		$(".marsk-tips88").text("此项不能为空")
			if($(".marsk-tips88").fadeIn())
			{
				setTimeout(function () {   
	            $('.marsk-tips88').fadeOut();  
	        	},1500);  
			}	
		}
		else
		{
			var gps6=nid6.val()
			var reg6= /^[\u4E00-\u9FA5]+$/;
			if(!reg6.test(gps6))
			{
				$(".marsk-tips88").fadeIn() 
				$(".marsk-tips88").text("输入有误重新输入")
				setTimeout(function (){   
				$('.marsk-tips88').fadeOut();  
				},1200);
				return false			
			}
		}
	}
	$(".js-dd").blur(function(){
		show8()
		var nid6=$(".js-dd").val();
		console.log(nid)
	})
	
	
	//文字
	function txt()
	{
		if($(".txt3").val()=="")
		{
			$(".txt3").val("请输入公司主要指标（营业收入/软件业务收入/利润总额/税金总额/研发经费)").css("color","#999")
		
		}
		else
		{
			$(".txt3").css("color","#333333")
		}
	}
	txt()
	$(".txt3").focus(function(){
		
		$(".txt3").val("").css("color","#333333")
		
	}).blur(function(){
		txt()
		
	})
	
	//下txt2
	
	function txt2(){
		if($(".txt2").val()=="")
		{
			$(".txt2").val("请输入“新四军”创业人数（大学生/大企业高管及其他连续/科技人员/留学归国人员创业者）").css("color","#999")	
		}
		else
		{
			$(".txt2").css("color","#333333")
		}
	}
	txt2()
	$(".txt2").focus(function(){
		$(".txt2").val("")
	}).blur(function(){
		txt2()
	})
	
})()
