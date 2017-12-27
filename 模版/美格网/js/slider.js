// JavaScript Document
/*banner轮播*/
$(function(){
	var sWidth=$('.slider').width();//获取焦点图的宽度（显示面积）
	var len=$('.show li').length;//获取焦点图个数
	var index=0;
	var picTimer;
	var a=$(".show").width();
	var b=a-sWidth
	
	
$('.number li').mouseover(function(){
		index=$('.number li').index(this);
		showPics(index);
	}
	).eq(0).trigger('mouseover');
	$('.pre').click(function(){
		index--;
		if(index==-1){
		$(".show").css({top:0,left:-b})
		index=3;
		}
		
		showPics(index);
		
	});
	$('.next').click(function(){
		index++;
		if(index==len){
			$(".show").css({top:0,left:0});
			index=1;
		}
		
		showPics(index);
		
	})

	//鼠标划上焦点图时停止自动播放，划出时开始自动播放
	$('.slider').hover(function(){
		clearInterval(picTimer);
		$('.pre').show();
		$('.next').show();
	},function(){
			$('.pre').hide();
			$('.next').hide();
		picTimer=setInterval(function(){
			
			index++;
			if(index==len)
			{
				index=1;
				$(".show").css({top:0,left:0})
			};
			
			showPics(index);
			
		},5000);
	}).trigger('mouseout');
	
	//显示图片函数，根据接受的index值显示相应内容
	function showPics(index)//普通切换
	{
		var j=0;
		var nowLeft=-index*sWidth;//根据index值计算ul元素的left值
		$('.show').stop(true,false).animate({'left':nowLeft},1000);//通过animate（）调整ul元素滚动到计算出的position
		if(index==len-1){j=0;}else{j=index;}
		$('.number li').removeClass("number-color").eq(j).addClass("number-color");
	}
});