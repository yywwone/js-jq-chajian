var autoheight = $(window).height()-$(".ds-header").height()-$(".vso-copyright-wrap").height()-$(".m-header-top").height()-12;
     var autoWidth = autoheight/540*1920;
     var windowWidth = $(window).width();
     if(autoheight<300) autoheight = 300 ;
     if($(window).width()<1200) windowWidth = 1200;
     if(autoWidth<windowWidth) autoWidth = windowWidth;
     $(".autoheight,.ds-table").height(autoheight);
     $(".autoheight img").height(autoheight).css({
                                                     "margin-top":-autoheight/2+"px",
                                                     "margin-left":-autoWidth/2+"px"
                                                 });

     $(window).resize(function(){
         autoheight = $(window).height()-$(".ds-header").height()-$(".vso-copyright-wrap").height()-$(".m-header-top").height()-12;
         autoWidth = autoheight/540*1920;
         windowWidth = $(window).width();
         if(autoheight<300) autoheight = 300 ;
        if(autoWidth<windowWidth) autoWidth = windowWidth ;
        $(".autoheight,.ds-table").height(autoheight);
        $(".autoheight img").height(autoheight).css({
                                                         "margin-top":-autoheight/2+"px",
                                                         "margin-left":-autoWidth/2+"px"
                                                     });

    });
