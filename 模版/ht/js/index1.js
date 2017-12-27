// JavaScript Document
$(document).ready(function(){
	$(".date").click(function(){
		$(this).addClass("big1").siblings().removeClass("big1")
		var inde=$(this).index()
		$(".xxx").eq(inde).show().siblings().hide()		
	}).eq(0).trigger("click")
	
		var indexl//用来获取点击的小图标的索引值
		$(".hahaha dt").click(function toto(){
			$(this).siblings("dd").slideToggle(200)
		})
		
		
		$(".hahaha dt").hover(function(){
			$(this).addClass("cscs")
		},function(){
			$(this).removeClass("cscs")
		})
		
		
		$(".hahaha dd").click(function(){
			$(this).addClass("cscs1").siblings("dd").removeClass("cscs1")
		})
		
		/*$(".nav-content li").click(function(){
			indexl=$(this).index()
			$(".right-nav").animate({"left":-400},500)
			$(".main-nav").css("display","block")
			$(".main-nav").animate({"left":0},500)
			toto(indexl)
			})*/
		$(".nav-content").on("click","li",function(){
			indexl=$(this).index()
			$(".right-nav").animate({"left":-400},500)
			$(".main-nav").css("display","block")
			$(".main-nav").animate({"left":0},500)
			$(".hahaha dt").eq(indexl).trigger("click")
			toto(indexl)
		})
		
		$.ajax({
			url:"js/data1.json",
			success:function(data){
			console.log(data.width)
			$.each(data.width,function(index,item){
			console.log(item)
			$(".span1").width(item.wid1)
			$(".span2").width(item.wid2)
			$(".span3").width(item.wid3)
			$(".span4").width(item.wid4)
		})	
			}
		});
		
		//下方为插件部分
		$(".mou").click(function(){
				var myChart = echarts.init(document.getElementById('main'));
		$.get('js/data1.json').done(function (resule) {        	
			myChart.setOption({
				 title: {
      			  	text: '新增用户趋势变化'
    					},
				 tooltip: {
      				 trigger: 'axis'
    					},
			 legend: {
      			  data:['访问量']
    				},	
			  grid: {
      		  	left: '3%',
        		right: '4%',
        		bottom: '3%',
        		containLabel: true
    				},	
			toolbox: {
       			 feature: {
            		saveAsImage: {}
        				  }
    				},		
			xAxis: {
				data:resule.obj.date
			},
			yAxis: { type: 'value'},
			series: [{
                name:'访问量',  
                type:'line',  
                stack: '访问量',  
				data: resule.obj.more,
				symbol: 'circle',//改为实心圆
				itemStyle:{
                            normal : { 
								 color: "#2ab0ed", 
                                    lineStyle:{  
                                        	color:'#2ab0ed',  
                                    			}  
                                		}  
                            },
			 
			}]
    	});
});	
			}).trigger("click")
			
		 $(".moo").click(function(){
				var myChart = echarts.init(document.getElementById('main'));
		$.get('js/data1.json').done(function (resule) {        	
			myChart.setOption({
				 title: {
      			  	text: '新增用户趋势变化'
    					},
				 tooltip: {
      				 trigger: 'axis'
    					},
			 legend: {
      			  data:['访问量']
    				},	
			  grid: {
      		  	left: '3%',
        		right: '4%',
        		bottom: '3%',
        		containLabel: true
    				},	
			toolbox: {
       			 feature: {
            		saveAsImage: {}
        				  }
    				},		
			xAxis: {
				data:resule.obd.date
			},
			yAxis: { type: 'value'},
			series: [{
                name:'访问量',  
                type:'line',  
                stack: '访问量',  
				data: resule.obd.more,
				symbol: 'circle',//改为实心圆
				itemStyle:{
                            normal : { 
								 color: "blue", 
                                    lineStyle:{  
                                        	color:'blue',  
                                    			}  
                                		}  
                            },
			 
			}]
    	});
});	
			
			})
		//折线图结束	    	
	
		
        
});
		
