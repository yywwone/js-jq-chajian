// JavaScript Document
//广告轮播
$(function(){
	var len1=$('.slider-ad a').length;//获取焦点图个数
	var index1=0;
	var picTimer1;

	picTimer1=setInterval(function(){
			
			index1++;
			if(index1==len1){index1=0;};
			showPics1(index1);
		},3000);//自动播放间隔2秒
	
	function showPics1(index1)//普通切换
	{
		$('.slider-ad a').eq(index1).show().siblings().hide();
	}
	
		
});