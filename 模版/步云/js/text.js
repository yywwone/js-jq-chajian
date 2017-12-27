// JavaScript Document
//新闻文字控制显示
$(function(){
//	行业新闻
	$(".news_left_main_con_text_con").each(function(){
		var new_tit_text=$(this).text();
		var new_tit_text_length=new_tit_text.length;
		var wid_width=$(window).width();
		if(wid_width>=1300){
				if(new_tit_text_length>180){
					var new_tit_text1=new_tit_text.substring(0,50);
					$(this).text(new_tit_text1);
				}
		}else{
				if(new_tit_text_length>50){
					var new_tit_text1=new_tit_text.substring(0,50);
					$(this).text(new_tit_text1);
				}
			}
		
		
	});
//	热门新闻
	$(".news_right_box_con p").each(function(){
		var new_tit_text=$(this).text();
		var new_tit_text_length=new_tit_text.length;
		if(new_tit_text_length>50){
			var new_tit_text1=new_tit_text.substring(0,50);
			$(this).text(new_tit_text1);
		}
	});
	//轮播
	var len=$('.news_right_slider ul li').length;//获取焦点图个数	
	var index=0;
	var picTimer;	
	var sWidth=$(".news_right_slider").width();
	//以下代码添加数字按钮
	var btn='<div class="btn">';
	for(var i=0;i<len;i++)
	{
		btn+='<span>'+'</span>';
	}
	btn+='</div>';
	$('.news_right_slider').append(btn);
	
	//为小按钮添加鼠标划入事件，以显示相应内容
	$('.btn span').mouseover(function(){
		index=$('.btn span').index(this);
		showPics(index);
	}).eq(0).trigger('mouseover');
	
	
	//本列为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
		$(".news_right_slider ul").css("width",sWidth*len);
		$(".news_right_slider ul li").css("width",sWidth);
		//鼠标划上焦点图时停止自动播放，划出时开始自动播放
	$('.news_right_slider').hover(function(){
		clearInterval(picTimer);
	},function(){
		picTimer=setInterval(function(){
			index++;			
			if(index==len){index=0;}
			showPics(index);	
		},5000);//自动播放间隔5秒
	}).trigger('mouseleave');//模拟鼠标穿出
		function showPics(d)//普通切换
	{
		var nowLeft=-index*sWidth;		//根据index值计算ul元素的left值
			$(".news_right_slider ul").stop(true,false).animate({"left":nowLeft},300);   //通过animate()调整ul元素滚动到计算出的position
		
		$('.btn span').eq(index).addClass("active").siblings().removeClass("active");//为当前的按钮切换到选中的效果
	}
});