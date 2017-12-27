// JavaScript Document
/*首页猎头横拉*/
$(function(){
	var bx_qt_index_lt_slide=$(".bx_qt_index_lt_slide").html();
	$(".bx_qt_index_lt_slide2").html(bx_qt_index_lt_slide);
	/*猎头*/
	var len_lt=$('.bx_qt_index_lt_slide .bx_qt_index_td_con_box').length;//获取焦点图个数	
	var index_lt=0;
	var picTimerl2;
	//鼠标划上焦点图时停止自动播放，划出时开始自动播放
	$('.bx_qt_index_lt_box').hover(function(){
		clearInterval(picTimerl2);
	},function(){
		picTimerl2=setInterval(function(){		
			if(index_lt==len_lt+1){
				index_lt=1;
				$(".bx_qt_index_lt_slide_box").css({top:0,left:0});
			};
			showPicslt(index_lt);
			index_lt++;	
		},1000);//自动播放间隔5秒
	}).trigger('mouseleave');//模拟鼠标穿出
	/*新闻*/
		function showPicslt(d)//普通切换
	{
		var a=$('.bx_qt_index_td_con_box').innerWidth();
		var b=a+30;
		var c=b*d
		$('.bx_qt_index_lt_slide_box').stop(true,false).animate({'left':-c},300);
	}
});