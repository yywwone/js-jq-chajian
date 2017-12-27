// JavaScript Document
// JavaScript Document
//计算价格
/* 	 integration    积分
	 market-price   市场价
	 dd-price	    当当价
	 number         个数
	 del		    删除
	result          结果*/
//(parseInt($(this).text()))
$(function(){
		var sum=0;
		$.each($(".integration"),function(){
			sum+=(parseInt($(this).text()))*(parseInt($(this).parent().next().next().next().find(".number").val()))
											 
		})
	 alert(sum);
});





