// JavaScript Document
$(function(){
	var wx_qyfw_main_len=$(".wx_qyfw_main").length
	
	if(!(wx_qyfw_main_len%4==0)){
		$(".wx_qyfw_main").eq(wx_qyfw_main_len-1).addClass("wx_qyfw_main1")
	}
});