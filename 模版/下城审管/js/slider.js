// JavaScript Document
$(function(){
	var nowLeft=0;
	var len=$(".index_slider_con_box .index_con_box").size();//获取焦点图个数
	var index=0;
	var picTimer;
	var neirong=$(".index_slider_con_box").html();
	$(".index_slider_con_box1").html(neirong);
	var height=new Array()
	//鼠标划上焦点图时停止自动播放，划出时开始自动播放
		picTimer=setInterval(function(){
			$(".index_con_box").removeClass("index_con_box_active");
			if(index==len)
			{
				index=0;
				$(".bx_qt_index_dt_con_box_slider_box").css({top:0,left:0});
				nowLeft=0;
			};
			
			showPics(index);
			index++;
			$(".index_con_box").eq(index+2).addClass("index_con_box_active").siblings().removeClass("index_con_box_active");
		},3000);
		
	
	//显示图片函数，根据接受的index值显示相应内容
	function showPics(index)//普通切换
	{
		var a=$('.index_con_box').eq(index).innerHeight();
		nowLeft=nowLeft+a;
		$('.index_slider_con').stop(true,false).animate({'top':-nowLeft},300);//通过animate（）调整ul元素滚动到计算出的position
	}
	
});








