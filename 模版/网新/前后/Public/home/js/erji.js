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
				$(".big").stop().animate({"right":-10},200)
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
	var swidth=$(window).width();
	var dwidth=$(".video1").width();
	var dheight=$(".video1").height();
	$(window).resize(function(){
		
		dheight=$(".video1").height();
		dwidth=$(".video1").width();
	});
	/*window.onresize = function sb()
	{	
	dheight=$(".video1").height();
	dwidth=$(".video1").width();
		}			*/
	var sucee='<div class="ze"></div>'
		
	if(swidth<=800)
	{
	var sucee=''	
	}
	else
	{
	
	$(".col-xs-6 .video1").mouseenter(function(){	
			var index11=$(this).parents("a").index()
			$(".video1").eq(index11).append(sucee)
			$(".ze").css("height",dheight)
			$(".ze").css("width",dwidth)
			})
	$(".col-xs-6 .video1").mouseleave(function(){	
			$(".ze").remove()
			})		
	}
	})
