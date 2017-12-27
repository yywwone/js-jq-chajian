$(document).ready(function(){
	var yid=$(".worn-tel")
	var yidl=$(".worn-tel").val()
//用户名判断是否为空		
	function showl(){
		if(yid.val()=="")
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
//		$.ajax({
//			type:"get",
//			url:"",
//			data:"yidl"
//			success:function(data){
//				if()
//				{
//						
//				}
//			}
//		});
	}
	yid.blur(function(){		
			showl()
	})
//判断密码是否为空
	var pas=$(".js-password")
	function showb(){
		if(pas.val()=="")
		{	
			$(".marsk-tips").text("密码不能为空")
			$(".marsk-tips").fadeIn();
			$(".marsk-tips").delay(1000).fadeOut()
		}
	}
	pas.blur(function(){
		showb()
	})
	$(".btn-sub").click(function(){
			showb(); 
	        showl();
			return false
		
			
	})
})
