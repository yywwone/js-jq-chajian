// JavaScript Document
$(function(){
	$('.slide .icon li').not('.up,.down,.top').mouseenter(function(){
			$('.slide .info').addClass('hover');
			$('.slide .info li').hide();
			$('.slide .info li.'+$(this).attr('class')).show();//.slide .info li.qq
		});
		$('.slide').mouseleave(function(){
			$('.slide .info').removeClass('hover');
		});
		
		$('#btn').click(function(){
			$('.slide').toggle();
			if($(this).hasClass('index_cy')){
				$(this).removeClass('index_cy');
				$(this).addClass('index_cy2');
			}else{
				$(this).removeClass('index_cy2');
				$(this).addClass('index_cy');
			}
			
		});
		
		var swidth=$(window).width();
	var dwidth=$(".video1").width();
	var dheight=$(".video1").height();
	var sucee
	$(window).resize(function(){
		dheight=$(".video1").height();
		dwidth=$(".video1").width();
	});
	/*window.onresize = function sb()
	{	
	dheight=$(".video1").height();
	dwidth=$(".video1").width();
		}			*/
	/*alert($(window).width());
	alert($(".video1").height());
	alert($(".video1").width());*/
	
	
	if(swidth>800)
	{
	var sucee=null
	}
	else
	{
	var sucee='<div class="ze" ></div>'
	$(".col-xs-6 .video1").mouseenter(function(){	
			var index11=$(this).parent().index()
			$(".video1").eq(index11).append(sucee)
			$(".ze").css("height",dheight)
			$(".ze").css("width",dwidth)
			})
	$(".col-xs-6 .video1").mouseleave(function(){	
			$(".ze").remove()
			})		
	}
	});