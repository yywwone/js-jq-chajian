
function tabs(btn,obj,cla){
	$(btn).on('click',function(){
		$(this).addClass(cla).siblings().removeClass(cla);
		$(obj).eq($(this).index()).show().siblings(obj).hide();
	})
}
