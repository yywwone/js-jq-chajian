// JavaScript Document
$(function(){
	$(".zbyq strong").each(function(){
		var a=$(this).text();
		$(this).attr("show",a)
		var b=a.length;
		if(b>50){
		var c=a.substring(0,50)
		$(this).text(""+c+"");
		$(this).siblings(".xiangxixinxi").show();
		}
	});
	$(".xiangxixinxi").click(function(){
			if($(this).is(".show")){
				var c=$(this).siblings("strong").text();
				var d=c.length;
					if(d>50){
						var e=c.substring(0,50)
						$(this).siblings("strong").text(""+e+"");
						$(this).removeClass("show");
					}
			}else{
				var text=$(this).siblings("strong").attr("show");
				$(this).siblings("strong").text(""+text+"");
				$(this).addClass("show");
			}
			
		
	});
	$(".toubiao").click(function(){
		$(".toubiaoxinxi").show();
		$(".toubiaoxinxi").delay(2000).fadeOut();
		var bianhao=$(this).parents(".main-left-con-box").find(".bianhao").text();
		$.ajax({
			type: "post",  //get   
			url: "",  //html  txt  xml  php  jsp 
			data: ""+bianhao+"", //传给服务器的数据
			dataType:"",
			success: function(data){  //data存返回数据
				
			}
		});
	});
});/*结束*/