// JavaScript Document
$(function(){
	$(".wx_qt_gyslb_main_top_right p").each(function(){
		var new_text=$(this).text();
		var new_text_length=new_text.length;
		if(new_text_length>50){
					var new_text1=new_text.substring(0,50);
					$(this).text(new_text1+'......');
				}
	});
});