// JavaScript Document
	$(function(){
		
		var len=$("#focus ul li").length; //获取焦点图个数
		var index=0;
		var picTimer;
		//鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
		$("#focus").hover(function(){
			clearInterval(picTimer);
		},function(){
			picTimer=setInterval(function(){
				index++;
				if(index==len){index=0};
				showPics(index);
			},5000);		
		}).trigger("mouseleave");//模拟鼠标穿出
		
		//显示图片函数，根据接收的index值显示相应的内容
		function showPics(index)			
		{
			$("#focus ul li").eq(index).stop(true,false).fadeIn(1500).siblings().fadeOut(150);
		}
	});