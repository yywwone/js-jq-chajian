// JavaScript Document
//360商城轮播
$(function(){
	var len2=$('.shop-slider li').length;//获取焦点图个数
	var index2=0;
	var picTimer2;
	

	$('.shop-slider_nav li').mouseover(function(){
		index2=$('.shop-slider_nav li').index(this);
		showPics2(index2);
	});

	
	//上一页按钮
	$('.pre1').click(function(){
		index2-=1;
		if(index2==-1){index2=len2-1;}
		showPics2(index2);
	});
	
	//下一页按钮
	$('.next1').click(function(){
		index2+=1;
		if(index2==len2){index2=0;}
		showPics2(index2);
	});
	
	//鼠标划上焦点图时停止自动播放，划出时开始自动播放
	$('.shop-slider_wrap').hover(function(){
		clearInterval(picTimer2);
		$('.pre1').stop(true,true).animate({'left':'0px'},300);
		$('.next1').stop(true,true).animate({'right':'0px'},300);
	},function(){
		$('.pre1').stop(true,true).animate({'left':'-80px'},300);
		$('.next1').stop(true,true).animate({'right':'-80px'},300);
		picTimer2=setInterval(function(){
			
			index2++;
			if(index2==len2){index2=0;};
			showPics2(index2);
		},3000);//自动播放间隔2秒
	}).trigger('mouseleave');//模拟鼠标穿出
	
	//显示图片函数，根据接受的index值显示相应内容
	function showPics2(index)//普通切换
	{
	
		$('.shop-slider li').eq(index).show().siblings().hide();
		$(".shop-slider_nav li").eq(index).addClass("curr").siblings().removeClass("curr");
	}
	
		
	});