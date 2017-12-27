// JavaScript Document

$(function(){
	$(".market").click(function(){
		$(".main-left-con-box").hide();
		var market=new Array();
		var b=$(".main-left-con-box").size();
		var c=$(this).index()
		if(c==0)
			{
				$(".main-left-con-box").show();	
			}
		if(c==1)
			{
				for(i=0;i<b;i++)
					{
						market[i]=$(".market1").eq(i).text();
						a=parseInt(market[i].substring(1));
						if(a<20000)
						{	
							$(".main-left-con-box").eq(i).show();
						}
					
					}
			}
		if(c==2)
			{
				for(i=0;i<b;i++)
					{
						market[i]=$(".market1").eq(i).text();
						a=parseInt(market[i].substring(1));
						if(a>=20000&&a<=60000)
						{	
							$(".main-left-con-box").eq(i).show();
						}
					
					}
			}
		if(c==3)
			{
				for(i=0;i<b;i++)
					{
						market[i]=$(".market1").eq(i).text();
						a=parseInt(market[i].substring(1));
						if(a>=60000&&a<=100000)
						{	
							$(".main-left-con-box").eq(i).show();
						}
					
					}
			}
		if(c==4)
			{
				for(i=0;i<b;i++)
					{
						market[i]=$(".market1").eq(i).text();
						a=parseInt(market[i].substring(1));
						if(a>=100000)
						{	
							$(".main-left-con-box").eq(i).show();
						}
					
					}
			}
		
		
	});
	$(".market_xx").click(function(){
		
	})
});


