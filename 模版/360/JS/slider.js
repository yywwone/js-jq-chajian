//banner页轮播

$(function(){
	var len=$('.slider-img li').length;//获取焦点图个数
	var index=0;
	var picTimer;
	
	$('.slider_click_img1').click(function(){
		index=0;
		showPics(index);
	});
	$('.slider_click_img2').click(function(){
		index=5;
		showPics(index);
	});
	$('.slider_click_img3').click(function(){
		index=7;
		showPics(index);
	});
	
	$('.slider-nav1 li').mouseover(function(){
		index=$('.slider-nav1 li').index(this);
		showPics(index);
	});
	$('.slider_nav2 li').mouseover(function(){
		index=$('.slider_nav2 li').index(this);
		index=index+5;
		showPics(index);
	});
	$('.slider-nav3 li').mouseover(function(){
		index=$('.slider-nav3 li').index(this);
		index=index+7;
		showPics(index);
	});
	
	//上一页按钮
	$('.pre').click(function(){
		index-=1;
		if(index==-1){index=len-1;}
		showPics(index);
	});
	
	//下一页按钮
	$('.next').click(function(){
		index+=1;
		if(index==len){index=0;}
		showPics(index);
	});
	
	//鼠标划上焦点图时停止自动播放，划出时开始自动播放
	$('.slider_top').hover(function(){
		clearInterval(picTimer);
		$('.pre').stop(true,true).animate({'left':'0px'},300);
		$('.next').stop(true,true).animate({'right':'0px'},300);
	},function(){
		$('.pre').stop(true,true).animate({'left':'-80px'},300);
		$('.next').stop(true,true).animate({'right':'-80px'},300);
		picTimer=setInterval(function(){
			
			index++;
			if(index==len){index=0;};
			showPics(index);
		},3000);//自动播放间隔2秒
	}).trigger('mouseleave');//模拟鼠标穿出
	
	//显示图片函数，根据接受的index值显示相应内容
	function showPics(index)//普通切换
	{
		if(index<=4)
		{
			$(".slider-nav").eq(0).show().siblings().hide();
			$(".slider_click_bg1").addClass("slider_click_bg");
			$(".slider_click_bg2").removeClass("slider_click_bg");
			$(".slider_click_bg3").removeClass("slider_click_bg");
		}
		if(index>4&&index<=6){
			$(".slider-nav").eq(1).show().siblings().hide();
			$(".slider_click_bg2").addClass("slider_click_bg");
			$(".slider_click_bg1").removeClass("slider_click_bg");
			$(".slider_click_bg3").removeClass("slider_click_bg");
		}
		if(index>6)
		{
			$(".slider-nav").eq(2).show().siblings().hide();
			$(".slider_click_bg3").addClass("slider_click_bg");
			$(".slider_click_bg1").removeClass("slider_click_bg");
			$(".slider_click_bg2").removeClass("slider_click_bg");
		}
		
		$('.slider-img li').eq(index).show().siblings().hide();
		$(".slider-nav li").eq(index).addClass("cur").siblings().removeClass("cur");
	}
	
		
	});

