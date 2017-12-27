// JavaScript Document
$(function(){
	/*标题li宽度设定*/
	var bx_qt_work_main_tit_li_sl=$(".bx_qt_work_main_tit li").size();
	var bx_qt_work_main_tit_li_width=100/bx_qt_work_main_tit_li_sl
	$(".bx_qt_work_main_tit li").width(bx_qt_work_main_tit_li_width+"%");
	/*标题ul宽度设定*/
	var yemiankuandu=$(".bx_qt_work_main").width();
	var bx_qt_work_main_tit_ul_width=yemiankuandu-160
	$(".bx_qt_work_main_tit_ul").width(bx_qt_work_main_tit_ul_width);
	/*找工作找人才切换*/
	$(".bx_qt_work_main_tit_ul li").click(function(){
		$(this).addClass("bx_qt_work_main_tit_ul_active").siblings().removeClass("bx_qt_work_main_tit_ul_active");
		var bx_work_tit=$(this).index();
		$(".bx_qt_work_main_con").eq(bx_work_tit).show().siblings().hide();
		$(".bx_qt_work_main_con_input").val("");
	}).eq(0).trigger("click");
	/*手机判断*/
	$(".bx_qt_work_main_con_input_tel").blur(function(){
		var a=$(this).val();
		var v=a.length;
		
		if(v!=11){
			 $(".bx_qt_work_tsxx").show().text("手机号长度错误");
				 $(".bx_qt_work_main_con_input_tel").val("");
				 $(".bx_qt_work_tsxx").delay(2000).fadeOut();
		}else{
			 if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(a))){
				 $(".bx_qt_work_tsxx").show().text("手机号格式错误");
				 $(".bx_qt_work_main_con_input_tel").val("");
				 $(".bx_qt_work_tsxx").delay(2000).fadeOut();
			 }
		}
			
	});
	$(".bx_qt_work_main_con_input_tel2").blur(function(){
		var a=$(this).val();
		var v=a.length;
		
		if(v!=11){
			 $(".bx_qt_work_tsxx").show().text("手机号长度错误");
				 $(".bx_qt_work_main_con_input_tel2").val("");
				 $(".bx_qt_work_tsxx").delay(2000).fadeOut();
		}else{
			 if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(a))){
				 $(".bx_qt_work_tsxx").show().text("手机号格式错误");
				 $(".bx_qt_work_main_con_input_tel2").val("");
				 $(".bx_qt_work_tsxx").delay(2000).fadeOut();
			 }
		}
			
	});
	
	
});/*结束*/