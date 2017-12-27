// JavaScript Document
$(function(){                 
  $("p").on("swipeleft",function(){
		$(".wx_ht_del_box").fadeIn(500);
	$(".wx_ht_del_box_xz_con_qd").click(function(){
		$(".wx_ht_del_box").fadeOut();
		$(".chufayuansu").hide();
	});
	$(".wx_ht_del_box_xz_con_qx").click(function(){
		$(".wx_ht_del_box").fadeOut();
	});
  });        
});