// JavaScript Document
$(function(){
	/*新闻*/
	var len=$('.bx_qt_index_dt_con').length;//获取焦点图个数	
	var index=1;
	var picTimer;
	var bx_qt_index_dt=$(".bx_qt_index_dt_con_box_slider_box1").html();
		$(".bx_qt_index_dt_con_box_slider_box2").html(bx_qt_index_dt);
	/*案例*/
	var len1=$('.bx_qt_index_dt_al_con').length;//获取焦点图个数	
	var index1=1;
	var picTimer1;
	var bx_qt_index_dt=$(".bx_qt_index_dt_al_con_box_slider_box1").html();
		$(".bx_qt_index_dt_al_con_box_slider_box2").html(bx_qt_index_dt);
	/*新闻*/
	//鼠标划上焦点图时停止自动播放，划出时开始自动播放
	$('.bx_qt_index_dt_con_box').hover(function(){
		clearInterval(picTimer);
	},function(){
		picTimer=setInterval(function(){		
			if(index==len+1){
				index=1;
				$(".bx_qt_index_dt_con_box_slider_box").css({top:0,left:0});
			};
			showPics(index);
			index++;	
		},5000);//自动播放间隔5秒
	}).trigger('mouseleave');//模拟鼠标穿出
	/*案例*/
	//鼠标划上焦点图时停止自动播放，划出时开始自动播放
	$('.bx_qt_index_dt_al_con_box').hover(function(){
		clearInterval(picTimer1);
	},function(){
		picTimer1=setInterval(function(){		
			if(index1==len1+1){
				index1=1;
				$(".bx_qt_index_dt_al_con_box_slider_box").css({top:0,left:0});
			};
			showPics1(index1);
			index1++;	
		},5000);//自动播放间隔5秒
	}).trigger('mouseleave');//模拟鼠标穿出
	/*新闻*/
		function showPics(d)//普通切换
	{
		var a=$('.bx_qt_index_dt_con').innerWidth();
		var b=a+97;
		var c=b*d
		$('.bx_qt_index_dt_con_box_slider_box').stop(true,false).animate({'left':-c},300);
	}
	/*案例*/
		function showPics1(d)//普通切换
	{
		var a=$('.bx_qt_index_dt_al_con').innerWidth();
		var b=a+97;
		var c=b*d
		$('.bx_qt_index_dt_al_con_box_slider_box').stop(true,false).animate({'left':-c},300);
	}
});/*结束*/
