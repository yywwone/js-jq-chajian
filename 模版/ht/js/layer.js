

(function($){
	$.extend({
    	tips: function(options) {
    		var wH=$(window).height(),
    			wW=$(window).width(),
    			coment='<div class="lb_bc">11</div>',
	    		defaults = {
			        'msg':'',  //弹出层内容
			        'shadeClose':false, //是否显示灰色背景
			        'left':'', //距离左边的位置，默认是居中，和right不能同时出现
			        'top': '',   //距离上面的位置，默认是居中，和bottom不能同时出现
			        'bottom': '', //距离下面的位置，默认是居中，和top不能同时出现
			        'right': '', //距离左边的位置，默认是居中，和right不能同时出现
			        'time': '', //自动消失时间，默认4000
			        callback: '' //弹框结束后的回调函数
			    };   	
		    var settings = $.extend(defaults,options);
		    if(settings.msg){
		    	 $('body').append(coment) 
		    }	
		    var _this=$('.lb_bc');		    _this.css({'display':'inline-block','min-width':'320px','background':'rgba(0,0,0,.8)','font-size':'22px','text-align':'center','color':'#fff','z-index':'999','max-width':'600px','padding':'15px','border-radius':'50px','position':'fixed'});		    
		    _this.html(settings.msg);		     
		    var aT = (wH- _this.outerHeight(true)) / 2;
    		var aL = (wW- _this.outerWidth(true)) / 2;
		     if(settings.shadeClose){
		     	$('body').append('<div class="tipsMask" style="width:'+$(window).width()+'px;height:'+$(window).height()+'px; background:rgba(0,0,0,.8)"></div>');
		     	
		     }
		     function clearTips(){
		     	var maskDiv=$('.tipsMask');
		     	_this.remove();
		     	if(maskDiv){
		     		maskDiv.remove();
		     	}
		     	if (settings.callback || $.type(settings.callback) == 'function') {
		     	    settings.callback();
		     	}
		     }
		     //设置left值
		     settings.left?_this.css({'left':settings.left}):_this.css({'left':aL});
		      //设置top值
		     settings.top?_this.css({'top':settings.left}):_this.css({'top':aT});
		     //设置right值
		     if(settings.right){
		    	_this.css({'right':settings.right,'left':''})
		     }
	    	 if(settings.bottom){
		    	_this.css({'bottom':settings.bottom,'top':''})
	    	 }
	    	 
		    //自动关闭时间
		    settings.time?setTimeout(clearTips,settings.time):setTimeout(clearTips,2000)		  
		    
		    
		    
		    
		    
   		},
   		open: function(options) {
   			var wH=$(window).height();
    		var wW=$(window).width();
    		
    		var defaults = {
    			'obj':'',  //点击按钮
    			'targetobj':'', //弹出层class
		        'shadeClose':false, //是否显示遮罩
		        'closeBtn':'', // 自定义关闭的按钮，默认是close
		        'left':'',  
		        'right':'',
		        'bottom':'',
		        'top': '',
		        callback: ''//回调函数
		    };  
		    var settings = $.extend(defaults,options);
		    var me=$(settings.targetobj);
	    	var aT = (wH- me.outerHeight(true))/2,
				aL = (wW- me.outerWidth(true))/2;
				
        	if(settings.obj){
    			//console.log($(settings.obj))
		    	$(settings.obj).bind('click',function(){
		    		me.css({'display':'block','z-index':'999','position':'fixed'})
		    	
		    		if(settings.shadeClose){
			     		$('body').append('<div class="oMask" style="width:'+$(window).width()+'px;height:'+$(window).height()+'px; background:rgba(0,0,0,.5);position:fixed;  top:0; z-index:888;"></div>')
			     		
				     }	
				    //设置left值
				    settings.left?me.css({'left':settings.left}):me.css({'left':aL});
				    //设置top值
				    settings.top?me.css({'top':settings.top}):me.css({'top':aT});
				    //设置right值
				    if(settings.right){
				    	me.css({'right':settings.right,'left':''});
				    }
				    if(settings.bottom){
				    	me.css({'bottom':settings.bottom,'top':''});
				    }
		    		//弹出层点击关闭
		    		var tipsMask=$('.oMask');
		    		tipsMask.bind('click ',function(){
			    		me.hide();
			    		tipsMask.remove();
			    	})
		    		//弹出层点击关闭
		    		
		    		me.find('.close').bind('click',function(){
		    			me.hide();
		    			tipsMask.remove();
		    			if (settings.callback || $.type(settings.callback) == 'function') {
		    			    settings.callback();
		    			}
		    		})
		    		
		    		if(settings.closeBtn){
		    			me.find(settings.closeBtn).bind('click',function(){
			    			me.hide();
				    		tipsMask.remove();
			    		})
		    		}
		    		
		    		
		    	})
		    	
		    	
		    }
        	
        	else{
        		me.css({'display':'block','z-index':'99999','position':'fixed'})
        		
		    		if(settings.shadeClose){
				     	$('body').append('<div class="oMask" style="width:'+$(window).width()+'px;height:'+$(window).height()+'px; background:rgba(0,0,0,.5);position:fixed; left:0; top:0; z-index:888;"></div>')
				     }	
				    //设置left值
				    settings.left?me.css({'left':settings.left}):me.css({'left':aL});
				    //设置top值
				    settings.top?me.css({'top':settings.top}):me.css({'top':aT});
				    //设置right值
				    if(settings.right){
				    	me.css({'right':settings.right,'left':''})
				    }
				    if(settings.bottom){
				    	me.css({'bottom':settings.bottom,'top':''})
				    }
		    		//弹出层点击关闭
		    		var tipsMask=$('.oMask');
		    		tipsMask.bind('click ',function(){
			    		me.hide();
			    		tipsMask.remove();
                        if (settings.callback || $.type(settings.callback) == 'function') {
		    		       settings.callback()
		    		    }
			    	})
		    		//弹出层点击关闭
		    		if(settings.closeBtn){
		    			me.find(settings.closeBtn).bind('click',function(){
			    			me.hide();
				    		tipsMask.remove();
			    		})
		    		}
		    		
		    		me.find('.close').bind('click',function(){
		    			me.hide();
			    		tipsMask.remove();
		    		})
		    		
        		
        	}
        	
   		}
    
	})
})(jQuery)


