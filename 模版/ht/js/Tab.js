// JavaScript Document
$(document).ready(function(){
	var index=0
	$(".list li").click(function(){	
		$(this).addClass("active").siblings().removeClass("active")
		var index=$(this).index()
		$(".tips1").text("")
		$(".tips2").text("")
		$(".tips3").text("")
		$(".tips5").text("")
		$(".form1 input[type=text]").val("")
		$(".main-box-r .box-1").eq(index).show().siblings().hide()
		}).eq(0).trigger("click")
				
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
	
	$(".date").blur(function(){
		var px1=$(".date").val()
		if(px1=="")
		{
			$(".tip4").text("请选择开始").css("color","#F00")
		}
		else
		{
			$(".tips5").text("")
		}
		})
		
	$(".pxx").blur(function(){
		var px1=$(".pxx").val()
		if(px1=="")
		{
			$(".tips5").text("请填写场地").css("color","#F00")
		}
		else
		{
			$(".tips5").text("")
		}
		
	})
	
	$(".number").blur(function(){
		var vnumber=$(".number").val()
		var bnumber= /^[京津沪渝冀豫云辽黑湘皖鲁新苏浙赣鄂桂甘晋蒙陕吉闽贵粤青藏川宁琼使领A-Z]{1}[A-Z]{1}[A-Z0-9]{4}[A-Z0-9挂学警港澳]{1}$/
		if(vnumber=="")
		{
			$(".tips5").text("请填写车牌").css("color","#F00")
		}
		else
		{
			if(!bnumber.test(vnumber))
  			{
			 $(".tips5").text("格式有误").css("color","#F00")
 	 		}
 			else
  			{
			 $(".tips5").text("格式正确").css("color","#0F0")
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
	
	

})