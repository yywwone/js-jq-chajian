$(document).ready(function(){
	//验证密码长度
	$(".worn-1").blur(function(){
		console.log("1")
		var pal=$(".worn-1").val().length
		console.log(pal)
		if(pal<=6)
		{
			alert("新密码长度长度不符合")
		}
	})
	//点击切换眼睛	
	$(".jicon-a").click(function(){
		$(".jicon-a").toggleClass("js-icon1")
		if($(".worn-1").attr("type")=="password")
		{
			$(".worn-1").attr("type","text");
		}
		else
		{
			$(".worn-1").attr("type","password");
		}
	})
	
	//点击切换眼睛	
	$(".jicon-b").click(function(){
		$(".jicon-b").toggleClass("js-icon1")
		if($(".worn-2").attr("type")=="password")
		{
			$(".worn-2").attr("type","text");
		}
		else
		{
			$(".worn-2").attr("type","password");
		}
	})
	
	//判断是否一致
	$(".worn-2").blur(function(){
		var worn1=$(".worn-1").val();
		var worn2=$(".worn-2").val();
		if(worn1==worn2)
		{	
			$(".tips").text("")	
		}
		else
		{	
			$(".tips").html("!&nbsp;输入不一致")	
		}
	})
})