;(function($){
    var Placeholder,
        inputHolder = 'placeholder' in document.createElement('input'),
        textareaHolder = 'placeholder' in document.createElement('textarea');
    Placeholder = {
        ini:function () {
            if (inputHolder && textareaHolder) {
                return false;
            }
            this.el = $(':text[placeholder],:password[placeholder],textarea[placeholder]');
            this.setHolders();
        },
        setHolders: function(obj){
            var el = obj ? $(obj) : this.el;
            if (el) {
                var self = this;
                el.each(function() {
                    var span = $('<label />');
                    span.text( $(this).attr('placeholder') );
                    span.css({
                        color: '#999',
                        fontSize: $(this).css('fontSize'),
                        fontFamily: $(this).css('fontFamily'),
                        fontWeight: $(this).css('fontWeight'),
                        position: 'absolute',
                        top: "0px",
                        left: "10px",
                        // width: $(this).outerWidth() + 'px',
                        height: $(this).outerHeight() + 'px',
                        lineHeight: $(this).outerHeight() + 'px',
                        textIndent: $(this).css('textIndent'),
                        // paddingLeft: $(this).css('borderLeftWidth'),
                        paddingTop: $(this).css('borderTopWidth'),
                        paddingRight: $(this).css('borderRightWidth'),
                        paddingBottom: $(this).css('borderBottomWidth'),
                        display: 'inline',
                        overflow: 'hidden'
                    });
                    if (!$(this).attr('id')) {
                        $(this).attr('id', self.guid());
                    }
                    span.attr('for', $(this).attr('id'));
                    $(this).after(span);
                    self.setListen(this, span);
                    //span.each(function(){
                        var label = $(span);
                        $(span).on("click",function(){
                            label.prev("input[type='text']").focus();
                    //    });
                    });
                    /*
                    span.on("click",function(){
                        _this.parent().first().focus();
                    });
                    */

                })
            }
        },
        setListen : function(el, holder) {
            if (!inputHolder || !textareaHolder) {
                el = $(el);
                el.bind('keydown', function(e){
                        if (el.val() != '') {
                            holder.hide(0);
                        } else if ( /[a-zA-Z0-9`~!@#\$%\^&\*\(\)_+-=\[\]\{\};:'"\|\\,.\/\?<>]/.test(String.fromCharCode(e.keyCode)) ) {
                            holder.hide(0);
                        } else {
                            holder.show(0);
                        }
                });
                el.bind('keyup', function(e){
                        if (el.val() != '') {
                            holder.hide(0);
                        } else {
                            holder.show(0);
                        }

                })
            }
        },
        guid: function() {
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = Math.random()*16| 0,
                    v = c == 'x' ? r : (r&0x3|0x8);
                return v.toString(16);
            }).toUpperCase();
        }
    }

    $.fn.placeholder = function () {
        if (inputHolder && textareaHolder) {
            return this;
        }
        Placeholder.setListen(this);
        return this;
    }

    $.placeholder = Placeholder;

})(jQuery);
jQuery(function($){$.placeholder.ini();});
$(".ds-block-li").on("click",function (event) {
    if($(this).hasClass("active")){
        $(".ds-menu").stop(true,true).slideUp(200);
        $(this).removeClass("active");
    }
    else{
        $(".ds-menu").stop(true,true).slideDown(200);
        $(this).addClass("active");
    }
    stopPropagation(event)
});
$(".ds-menu").on("click",function (event) {
    stopPropagation(event)
});
$(document).on("click",function () {
    $(".ds-menu").stop(true,true).slideUp(200,function(){
        $(".ds-block-li").removeClass("active");
    });
});



$(".ds-category-type").on("click",function(){
    var checkbox = $(this).find("i.checkbox");
    if(checkbox.hasClass("checked")){
        $(this).find("input").prop("checked",false);
        checkbox.removeClass("checked");
    }
    else{
        $(".ds-category-type i.checkbox").removeClass("checked");
        $(this).find("input").prop("checked",true);

        checkbox.addClass("checked");
    }
});


;(function ($) {
    var defaults = {
        action: "click",
        container:".tab-box .tab-content",
        className: "active"
    };
    //创建对象

    $.fn.Tab = function (options) {
        var options = $.extend(defaults, options || {});
        var container = options.container;

        return this.each(function () {
            var tabAction = getAction(defaults.action);


            var className = options.className;
            var _this = this;
            if(tabAction=="onmousemove"){
                var index = $(_this).index();
                this.onmouseover = function(){
                    options.tabSwitch(_this,index,container,className);
                };
            }
            if(tabAction=="onclick"){
                this.onclick = function(){
                    var index = $(_this).index();
                    options.tabSwitch(_this,index,container,className);
                };
            }
        });
    };
    //tab切换方法
    defaults.tabSwitch = function (_this,index,container,className) {
        $(_this).addClass(className).siblings().removeClass(className);
        $(container).eq(index).show().siblings().hide();
    };
    defaults.tabSwitchClose = function (_this,index,container,className) {};

    //获得某些参数的方法
    function getAction(action) {
        var tabAction;
        switch (action) {
            case "click":
                tabAction = "onclick";
                break;
            case "hover":
                tabAction = "onmousemove";
                break;
        }
        return tabAction;
    };
})(jQuery);

$(function () {
    $('.ds-tab-nav li').Tab({
        action: "hover",
        container:".tab-box .tab-content"
    });

     $('.ds-friend-nav li').Tab({
        action: "hover",
        container:".friend-box .friend-content"
    });
 });


$("[data-link='true']").on("click", function() {
    var pathname = window.location.pathname,
        url = $(this).attr("data-link-url"),
        parameter = url.substring(1);
    if((pathname === '/project/default/index') || (pathname === '/'))
    {
        $("body, html").animate({
            scrollTop: $(url).offset().top
        }, "slow");
    }
    else
    {
        window.location.href = 'http://maker.vsochina.com/project/default/index?to='+parameter;
    }
});

$("[data-link='localpage']").on("click", function() {
    var url = $(this).attr("data-link-url");
    $("body, html").animate({
        scrollTop: $(url).offset().top
    }, "slow");
});

var pushShow = null;
var pushHide = null;
function pushShowFun () {
    if(getCookie('maker_step') ==""){ clearInterval(pushShow); return false;}
    idnum++;
    var id = "id_" +idnum
    var html = '<div class="push-content" id="'+id+'" style="">\
        <p class="push-bg"></p>\
        <p class="push-title"><a href="javascript:;" class="push-close"></a>新项目'+id+'：</p>暗黑者：是一部由周琳皓执导，腾讯视频，慈文传媒集团出品，郭京飞，陆毅，经超，李岷城，甘露等领衔主演的季播，悬疑，破案类电视剧。</div>';
    $(".push-box .push-box-close").before(html);
    clearInterval(pushShow);
    $("#"+id).stop(true).animate({"opacity":1,"height":"80px"},500,function(){
        $(".push-box").show();
    });
    if($(".push-box .push-content").length>=3){
        clearInterval(pushShow);
    }

}
function pushHideFun() {
    if ($(".push-box .push-content").length <= 1) {
        clearInterval(pushHide);
        $(".push-box").stop(true).animate({"opacity": 0}, 4000, function () {
            $(".push-content").remove();
            clearInterval(pushHide);
        });
    }
    else {
        $(".push-box .push-content").eq(0).stop(true).animate({"opacity": 0}, 2000, function () {
            $(".push-box .push-content").eq(0).remove();
        });
    }
}
var ua = navigator.userAgent;
var ipad = ua.match(/(iPad).*OS\s([\d_]+)/),
    isIphone = !ipad && ua.match(/(iPhone\sOS)\s([\d_]+)/),
    isAndroid = ua.match(/(Android)\s+([\d.]+)/),
    isMobile = isIphone || isAndroid;
    if(isMobile) {
    }else{
          var makerStep = getCookie('maker_step');
          if(makerStep ==""){
              $("body").append('<div class="maker-mask-step"></div><div class="maker-mask"></div>');
              /*$(".maker-mask,.maker-mask-step").show(100,function(){
                  setCookie('maker_step', true, Date() + 365, '/', '.vsochina.com');
              });
              */
           }else{
              $(".maker-mask,.maker-mask-step").hide();
           }
    }
$(document).on("click",".maker-mask,.maker-mask-step",function(){
    //pushShow = setInterval(pushShowFun,500);
    $(".maker-mask,.maker-mask-step").hide();
    //setCookie('maker_step', true, '', '/', '.vsochina.com');
});
/*阻止冒泡*/
function stopPropagation(event){
    if (event.stopPropagation)  event.stopPropagation();
    else  event.cancelBubble = true;
}

$(function(){
    $("img.lazy").lazyload({
        placeholder : "http://static.vsochina.com/public/images/ajax-loader.gif",
        effect : "fadeIn",
        failurelimit: 500
    });
});

//创客空间弹出框
//icon(0：图标是勾，1：图标是警告)
//msg(字符串提示信息)
//btns(0：只有确认按钮，1：有确认按钮和取消按钮)
//confirmFun(点击确定按钮后执行的函数，不带参数)
function popOut(icon, msg, btns, confirmFun, id)
{
    var iconClass, btnHtml, html;
    if(parseInt(icon) == 0)
    {
        iconClass = "icon-modal-correct";
    }
    else if(parseInt(icon) == 1)
    {
        iconClass = "icon-modal-alert";
    }
    if(parseInt(btns) == 0)
    {
        btnHtml = '<a href="javascript:void(0);" class="maker-modal-confirm">确定</a>';
    }
    else if(parseInt(btns) == 1)
    {
        btnHtml = '<a href="javascript:void(0);" class="maker-modal-confirm">确定</a>\
                    <a href="javascript:void(0);" class="maker-modal-cancel">取消</a>';
    }
    var _obj = $(".maker-modal-box");
    if(_obj.length == 0)
    {
        html = '<div class="maker-modal-box">\
                    <div class="maker-modal-backdrop"></div>\
                    <div class="maker-modal">\
                        <div class="maker-modal-icon"><i class="icon-24 ' + iconClass + '"></i></div>\
                        <p class="maker-modal-msg">' + msg + '</p>\
                        <div class="maker-modal-btns">' + btnHtml + '</div>\
                    </div>\
                </div>';
        $("body").append(html);
    }
    else
    {
        _obj.find(".maker-modal-icon i").removeClass().addClass('icon-24').addClass(iconClass);
        _obj.find('.maker-modal-msg').html(msg);
        _obj.find('.maker-modal-btns').html(btnHtml);
    }
    $(".maker-modal-cancel").on('click', function(event) {
        if ($(".maker-modal-box").length > 0) {
            $(".maker-modal-box").hide();
        }
    });
    $(".maker-modal-confirm").on('click', function(event) {
        if (typeof confirmFun == "function") {
            confirmFun(id);
        }
        if ($(".maker-modal-box").length > 0) {
            $(".maker-modal-box").hide();
        }
    });
    if ($(".maker-modal-box").length > 0) {
        $(".maker-modal-box").show();
    }
}

function alert(msg) {
    popOut(1, msg, 0, null, null);
}

function confirm(msg, callback, id) {
    popOut(1, msg, 1, callback, id);
}