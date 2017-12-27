// JavaScript Document
$(document).ready(function(){
	var em=0;
	
	$(".serch_img").click(function(){
		if(em==0)
		{
			$(".big").stop().animate({"right":25},200);
			$(".big").css("display","block");
			em=1;
			return false;
			
		}else{
			var a=$(".search_val").val();
			if(a=="请输入查找内容"||a=="")
				{
				$(".big").stop().animate({"right":-80},200)
				$(".big").css("display","none");
				em=0;
				return false;
				}
			else
				{
				window.alert("1")		
				}		
			}
			
		})
	//上方为索索框
	$(".banner_box_u li").eq(0).show().siblings().hide()//让第一张显示其他的隐藏
	
	var index=0//用来控制显示的张数
	var mytimer//用来存放定时器
	var leng=$(".banner_box_u li").length;//图片的个数
	var btn="<ul class='banner_box_b'>"
	for(i=0;i<leng;i++)
	{
		btn=btn+"<li></li>"
	}
	btn=btn+"<ul/>"
	$(".banner_box").append(btn)
	$(".banner_box_b li").eq(0).addClass("cba")
	function showpic(d)
	{
	$(".banner_box_u li").eq(d).fadeIn(1000).siblings().fadeOut(500)
	$(".banner_box_b li").eq(d).addClass("cba").siblings().removeClass("cba")
	}
	
	$(".banner_box").hover(function(){
		clearInterval(mytimer)
		$(".next").stop().animate({right:"0"},300)
		$(".prenext").stop().animate({left:"0"},300)
		},function(){
		$(".next").stop().animate({right:"-45"},300)
		$(".prenext").stop().animate({left:"-45"},300)	
		mytimer=setInterval(function(){
		index++
		if(index==leng)
		{
		index=0	
		}
		showpic(index)
		},5000)}).trigger("mouseleave")
	$(".banner_box_b li").hover(function(){
		index=$(this).index()
		showpic(index)
		},function(){})	
	$(".next").click(function(){
		index+=1
		if(index==leng)
		{
		index=0	
		}
		showpic(index)
		})
	$(".prenext").click(function(){
		index--
		if(index==-1)
		{
		index=leng-1	
		}
		showpic(index)
		})
	//上面为轮播图
	var lengtt=$(".price_box_u li").length;//获取li的个数
	var high=$(".price_box").height()//获取高度
	var atimer//定时器
	var indexl=0//控制li
	function picc(c){
		var j
		var lo=c*high
		$(".price_box_u").animate({bottom:lo},800)		
	}
		atimer=setInterval(function(){
			indexl++
			if(indexl==lengtt)
			{
			indexl=0
			$(".price_box_u").css("bottom","0")	
			}
			picc(indexl)
			},1000)
	//上方为滚动价格
	var hotcss=new Array
	hotcss[0]='<li><img src="images/play01.png"></li><li><img src="images/play02.png"></li><li style="margin:0;"><img src="images/play03.png"></li><li><img src="images/play01.png"></li><li><img src="images/play01.png"></li><li style="margin:0;"><img src="images/play02.png"></li>'
	hotcss[1]='<li><img src="images/play02.png"></li><li style="margin:0;"><img src="images/play03.png"></li><li><img src="images/play01.png"></li><li><img src="images/play01.png"></li><li style="margin:0;"><img src="images/play02.png"></li>'
	$(".video_title_u li").click(function(){
		$(".video_title_u li").eq(0).addClass("active").siblings().removeClass("active")
		$(".video_main_u").html(hotcss[0])
		}).trigger("click")		
	$(".video_title_u li").click(function(){
		$(this).addClass("active").siblings().removeClass("active")
		var tab=$(this).index()
		$(".video_main_u").html(hotcss[tab])
		})
	
		//上方为置换卡
		/*$(".video_main_u li").hover(function(){
			$(this).find(".flao").show();
			$(this).siblings("").find(".flao").hide()
			},function(){$(this).find(".flao").hide()})*/
			 ppt='<div class="flao"><a href="play.html"><img src="images/play.png"></a></div>'
			$(".video_main_u").on("mouseenter","li",function(){	
			var index11=$(this).index();
			$(".video_main_u li").eq(index11).append(ppt)
			$(this).find(".flao").show();
			
			})
			$(".video_main_u").on("mouseleave","li",function(){		
			$(".video_main_u li .flao").remove()
			})
			//上方为添加浮动快
			/*var windowWidth = document.body.clientWidth;       
        	var windowHeight =$(document).height();
 			var kshigh=$(window).height()
			var kswidth=$(window).width()-$("#hby").width()
			var hbyw=$("#hby").width()
			var hbywj=kswidth/2
			$("#xoxo").click(function(){				
				$("<div id='mask'></div>").addClass("mask")   
                                  .width(windowWidth)   
                                  .height(windowHeight)     
                                  .appendTo("body")   
                                  .fadeIn(200); 
				$("div id='hby'><p>11111111222222222</p></div").addClass("hby")
				.css("left","kswidth").appendTo("body")
				})*/
						
});