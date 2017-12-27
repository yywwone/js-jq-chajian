$(function () {
    var guangbo_text1=$(".guangbo_text_ul1").html()
    $(".guangbo_text_ul2").html(guangbo_text1)
    //文字滚动
    var sHeight=$('.guangbo').height();//获取焦点图的宽度（显示面积）
    var len=$('.guangbo_text_ul1 li').length/2;//获取焦点图个数
    var index=0;
    var picTimer;


    //本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度

    //鼠标划上焦点图时停止自动播放，划出时开始自动播放
    $('.guangbo').hover(function(){
        clearInterval(picTimer);
    },function(){
        picTimer=setInterval(function(){
            if(index==len){
                index=0;
                $(".guangbo_text").css("top",0)
            };
            index++;
            showPics(index);
        },5000);//自动播放间隔2秒
    }).trigger('mouseleave');//模拟鼠标穿出

    //显示图片函数，根据接受的index值显示相应内容
    function showPics(index)//普通切换
    {
        var nowTop=-index*sHeight;//根据index值计算ul元素的TOP值
        console.log(nowTop);
        $('.guangbo_text').stop(true,false).animate({'top':nowTop},300);
    }
})