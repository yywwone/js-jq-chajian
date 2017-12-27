// JavaScript Document
//轮播图
$(function(){
	var len=$('.slider').length;//获取焦点图个数	
	var index=0;
	var picTimer;	
	//以下代码添加数字按钮和按钮后的半透明条，还有上一页下一页两个按钮
	var btn='<div class="btn">';
	for(var i=0;i<len;i++)
	{
		btn+='<span>'+'</span>';
	}
	btn+='</div>';
	$('#slider-wrap').append(btn);
	
	//为小按钮添加鼠标划入事件，以显示相应内容
	$('#slider-wrap .btn span').mouseover(function(){
		index=$('#slider-wrap .btn span').index(this);
		showPics(index);
	}).eq(0).trigger('mouseover');
	
	//上一页按钮
	$('#slider-pre').click(function(){
		index-=1;
		if(index==-1){index=len-1;}
		showPics(index);
	});
	
	//下一页按钮
	$('#slider-next').click(function(){
		index+=1;
		if(index==len){index=0;}
		showPics(index);
	});
	
	
	
		//鼠标划上焦点图时停止自动播放，划出时开始自动播放
	$('#slider-wrap').hover(function(){
		clearInterval(picTimer);
		$('#slider-pre').stop(true,true).animate({'left':'0px'},300);
		$('#slider-next').stop(true,true).animate({'right':'0px'},300);
	},function(){
		$('#slider-pre').stop(true,true).animate({'left':'-80px'},300);
		$('#slider-next').stop(true,true).animate({'right':'-80px'},300);
		picTimer=setInterval(function(){
			
			index++;			
			if(index==len){index=0;};
			showPics(index);	
		},5000);//自动播放间隔5秒
	}).trigger('mouseleave');//模拟鼠标穿出
	

	
		function showPics(d)//普通切换
	{
		$('.slider').eq(d).fadeIn(1000).siblings().fadeOut(150);
		
		$('#slider-wrap .btn span').eq(index).addClass("hover").siblings().removeClass("hover");//为当前的按钮切换到选中的效果
	}
});