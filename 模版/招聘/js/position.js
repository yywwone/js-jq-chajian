// JavaScript Document
$(function(){
	var resume_zz_height=$(document.body).height();
	$(".resume_zz").css("height",resume_zz_height)
	$(".resume_con_ty").click(function(){
		$(".resume_zz").show();
		$(this).attr("disabled","disabled");
		$(this).siblings(".resume_hide").show();
	});	
	$(".resume_hide p").click(function(){
		var a=$(this).text();
		$(this).addClass("resume_active").siblings().removeClass("resume_active")
		$(".resume_zz").hide();
		$(".resume_hide").hide();
		$(".resume_con_ty").removeAttr("disabled")
		/*分类选择*/
		if($(this).parent().is(".position_hide_fl")){
			$(".position_fl").val(a);
		}
		/*学历选择*/
		if($(this).parent().is(".position_hide_education")){
			$(".position_education").val(a);
		}
		/*发布天数选择*/
		if($(this).parent().is(".position_hide_time")){
			$(".position_time").val(a);
		}
		
		
	});
	
	/*点击空白处遮罩层消失*/
	$(".resume_zz").click(function(){
		$(this).hide();
		$(".resume_hide").hide();
		$(".resume_con_ty").removeAttr("disabled");
	});
	
	/*多行文本框设置---发布职位*/
	$(".position_dhwb").val("请填写详细信息");
		$(".position_dhwb").css("color","#ccc");
		$(".position_dhwb").focus(function(){
			if($(this).val()==""||$(this).val()=="请填写详细信息"){
				$(this).val("");
				$(this).css("color","#000");
			}
		})
		$(".position_dhwb").blur(function(){
			if($(this).val()==""){
				$(this).val("请填写详细信息");
				$(this).css("color","#ccc");
			}
		});
		$(".position_form").submit(function(check){
			/*多行文本框检测---发布职位*/
			var c=$(".position_dhwb").val();
			var d=c.length;
			if(c==""||c=="请填写详细信息"||d<10){
				$(".resume_xxts").show();
				$(".resume_xxts").text("正文需10字以上");
				$(".resume_xxts").delay(2000).fadeOut();
				return false;
			}
			
		});
		/*标签样式*/
		var position_bq=new Array()
		$(".work_con_icon1").click(function(){
			$(this).toggleClass("work_con_icon1_color");
			$(".work_con_icon1").each(function(){
				if($(this).is(".work_con_icon1_color")){
					 position_bq=position_bq+$(this).text();
					$(".position_bq").val(""+position_bq+"");	
				}
			});	
				console.log($(".position_bq").val())
		});	
});/*初始化结束*/