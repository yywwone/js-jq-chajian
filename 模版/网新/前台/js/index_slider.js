// JavaScript Document
/*首页轮播*/$(function(){
	var len=$('.wx_qt_index_slider_img img').length;//获取焦点图个数	
	var index=0;
	var picTimer;
	//鼠标划上焦点图时停止自动播放，划出时开始自动播放
	
		picTimer=setInterval(function(){
			index++;			
			if(index==len){index=0;};
			showPics(index);	
		},5000);//自动播放间隔5秒
	$(".wx_qt_index_slider_sx_pre").click(function(){
		clearInterval(picTimer);
		index++;
		if(index==len){index=0;};
			showPics(index);
			picTimer=setInterval(function(){
			index++;			
			if(index==len){index=0;};
			showPics(index);	
		},5000);//自动播放间隔5秒
	});
	$(".wx_qt_index_slider_sx_next").click(function(){
		clearInterval(picTimer);
		index--;
		if(index==-1){index=len;};
			showPics(index);
		picTimer=setInterval(function(){
			index++;			
			if(index==len){index=0;};
			showPics(index);	
		},5000);//自动播放间隔5秒
	});
		function showPics(d)//普通切换
	{
		
		$('.wx_qt_index_slider_img img').eq(d).show().siblings().hide();
	}
});/*结束*/