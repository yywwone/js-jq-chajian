// JavaScript Document

$(function(){
	//改变背景透明度；显示子元素
	$(".show").hover(function(){
		$(this).find(".bom-bg_play,.shade").show();
	},function(){
		$(this).find(".bom-bg_play,.shade").hide();
	});
	//热门电台 显示圆形遮挡和播放按钮
	$(".hot-radio li").hover(function(){
		$(this).find(".hot-radio_img-hover,.hot-radio_img-hover-play,.hot-radio_img-hover-bg").show();
		$(this).find(".hot-radio_img_text").css({"color":"#009cf5"});
	},function(){
		$(this).find(".hot-radio_img-hover,.hot-radio_img-hover-play").hide();
		$(this).find(".hot-radio_img_text").css({"color":"#000"});
	});

	//主体右侧 遮罩层和播放按钮显示隐藏
	$(".shade-wrap").hover(function(){
		$(this).find(".body_right-shade").show();
		$(this).find(".body_right_mid_img2_text2").css({"color":"#009cf5"});

	},function(){
		$(this).find(".body_right-shade").hide();
		$(this).find(".body_right_mid_img2_text2").css({"color":"#444"});
		
	});
	
	
});//初始加载结束

