// JavaScript Document
/*分类/区域显示隐藏*/
$(function(){
	$(".work_show_toggle").click(function(){
		var index=$(this).parent(".col-xs-5").index();
			$(".work_icon").text("∨");
			$(".work_show_toggle").css("color","#000");
			
			if($(".work_show").eq(index).is(":hidden")){
				$(this).css("color","red");
				$(this).find(".work_icon").text("∧");
				$(".work_show").eq(index).show().siblings().hide();
				$(this).find(".work_icon").eq(1).show().siblings().hide();
			}else{
				$(".work_show").hide();
				$(this).css("color","#000");
				$(this).find(".work_icon").text("∨");
				$(this).find(".work_icon").eq(0).show().siblings().hide();
			}
		
	});
	$(".work_show li a").click(function(){
		$(".work_con_box").show();
		$(".work_show li a").css("color","#000");
		$(".work_show").hide();
		$(".work_icon").text("∨");
		$(".work_show_toggle").css("color","#000");
		$(this).css("color","red");
		
		var a=$(this).text();
		$(".work_lx div p").each(function(){
			var b=$(this).text();
			if(a!=b){
				$(this).parents(".work_con_box").hide();
			};
			if(a=="全部"){$(".work_con_box").show();}
		});
		
	});
	
});