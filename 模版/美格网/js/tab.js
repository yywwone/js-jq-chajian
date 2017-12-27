// JavaScript Document
/*1分钟提及需求*/
$(function(){
	$(".tab-click").click(function(){
		var cs=0;
		var mj=0;
		var lx=0;
		var ch=0;
		var dh=0;
		var ys=0;
		
		if($(".cs").val()!=""){cs=1}
		if($(".mj").val()!=""){mj=1}
		if($(".lx").val()!=""){lx=1}
		if($(".ch").val()!=""){ch=1}
		if($(".dh").val()!=""){dh=1}
		if($(".ys").val()!=""){ys=1}
		if(cs==1&&mj==1&&lx==1&&ch==1&&dh==1&&ys==1){alert("提交成功，我们的工作人员会马上与您联系")}else{alert("信息填写不全，无法提交")}
	})
});

