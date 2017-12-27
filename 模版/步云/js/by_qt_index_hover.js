// JavaScript Document
$(function(){
	var index_size=document.body.offsetWidth;
	var by_index_fwxm_img_box;
	var by_index_jishu;
	if(index_size>1200){
		$(".by_index_fwxm_img_box").hover(function(){
			var by_index_fwxm_img_box_width=$(this).width();
		
			$(".by_index_fwxm_img_box").stop(false,false).animate({width:"238px"},300);	
			
			by_index_fwxm_img_box=$(this).index();
			$(".by_index_fwxm_img_box").eq(by_index_fwxm_img_box).stop(false,false).animate({width:"463px"},1000);
		},function(){}).eq(0).trigger("mouseenter");
	}
});