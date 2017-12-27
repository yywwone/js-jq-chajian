// JavaScript Document
$(document).ready(function(){
  		var name=$(".name")
	    name.blur(function(){
		var nval=$(this).val()
		var nvad=/^[\u4E00-\u9FA5]{1,6}$/
		if(nval=="")
		{	
			$(".tips1").text("请填写名字").css("color","#F00")
		}
		else
		{
			if(!nvad.test(nval))
  			{
			 $(".tips1").text("输入有误").css("color","#F00")
 	 		}
 			else
  			{
			 $(".tips1").text("输入正确").css("color","#0F0")
  			}	
		}		
	})
	
	var pany=$(".company")
	pany.blur(function(){		
		if($(this).val()=="")
		{	
		$(".tips2").text("请填写公司").css("color","#F00")
		}
		else
		{
		$(".tips2").text("")
		}	
	 })
	 
	 	var phone=$(".phone")
		phone.blur(function(){	
		var tel=$(this).val()
		var dtel=/^1[3|4|5|8][0-9]\d{4,8}$/
		if(tel=="")
		{
			$(".tips3").text("请填手机号").css("color","#F00")
		}
		else
		{	
			if(!dtel.test(tel))
  			{
			 $(".tips3").text("格式有误").css("color","#F00")
 	 		}
 			else
  			{
			 $(".tips3").text("格式正确").css("color","#0F0")
  			}	
		}		
	})
	$(".tit").click(function(){
		var form=$(this).parent(".form1").find("input")
		var length=$(".form1 input").length
		for(i=0; i<=length; i++)
		{	
			if(form.eq(i).val()=="")
			{
				window.alert("未填写完全");
				 return false	
			}
		}
	})
	  
});
		