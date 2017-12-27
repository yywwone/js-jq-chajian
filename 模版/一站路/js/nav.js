$(function(){
	//侧边导航
	$(".sidemenu li").hover(
	  function (){
	  	var index=$(this).index();
	    $(".sidemenu li").removeClass("active");
	    $(this).addClass("active");
	    $(".sidesub .sidelist:eq("+index+")").show();
	  },
	  function (){
	  	var index=$(this).index();
	   	$(this).removeClass("active");
	   	$(".sidesub .sidelist").hide();
	  }
	);
	$(".sidesub .sidelist").hover(
			function(){
			var index=$(this).index();
			$(".sidemenu li").removeClass("active");
			$(".sidemenu li:eq("+index+")").addClass("active");
			$(".sidesub .sidelist:eq("+index+")").show();
		},function(){
			var index=$(this).index();
			$(this).removeClass("active");
			$(".sidesub .sidelist").hide();
		});
	
});