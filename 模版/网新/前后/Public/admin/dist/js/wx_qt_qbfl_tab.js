// JavaScript Document
$(function(){
	$(".wx_qbfl_nav").click(function(){
		var cbdh_index=$(this).index();
		$(this).addClass("wx_qbfl_nav_active").siblings().removeClass("wx_qbfl_nav_active");
		$(".wx_qbfl_nav_main_box").eq(cbdh_index).show().siblings().hide();
		
	}).eq(0).trigger("click");
	/*侧边栏高度设置*/
		var cbdh_height=$(window).height();
		var cbdh_foot_height=$(".wx_qt_foot_zw").outerHeight();
		var cbdh_height1=(cbdh_height-cbdh_foot_height)/5.5;
		console.log(cbdh_height)
		console.log(cbdh_foot_height)
		console.log(cbdh_height1)
		$(".wx_qbfl_nav").css("height",cbdh_height1);
});