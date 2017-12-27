// JavaScript Document
//当当推荐开关
$(function(){
  $("#recommend div").click(function(){
	$(this).toggleClass("img-down");
	$(this).parent().next("#recommend_body").stop().slideToggle()
});
  });