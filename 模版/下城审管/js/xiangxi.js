// JavaScript Document
$(function(){
		$(".index_con_text").click(function(){
			if($(this).is(".show")){
				var c=$(this).text();
				var d=c.length;
					if(d>50){
						var e=c.substring(0,50)
						$(this).text(""+e+"");
						$(this).removeClass("show");
						$(this).parents(".index_con_box").find(".icon2 use").attr("xlink:href","#icon-arrow");
						$(this).parents(".index_con_box").addClass("index_con_active").siblings().removeClass("index_con_active");
						
					}
			}else{
				var text=$(this).attr("show");
				$(this).text(""+text+"");
				$(this).addClass("show");
				$(this).parents(".index_con_box").find(".icon2 use").attr("xlink:href","#icon-icon");
				$(this).parents(".index_con_box").addClass("index_con_active").siblings().removeClass("index_con_active");
			}
			
		
	});
		function GetQueryString(name)
	{
		 var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
		 var r = window.location.search.substr(1).match(reg);
		 if(r!=null)return  unescape(r[2]); return null;
	}
	var myurl=GetQueryString("id");
	$(".index_con_box").each(function(){
		if($(this).is("#a"+myurl+"")){
			
			$(this).find(".index_con_text").trigger("click")
		}
	});
	$(".icon2").click(function(){
		$(this).parents(".index_con_box").find(".index_con_text").trigger("click");
	})

});

	
