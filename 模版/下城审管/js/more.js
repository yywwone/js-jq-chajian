// JavaScript Document
// JavaScript Document
$(function(){
	/*对我有用*/
	$(".index_con_dwyy").click(function(){
		var index_con_number=$(this).find(".index_con_number").text();
		if($(this).is(".dian")){
			$(this).find(".icon").attr("color","red");
			index_con_number++;
			$(this).find(".index_con_number").text(index_con_number);
			$(this).removeClass("dian");
		}else{
			$(this).find(".icon").attr("color","#444141");
			index_con_number--;
			$(this).find(".index_con_number").text(index_con_number);
			$(this).addClass("dian");
		}
		$.ajax({
			type: "post",  //get   
			url: "",  //html  txt  xml  php  jsp 
			data: ""+index_con_number+""  , //传给服务器的数据
			dataType:"",
			success: function(data){  //data存返回数据
				
			}
		});
		
	});
	var a11=$(window).height();
	$(".more_bg").css("height",a11)
});/*结束*/