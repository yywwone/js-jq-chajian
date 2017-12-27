// JavaScript Document
//计算价格
/* 	 integration    积分
	 market-price   市场价
	 dd-price	    当当价
	 number         个数
	 del		    删除
	result          结果*/
$(function(){

	
	$(".select_body_tr input").blur(function(){
		if($(this).val()==""){$(this).val(0)}
		compute();
	});
	$(".del").click(function(){
		$(this).parent().parent().remove();
		compute()
	})
		
		
		
	function compute(){
		var wid=$(".select_body_tr").size();
		var result1=0;
		var result2=0;
		var result3=0;
		var result4=0;
		for(var i=0;i<wid;i++)
			{	
				var integration=$($(".select_body_tr")[i]).find(".integration").text();
				integration=parseFloat(integration);

				var number=$($(".select_body_tr")[i]).find(".number").val();
				number=parseFloat(number);
				
				var market=$($(".select_body_tr")[i]).find(".market-price").text();
				market=parseFloat(market);
				
				var dd=$($(".select_body_tr")[i]).find(".dd-price").text();
				dd=parseFloat(dd);
				
				result1=result1+integration*number;//计算总积分
				result2=result2+market*number;//计算总市场价
				result3=result3+dd*number;//计算总当当价
				result4=result2-result3;//计算节省多少钱
			}
				$(".result1").text(result4.toFixed(2));
				$(".result2").text(result1.toFixed());
				$(".result3").text(result3.toFixed(1));
	}

compute();
});

















