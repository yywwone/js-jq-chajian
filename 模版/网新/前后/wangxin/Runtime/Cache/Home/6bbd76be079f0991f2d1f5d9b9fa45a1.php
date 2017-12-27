<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">

    <title>淘宝视频</title>

<!--CSS-->

<link rel="icon" href="/Public/home/images/logo.png" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="/Public/home/Fancybox/jquery.fancybox.css" media="screen" />
<link href="/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="/Public/home/css/index.css" rel="stylesheet" type="text/css">
<link href="/Public/home/css/float.css" rel="stylesheet" type="text/css">
<link href="/Public/home/css/nav.css" rel="stylesheet">
<link href="/Public/home/css/foot.css" rel="stylesheet">
<link href="/Public/home/css/img.css" rel="stylesheet">

<!--JS-->
<script src="/Public/home/js/jquery-1.11.1.min.js"></script>
<script src="/Public/home/js/bootstrap.min.js"></script>
<script src="/Public/home/js/meigong.js"></script>
<script src="/Public/home/js/index1.js"></script>
<script src="/Public/home/js/index.js"></script>
<script src="/Public/home/js/float.js"></script>
<script src="/Public/home/js/img.js"></script>
<script type="text/javascript" src="/Public/home/fancybox/jquery.fancybox.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".various2").fancybox({
			'width'				: '40%',
			'height'			: '70%',
			'autoScale'			: false,
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'type'				: 'iframe',
			'centerOnScroll'	: true,
		});
		$(".various3").fancybox({
			'width'				: '40%',
			'height'			: '70%',
			'autoScale'			: false,
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'type'				: 'iframe',
			'centerOnScroll'	: true,
		});
	});
</script>

</head>
<body>
<div class="nav_box">
	<div class="nav_main">
    	<div class="logo_box">
        	<a href="<?php echo U('index/index');?>"><img class="logo" src="/Public/home/images/logo.png"></a>
        </div>
        <div class="seat">
        	&nbsp;        	
        </div>
       	<div class="nav_ul">
        	<ul>
            	<li><a href="<?php echo U('index/tbsp');?>">淘宝视频</a></li>
                <li><a href="<?php echo U('index/jdal');?>">经典案例</a></li>
                <li><a href="<?php echo U('index/meigong');?>">淘宝美工</a></li>
                <li><a href="<?php echo U('index/fancybox');?>" class="various2">免费咨询</a></li>
                <li><a href="#">MG动画</a></li>
                <li><a href="<?php echo U('index/news');?>">新闻资讯</a></li>
                
                <li><a href="<?php echo U('index/about');?>">关于我们</a></li>
                <li><a href="<?php echo U('index/join');?>">加入我们</a></li>
            </ul>
        </div>
        <div class="serch_box">
        	<form class="form_search" method="post" action="<?php echo U('public/index');?>">
            	<div class="big">
            	<select class="lie" name="video">
                	<option value="1">淘宝视频</option>
                    <option value="2">热门视频</option>
                </select>
            	<input type="text" class="search_val" placeholder="请输入视频名称" style="color:black" name="text" >
                </div>
            	<input type="submit" src="/Public/home/images/03.png" value="" class="serch_img">
            </form>
        </div>
    </div>
</div>
<!--上方为电脑版导航-->
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="/Public/home/images/wap_logo.png"></a>
  
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo U('index/tbsp');?>">淘宝视频</a></li>
            <li><a href="<?php echo U('index/jdal');?>">经典案例</a></li>       
           	<li><a href="<?php echo U('index/fancybox');?>" class="various2">免费咨询</a></li>
            <li><a href="#">MG动画</a></li>
            <li><a href="<?php echo U('index/news');?>">新闻资讯</a></li>
            <li><a href="<?php echo U('index/about');?>">关于我们</a></li>
            <li><a href="<?php echo U('index/join');?>">加入我们</a></li>
        </ul>
    </div>
    </div>
</nav>
<!--上方为手机版导航-->


<!--上方为电脑版导航-->
<!--上方为手机版导航-->
<div class="container-fluid" id="lis">
	<ul class="list-inline">
        <li><a href="#">服务分类</a></li>
        <li><a href="<?php echo U('index/tbsp',array('type'=>'全部'));?>"><span style="color:#F00">全部</span></a></li>
    	<li><a href="<?php echo U('index/tbsp',array('type'=>'企业宣传片'));?>">企业宣传片</a></li>
        <li><a href="<?php echo U('index/tbsp',array('type'=>'产品片'));?>">产品片/广告片</a></li>
        <li><a href="<?php echo U('index/tbsp',array('type'=>'网剧'));?>">网剧/微电影</a></li>
        <li><a href="<?php echo U('index/tbsp',array('type'=>'品牌案例'));?>">品牌案例</a></li>
        <li><a href="<?php echo U('index/tbsp',array('type'=>'即时'));?>">即时/跟拍/摄影</a></li>
         <li><a href="<?php echo U('index/tbsp',array('type'=>'其他'));?>">其他</a></li>
    </ul>
