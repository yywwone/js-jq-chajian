// JavaScript Document
//轮播图
$(function(){
	var sWidth=$('#main_center_scroll_center_view').height();//获取焦点图的宽度（显示面积）
	var len=$('#main_center_scroll_show li').length;//获取焦点图个数
	var index=0;
	var picTimer;
	
$('#main_center_scroll_number li').mouseover(function(){
		index=$('#main_center_scroll_number li').index(this);
		showPics(index);
	}
	).eq(0).trigger('mouseover');


	//鼠标划上焦点图时停止自动播放，划出时开始自动播放
$('#main_center_scroll_center').hover(function(){
		clearInterval(picTimer);
	},function(){
		picTimer=setInterval(function(){
			index++;
			if(index==len)
			{
				index=1;
				$("#main_center_scroll_show").css({top:0,left:0});
			}
			showPics(index);
			
		},1000);
	}).trigger('mouseout');
	
	//显示图片函数，根据接受的index值显示相应内容
	function showPics(index)//普通切换
	{
			var j=0;
		var nowLeft=-index*sWidth;//根据index值计算ul元素的left值
		$('#main_center_scroll_show').stop(true,false).animate({'top':nowLeft},300);//通过animate（）调整ul元素滚动到计算出的position
		if(index==len-1)
		{
			j=0;
		}
		else
		{
			j=index;
		}
		$('#main_center_scroll_number li').removeClass("on").eq(j).addClass("on");
	}
});