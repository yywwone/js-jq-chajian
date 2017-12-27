// JavaScript Document
$(function() {
	$("#pic").click(function () {
		$("#upload").click(); //隐藏了input:file样式后，点击头像就可以本地上传
		$("#upload").on("change",function(){
			var objUrl = getObjectURL(this.files[0]) ; //获取图片的路径，该路径不是图片在本地的路径
			if (objUrl) {
			$("#pic").attr("src", objUrl) ; //将图片路径存入src中，显示出图片
			}
		});
	});
	$(".headerPortrait_submit").click(function(){
		var src=$("#pic").attr("src");
		if(src!=""){
			$.ajax({
		   type: "post",  //get   
		   url: "",  //html  txt  xml  php  jsp 
		   data: ""+src+""  , //传给服务器的数据
		   dataType:"",
		   success: function(data){  //data存返回数据
				if(data){
					$(".headerPortrait_zz").text("修改成功").show();
					$(".headerPortrait_zz").delay(2000).fadeOut();
				}else{
					$(".headerPortrait_zz").text("修改失败,请稍后再试").show();
					$(".headerPortrait_zz").delay(2000).fadeOut();
				}
			}
		});
			
		}else{
			$(".headerPortrait_zz").text("请上传头像后在修改").show();
			$(".headerPortrait_zz").delay(2000).fadeOut();
		}
	});
});/*结束*/

//建立一個可存取到該file的url
function getObjectURL(file) {
	var url = null ;
	if (window.createObjectURL!=undefined) { // basic
	url = window.createObjectURL(file) ;
	} else if (window.URL!=undefined) { // mozilla(firefox)
	url = window.URL.createObjectURL(file) ;
	} else if (window.webkitURL!=undefined) { // webkit or chrome
	url = window.webkitURL.createObjectURL(file) ;
	}
	return url ;
}