</div>
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title" style="text-align:center;">
                <a data-toggle="collapse" data-parent="#accordion" 
                href="#collapseOne1" >
                全部视频分类
                </a>
            </h4>
        </div>
<div id="collapseOne1" class="panel-collapse collapse">
	<ul class="list-inline">
        <li><a href="#">服务分类</a></li>
        <li><a href="<?php echo U('index/tbsp',array('type'=>'全部'));?>"><span style="color:#F00">全部</span></a></li>
    	<li><a href="<?php echo U('index/tbsp',array('type'=>'企业宣传片'));?>">企业宣传片</a></li>
        <li><a href="<?php echo U('index/tbsp',array('type'=>'产品片/广告片'));?>">产品片/广告片</a></li>
        <li><a href="<?php echo U('index/tbsp',array('type'=>'网剧/微电影'));?>">网剧/微电影</a></li>
        <li><a href="<?php echo U('index/tbsp',array('type'=>'品牌案例'));?>">品牌案例</a></li>
        <li><a href="<?php echo U('index/tbsp',array('type'=>'即时/跟拍/摄影'));?>">即时/跟拍/摄影</a></li>
        <li><a href="<?php echo U('index/tbsp',array('type'=>'其他'));?>">其他</a></li>
    </ul>
<!--     <ul class="list-inline">
        <li><a href="#">服务时间</a></li>
        <li><a href="#"  style="color:#F00">不限</a></li>
        <li><a href="#">2017</a></li>
        <li><a href="#">2016</a></li>
        <li><a href="#">2015</a></li>
    </ul> -->
        </div>
    </div>
</div>
<div class="container" style="margin-top:2em">
	<div class="row">
     <div class="video_main">
        <ul  class="video_main_u"> 
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo U('index/play',array('type'=>$v["id"],'typ'=>'1'));?>">
                 <li style="width:32.5%">
                    
                        <div class="video1">
                            <img src="<?php echo ($v['img']); ?>" class="img-responsive pho">
                        </div>
                        
                        <!-- <P><?php echo ($v['name']); ?></P> -->
                        <p class="tit">视频类型：<?php echo ($v['type']); ?></p> 
                    
                </li>
                </a><?php endforeach; endif; else: echo "" ;endif; ?>
       </ul>
    </div>
    </div>
</div>
<div class="page"><?php echo ($page); ?></div>

<!--底部栏pc-->
<div class="footer">
	<div class="footer_main">
    	<div class="footer_main_b">
    	<ul>
			<li>关于我们</li>
			<li>推广服务</li>
			<li>公司账号</li>
			<li>法律声明</li> 
			<li>企业资质</li>
 			<li>联系我们</li>
			<li>合作伙伴</li>
			<li>意见反馈</li>
        </ul>
        <p class="jsj">
        北京中细软网络科技有限公司 版权所有 ©2002-2016 京ICP备11017069号-5 京公网安备11010802012915号
        <br>地址：北京市房山区长阳路中细软知识产权科技园中细软大厦
        </p>
        </div>
         <div class="footer_main_d">
        	全国免费服务热线： <span style="color:#cc1414">400-168-6868</span><br>
			公司地址： 浙江省杭州市未来科技城
        </div>
    </div>
</div>
<!--底部栏wap-->
<div class="container-fluid xfoter" style="background-color:#4e4e4e;" >
	<div style="float:left;">
		<h6 style="color:#e4e3e3;">关于我们</h6>
		<ul class="footer2">
			<li>推广服务</li>
			<li>企业资质</li> 
		</ul>      
		<ul class="footer3">
			<li>法律声明</li>
			<li>意见反馈</li>
		</ul>
	</div>

	<div style="float:right; margin-top:0.5em;">
		<p style="color:#e4e3e3; float:right;">全国服务热线<br>
			<span style="color:#e40907;">400-168-1688</span>
			<br>
			 公司地址:
			 <br>
			 杭州市余杭区
			 <br>
			 安通电子信息科创园
		 </p>
	</div>       
</div>

<!--右侧悬浮菜单-->
	<div class="slide">
		<ul class="icon">			
			<li class="qq"></li>
			<li class="tel"></li>
			<li class="wx"></li>
			<a href="#"><li class="top"></li></a>
		</ul>
		
		<ul class="info">
			<li class="qq">
				<p>在线沟通，请点我<a href="http://wpa.qq.com/msgrd?v=3&uin=925556122&site=qq&menu=yes" target="_blank">在线咨询</a></p>
			</li>
			<li class="tel">
				<p>咨询热线：<br>400-800-8888<br>客服qq：<br>862164018</p>
			</li>
			<li class="wx">
				<div class="img"><img src="/Public/home/images/1441956938.png"/></div>
			</li>
			
		</ul>
	</div>
	<div id="btn" class="index_cy"></div>

</body>
</html>