// JavaScript Document

$(function(){
	/*用户中心下拉菜单*/
	$(".my").hover(function(){
		$(".my-con").stop(true,true).slideDown();
		$(".my-icon").hide();
		$(".my-icon1").show();
	},function(){
		$(".my-con").stop(true,true).slideUp();
		$(".my-icon1").hide();
		$(".my-icon").show();
	});
	
	/*维修报修*/
	$(".tit li").click(function(){
		var a=$(this).index();
		$(".table").eq(a).show().siblings().hide();
		$(".tit li").eq(a).addClass("active").siblings().removeClass("active");
	});
	$(".tit li").eq(0).trigger("click");
	
	/*服务订单*/
	$(".tit1 li").click(function(){
		var a=$(this).index();
		$(".table1").eq(a).show().siblings().hide();
		$(".tit1 li").eq(a).addClass("active").siblings().removeClass("active");
	});
	$(".tit1 li").eq(0).trigger("click");
	/*投诉建议*/
	$(".tit2 li").click(function(){
		var a=$(this).index();
		$(".table2").eq(a).show().siblings().hide();
		$(".tit2 li").eq(a).addClass("active").siblings().removeClass("active");
	});
	$(".tit2 li").eq(0).trigger("click");
	/*设置*/
	$(".tit3 li").click(function(){
		var a=$(this).index();
		$(".form").eq(a).show().siblings().hide();
		$(".tit3 li").eq(a).addClass("active").siblings().removeClass("active");
	});
	$(".tit3 li").eq(1).trigger("click");
});

/*修改密码*/
$(function(){
	$(".pad").focus(function(){
		var a=$(".pad").val();
		var a1=a.length;
		var b=$(".pad1").val();
		var b1=b.length;
			$(".pad").val("");			
			$(".pad").css("border-color","#ccc");
			$(".pad1").css("border-color","#ccc");
			$(".ts1").hide();
			$(".ts").show();
		})
	$(".pad1").focus(function(){
		var a=$(".pad").val();
		var a1=a.length;
		var b=$(".pad1").val();
		var b1=b.length;
			$(".pad1").val("");
			$(".pad").css("border-color","#ccc");
			$(".pad1").css("border-color","#ccc");
			$(".ts1").hide();
			$(".ts").show();
		})
	
	$(".tj").click(function(){
	
		var a=$(".pad").val();
		var a1=a.length;
		var b=$(".pad1").val();
		var b1=b.length;
		if(a!=""&b!=""&a==b&a1>=6)
		{
			$.ajax({
				type:"post",
				url:"",
				data:"a",
				success:function(data){
					
					if(data==1){
						$(".pad").css("border-color","red");
						$(".pad1").css("border-color","red");
						$(".ts").hide();
						$(".ts1").show();
					}else{
						alert("修改成功")
					}	
				}
					
			})
			return false;
		}else{
			$(".pad").css("border-color","red");
			$(".pad1").css("border-color","red");
			$(".ts").hide();
			$(".ts1").show();
			
			return false;	
		}
		
	});
});


/*修改地址*/
$(function(){
	$(".tj1").click(function(){
		
		
		var b=$(".dy").val();
		
		if(b==""){
			$(".srdz").show();
			$(".dy").css("border-color","red");
			return false;
		}else{
			alert("修改成功");
			return false;
		}
		
		
	});
	
	$(".dy").focus(function(){
		$(".dy").css("border-color","#ccc");
		$(".srdz").hide();
	})
});
