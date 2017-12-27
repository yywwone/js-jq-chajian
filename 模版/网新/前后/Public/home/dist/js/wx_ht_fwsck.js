// JavaScript Document
$(function(){
	$(".wx_ht_fwsck_main_tit_con p").each(function(){
			var wx_ht_fwsck_main_tit_con_fws=$(this).text();
			var wx_ht_fwsck_main_tit_con_fws_lenght=wx_ht_fwsck_main_tit_con_fws.length;
		if(wx_ht_fwsck_main_tit_con_fws_lenght>9){
			$(this).parents(".wx_ht_fwsck_main_tit_con_fws").addClass("wx_ht_fwsck_main_tit_con_dz");
		}
		if(wx_ht_fwsck_main_tit_con_fws_lenght>9&&wx_ht_fwsck_main_tit_con_fws_lenght<18){
			$(this).parents(".wx_ht_fwsck_main_tit_con_fws").addClass("wx_ht_fwsck_main_tit_con_dz1");
		}
	});	
});