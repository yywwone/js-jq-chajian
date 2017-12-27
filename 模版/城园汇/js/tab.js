// JavaScript Document
$(function(){
	
	$(".tit li").click(function(){
		var a;
		a=$(this).index();
		$(".tab").eq(a).show().siblings().hide();
		$(".tit li").eq(a).addClass("active").siblings().removeClass("active")
		
	})
	
	
});
/*获取GET传输ID*/
paramValue ="";
isFound =false;

function getParam(paramName){
  
  if (this.location.search.indexOf("?") ==0&&this.location.search.indexOf("=")>1){
    arrSource = unescape(this.location.search).substring(1,this.location.search.length).split("&");
    i =0;
    while (i < arrSource.length &&!isFound){
      if (arrSource[i].indexOf("=") >0){
        if (arrSource[i].split("=")[0].toLowerCase()==paramName.toLowerCase()){
          paramValue = arrSource[i].split("=")[1];
          isFound =true;
        }
      }
    i++;
    }
  }
  
}
getParam("id");

$(function(){
	$('.tit li').eq(0).trigger("click");
	if(paramValue==2){
		$('.tit li').eq(1).trigger("click");
	}
})



