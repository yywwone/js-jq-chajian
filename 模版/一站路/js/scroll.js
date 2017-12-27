// JavaScript Document
//banner 轮播
$(function(){
	var len=$('.slides li').length;//获取焦点图个数	
	var index=0;
	var picTimer;	
	//以下代码添加数字按钮和按钮后的半透明条，还有上一页下一页两个按钮

	//为小按钮添加鼠标划入事件，以显示相应内容
	$('.slides-nav li').mouseover(function(){
		index=$('.slides-nav li').index(this);
		showPics(index);
	}).eq(0).trigger('mouseover');
	

	
	
	
		//鼠标划上焦点图时停止自动播放，划出时开始自动播放
	$('.flexslider').hover(function(){
		clearInterval(picTimer);
		
	},function(){
		picTimer=setInterval(function(){
			index++;			
			if(index==len){index=0};
			showPics(index);
			
		},5000);//自动播放间隔5秒
	}).trigger('mouseleave');//模拟鼠标穿出
	

	
		function showPics(d)//普通切换
	{
		
		$('.slides li').eq(d).fadeIn(1000).siblings().fadeOut(150);
		
		//为当前的按钮切换到选中的效果
		$('.slides-nav li').eq(index).addClass("slides-nav-li").siblings().removeClass("slides-nav-li");
		
	}
});