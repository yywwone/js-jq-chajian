

/*页面顶部轮播*/
$(function(){
    var length=$('.slider-main>li').length,
        startIndex=null,
        canAuto=false,
        t=3000,
        timer=null,
        currentIndex=0;
    $('.slider-main>li:not(:first)').hide();
    $('.slider-main,.btn,.index').hover(
        function(){
            stop();
        },
        function(){
            start();
        });
    $(".index>li").mouseenter(function(){
        startIndex=currentIndex;
        currentIndex=$(this).index();
        play(startIndex,currentIndex);
    });
    $('.pre').click(function(){
        startIndex=currentIndex;
        currentIndex=--currentIndex % length;
        play(startIndex,currentIndex);
    });
    $('.next').click(function(){
        startIndex=currentIndex;
        currentIndex=++currentIndex % length;
        play(startIndex,currentIndex);
    });

    function play(){
        if (startIndex === currentIndex) {
            return;
        }
        $('.slider-main>li').eq(startIndex).stop().fadeOut(500).
        parent().children().eq(currentIndex).stop().fadeIn(1000);
        $('.index>li').eq(currentIndex).addClass
        ('active').siblings().removeClass('active');
    }
    function start(){
        if(!canAuto){
            canAuto=true;
            timer=setInterval(function(){$('.next').triggerHandler('click');},t);
        }
    }
    function stop(){
        canAuto=false;
        clearInterval(timer);
    }
    start();
});
/* 侧边栏导航*/
$(function(){
    $('.category .category-item').mouseover(function(){
        var index=$(this).index();
        $('.children').eq(index).css('display','block');

    }).mouseout(function(){
        var i=$(this).index();
        $('.children').eq(i).css('display','none');

    })
});
/* 明星产品横向滚动*/
(function($){
    $.fn.Carousel=function(options){
        var dft={
            div:$('.xm-carousel-wrapper'),
            ul:$('.main-banner'),
            next:$('.arrow-l'),
            pre:$('.arrow-r'),
            btn:$('.arrow'),
            num:1,
            dot:null,
            left:0,
            leftA:0,
            startIndex:0,
            currentIndex: 0,
            t:8000,
            timer:null,
            auto:true
        };
      $.extend(dft,options);
        return this.each(function(){
            $(dft.btn).hover(
                function(){
                    stop();
                },
                function(){
                    if(dft.auto===true){
                        start();
                    }
                });
            $(dft.pre).click(function(){
                if(dft.currentIndex==0){
                    return false;
                }
                {
                    dft.startIndex = dft.currentIndex;
                    dft.currentIndex = --dft.currentIndex % dft.ul.length;
                    if(dft.dot===null) {
                        dft.pre.addClass('disable').siblings().removeClass('disable');
                    }else{

                        dft.dot.eq(dft.currentIndex).addClass('pager-active').siblings().removeClass('pager-active');
                    }
                    dft.left = "-100%";
                    dft.leftA = "100%";
                    play(dft.left, dft.leftA);
                }
            });
            $(dft.next).click(function(){
                if(dft.currentIndex==dft.num){
                    return false;
                }
                {
                    dft.startIndex = dft.currentIndex;
                    dft.currentIndex = ++dft.currentIndex % dft.ul.length;
                    if(dft.dot===null){
                            dft.next.addClass('disable').siblings().removeClass('disable');
                    }else{
                        dft.dot.eq(dft.currentIndex).addClass('pager-active').siblings().removeClass('pager-active');
                    }
                    dft.left = "100%";
                    dft.leftA = "-100%";
                    play(dft.left, dft.leftA);
                }
            });
            if(dft.dot!==null){
               dft.dot.click(function(){
                    dft.startIndex=dft.currentIndex;
                    dft.currentIndex=$(this).index();
                    if(dft.currentIndex>dft.startIndex){
                        dft.left = "100%";
                        dft.leftA = "-100%";
                        dft.dot.eq(dft.currentIndex).addClass('pager-active').siblings().removeClass('pager-active');
                        play(dft.currentIndex, dft.startIndex);
                    }else{
                        dft.left = "-100%";
                        dft.leftA = "100%";
                        dft.dot.eq(dft.currentIndex).addClass('pager-active').siblings().removeClass('pager-active');
                        play(dft.currentIndex, dft.startIndex);
                    }
                });
            }
            function play(){
                dft.ul.eq(dft.currentIndex).css({left: dft.left}).stop().animate({left: 0});
                dft.ul.eq(dft.startIndex).css({left: 0}).stop().animate({left: dft.leftA});
            }
            function start() {
                dft.timer = setInterval(function () {
                    if(dft.currentIndex!==dft.num) {
                        dft.next.triggerHandler("click");
                    }else{
                        dft.pre.triggerHandler("click");
                    }
                },dft.t);
            }
            function stop(){
                clearInterval(dft.timer);
            }
            if(dft.auto===true){
                start();
            }
        });
    }
})(jQuery);
$('.xm-carousel-wrapper').Carousel({
});
$('.xm-carousel-wrapper-1').Carousel({
    num:3,
    auto:false,
    next:$('.arrow-l-1'),
    pre:$('.arrow-r-1'),
    ul:$('.xm-carousel-list')
});
$('.xm-carousel-wrapper-2').Carousel({
    ul:$('#book').find('li'),
    next:$('.control-next '),
    pre:$('.control-prev'),
    num:2,
    dot:$('.content-item-first').find('.pager'),
    auto:false
});
$('.xm-carousel-wrapper-3').Carousel({
    ul:$('#mi').find('li'),
    next:$('.control-next-1'),
    pre:$('.control-prev-1'),
    num:3,
    dot:$('.content-item-second').find('.pager'),
    auto:false
});
$('.xm-carousel-wrapper-4').Carousel({
    ul:$('#GM').find('li'),
    next:$('.control-next-2'),
    pre:$('.control-prev-2'),
    num:3,
    dot:$('.content-item-third').find('.pager'),
    auto:false
});
$('.xm-carousel-wrapper-5').Carousel({
    ul:$('#app').find('li'),
    next:$('.control-next-3'),
    pre:$('.control-prev-3'),
    num:3,
    dot:$('.content-item-fourth').find('.pager'),
    auto:false
});


