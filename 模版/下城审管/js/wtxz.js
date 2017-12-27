// JavaScript Document
$(function(){
	$(".index_con_tit").click(function(){
		var a=$(this).text();
		$(".index_con_tit1").val(a);
	});
	$(".index_con_text").click(function(){
		var a=$(this).text();
		$(".index_con_text1").val(a);
		$(".index_con_text1").css("color","#000")
	});
	$(".index_con_text1").val("请输入问题答案或选择左侧问题答案");
	$(".index_con_text1").focus(function(){
		$(".index_con_text1").css("color","#000")
		if($(this).val()=="请输入问题答案或选择左侧问题答案"){
			$(this).val("");
		}
	});
	$(".index_con_text1").blur(function(){
		if($(this).val()==""){
			$(this).val("请输入问题答案或选择左侧问题答案");
			$(".index_con_text1").css("color","#A9A9A9")
		}
	});
	$(".wtxz_form").submit(function(){
		var c=$(".index_con_text1").val();
		if(c=="请输入问题答案或选择左侧问题答案"||c==""){
			return false
		}
	});
	
});