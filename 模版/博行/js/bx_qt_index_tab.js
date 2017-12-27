// JavaScript Document
$(function(){
	/*团队*/
	$(".bx_qt_index_td_tit_left p").click(function(){	$(this).addClass("bx_qt_index_td_tit_left_active").siblings().removeClass("bx_qt_index_td_tit_left_active");
		var bx_qt_index_td_tit_left_tit=$(this).index();
		$(".bx_qt_index_td_con_box1").eq(bx_qt_index_td_tit_left_tit).show().siblings().hide();
	}).eq(1).trigger("click");
	/*动态*/
	$(".bx_qt_index_dt_tit_left span").click(function(){	$(this).addClass("bx_qt_index_dt_tit_left_active").siblings().removeClass("bx_qt_index_dt_tit_left_active");
		var bx_qt_index_dt_tit_left_tit=$(this).index();
		if(bx_qt_index_dt_tit_left_tit==0){
			$(".bx_qt_index_dt_new").show();
			$(".bx_qt_index_dt_al").hide();
		}
	    if(bx_qt_index_dt_tit_left_tit==1){
			$(".bx_qt_index_dt_new").hide();
			$(".bx_qt_index_dt_al").show();
		}
	}).eq(0).trigger("click");
});/*结束*/























