<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">

	<title>基围虾影视</title>

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


<div id="wap">
	<!--头部轮播-->
<div data-ride="carousel" data-interval="2000" class="carousel slide" id="carousel-example-generic">
        <div role="listbox" class="carousel-inner">
          <div class="item active">
            <img alt="First slide" src="/Public/home/images/banner.jpg" class="img-responsive">
          </div>
          <div class="item">
             <img alt="First slide" src="/Public/home/images/banner1.jpg" class="img-responsive">
          </div>
          <div class="item">
             <img alt="First slide" src="/Public/home/images/banner2.jpg" class="img-responsive">
          </div>
        </div>
</div>
<!--流程-->
<div class="container-fluid" style="margin-top: 15px;" id="lc">
	<div class="row">
		<div class="col-xs-4">
			<div class="row">
				<div class="col-xs-10">
					<img src="/Public/home/images/1_01.png" class="img-responsive">
					<h5 style="text-align: center">业务沟通</h5>
				</div>
			</div>			 
		</div>
		<div class="col-xs-4">
			<div class="row">
				<div class="col-xs-10">
					<img src="/Public/home/images/1_02.png" class="img-responsive">
					<h5 style="text-align: center">签订合同</h5>
				</div>
			</div>			 
		</div>
		<div class="col-xs-4">
			<div class="row">
				<div class="col-xs-10">
					<img src="/Public/home/images/1_03.png" class="img-responsive">
					<h5 style="text-align: center">递交成片</h5>
				</div>
			</div>			 
		</div>
		
	</div>
</div>
<!--累计成功-->
<div class="container-fluid" id="fuwu-box">
	<div id="fuwu">
		<div class="row">
		 <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-xs-4">	
				 <p>累计认证服务：<span class="price"><?php echo ($v['ljrz']); ?></span>&nbsp;个</p>
			</div>
			<div class="col-xs-4">	
				 <p>累计认证交易额：<span class="price"><?php echo ($v['ljrz']); ?></span>&nbsp;个</p>
			</div>
			<div class="col-xs-4">	
				 <p>今日交易额度：<span class="price"><?php echo ($v['jrjy']); ?></span>&nbsp;个</p>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="row">
    <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-xs-4">	
				 <p>昨日认证服务：<span class="price"><?php echo ($v['zrrz']); ?></span>&nbsp;个</p>
			</div>
			<div class="col-xs-4">	
				 <p>累计认证交易额：<span class="price"><?php echo ($v['ljrz']); ?></span>&nbsp;个</p>
			</div>
			<div class="col-xs-4">	
				 <p>昨日交易额度：<span class="price"><?php echo ($v['zrjy']); ?></span>&nbsp;个</p>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>	
		<div class="row">
		 <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-xs-4">	
				 <p>累计认证服务：<span class="price"><?php echo ($v['ljrz']); ?></span>&nbsp;个</p>
			</div>
			<div class="col-xs-4">	
				 <p>累计认证交易额：<span class="price"><?php echo ($v['ljjy']); ?></span>&nbsp;个</p>
			</div>
			<div class="col-xs-4">	
				 <p>今日交易额度：<span class="price"><?php echo ($v['jrjy']); ?></span>&nbsp;个</p>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>

</div>
<!--热门视频-->
<h4 style="margin-left:15px;">热门视频</h4>
<div class="container-fluid" id="rmsp">
	<div class="row">
		<?php if(is_array($videos)): $i = 0; $__LIST__ = $videos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><!-- <?php if(($mod) == "2"): ?><div>1</div><?php endif; ?> -->
		<div class="col-xs-6" style="margin-bottom:10px">
			<a href="<?php echo U('index/play',array('type'=>$v["id"],'typ'=>'2'));?>"><img src="<?php echo ($v["img"]); ?>" class="img-responsive" style="width:100%;height:100px"></a>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
<!--客户评价-->
<div style="margin-left:15px;">
	<h4>客户评价</h4>
	<a href="fancybox1.html" class="various3" style="color: #000;text-decoration:none;outline: none;display: block;margin-bottom: 15px;">输入评价</a>
	<marquee direction="up" loop="-1" width="100%" height="18px;" scrollamount="1" style="">
		<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p class="eval_u">
	        <?php echo ($v['txt']); ?>
	         </p><?php endforeach; endif; else: echo "" ;endif; ?>
	</marquee>
</div>

<!--资讯标题-->
<div class="container-fluid" style="margin-top: 15px;mar">
	<div class="row">
		<div class="col-xs-4 col-sm-6">
			<h4>资讯标题</h4>
			<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p style="font-size: 1em"><?php echo ($v['txt']); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
		
		</div>
		<div class="col-xs-8 col-sm-6">
			<img src="/Public/home/images/zx.png" class="img-responsive">
		</div>
	</div>
</div>
	
</div>



<div id="pc">
	<div class="banner_box">
    	<ul class="banner_box_u">
        	<li><a href="#"><img  src="/Public/home/images/banner.jpg" class="banner1"></a></li>
            <li><a href="#"><img  src="/Public/home/images/banner1.jpg" class="banner1"></a></li>
            <li><a href="#"><img  src="/Public/home/images/banner2.jpg" class="banner1"></a></li>
       	</ul>
       <div class="prenext"></div>
       <div class="next"></div>
	</div>
	<div class="main">
	<div class="core">
    	<ul>
        	<li>
            	<div class="message_box">
                	<img src="/Public/home/images/1_01.png" class="message_img">
                    <h2 class="message_title">业务沟通</h2>
                    <p class="message">
                    清风作美<br>
                    笑傲如花<br>
                    艺术工匠<br>
                    快门成画<br>
                    </p>
                </div>
            </li>
            <li>
            	<div class="message_box">
                	<img src="/Public/home/images/1_02.png" class="message_img">
                    <h2 class="message_title">签订合同</h2>
                    <p class="message">
                    对于摄影，我们不只是热爱，更是成为一种生活方式。
                    </p>
                </div>
            </li>
            <li>
            	<div class="message_box">
                	<img src="/Public/home/images/1_03.png" class="message_img">
                    <h2 class="message_title">递交成片</h2>
                    <p class="message">
                    生活若是记录的堆叠 
					我想堆叠一翦光影 
					调整好生命的焦距 
					以1/250秒为单位 
					沿著一道道曝光前进
                    </p>
                </div>        
            </li>
        </ul>
    </div>
    <div class="price_box">
      <ul class="price_box_u">
       <li>
    	 <div class="first">
        	 <p class="price_main">累计认证服务：<span class="price"><?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v['jrjy']); endforeach; endif; else: echo "" ;endif; ?></span>&nbsp;个</p>
         </div>
         <div class="second">
        	 <p class="price_main">累计认证交易额：<span class="price"><?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v['jrjy']); endforeach; endif; else: echo "" ;endif; ?></span>&nbsp;元</p>
         </div>
         <div class="third">
        	 <p class="price_main">今日交易额度：<span class="price"><?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v['jrjy']); endforeach; endif; else: echo "" ;endif; ?></span>&nbsp;元</p> 
      	 </div>
       </li>
       <li>
       	<div class="first">
        	 <p class="price_main">昨日认证服务：<span class="price"><?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v['jrjy']); endforeach; endif; else: echo "" ;endif; ?></span>&nbsp;个</p>
         </div>
         <div class="second">
        	 <p class="price_main">累计认证交易额：<span class="price"><?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v['jrjy']); endforeach; endif; else: echo "" ;endif; ?></span>&nbsp;元</p>
         </div>
         <div class="third">
        	 <p class="price_main">昨日交易额度：<span class="price"><?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v['jrjy']); endforeach; endif; else: echo "" ;endif; ?></span>&nbsp;元</p> 
      	 </div>
       </li>
       <li>
    	 <div class="first">
        	 <p class="price_main">累计认证服务：<span class="price"><?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v['jrjy']); endforeach; endif; else: echo "" ;endif; ?></span>&nbsp;个</p>
         </div>
         <div class="second">
        	 <p class="price_main">累计认证交易额：<span class="price"><?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v['jrjy']); endforeach; endif; else: echo "" ;endif; ?></span>&nbsp;元</p>
         </div>
         <div class="third">
        	 <p class="price_main">今日交易额度：<span class="price">
        	 <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v['jrjy']); endforeach; endif; else: echo "" ;endif; ?></span>&nbsp;元</p> 
      	 </div>
       </li>
      </ul>
    </div>
    <div class="video">
    	<div class="video_title">
        	<ul class="video_title_u">

<a href="<?php echo U('index/tbsp',array('video'=>'1'));?>"><li>热门视频</li>
            	</a>	
            	<a href="<?php echo U('index/tbsp',array('video'=>'2'));?>"><li>淘宝视频</li>
            	</a>	
            </ul>
            <p class="more"><a href="#">更多&nbsp;&gt;</a></p>
        </div>
        <div class="video_main">
        	<ul  class="video_main_u"> 
        	<?php if(is_array($video)): $i = 0; $__LIST__ = $video;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo U('index/play',array('type'=>$v["id"],'typ'=>'1'));?>">
            	<li style="width:32.5%">
            	  <img src="<?php echo ($v['img']); ?>" style="width:100%;height:100%">
            	 </li>
            	</a><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            
        </div>
    </div>
    <div class="eval">
    	<h2>客户评论</h2>
        <h4><a href="<?php echo U('index/fancybox1');?>" class="various3">输入评价</a></h4>
        <div class="eval_main">
         <marquee direction="up" loop="-1" width="100%" height="18px;" scrollamount="1">
         <?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p class="eval_u">
         <?php echo ($v['txt']); ?>
         </p><?php endforeach; endif; else: echo "" ;endif; ?>
         </marquee>
        </div>
    </div>
    <div class="aval_box">
    	<div class="aval_box_main">
        	<h2 class="aval_box_main_t"><a href="news.html">资讯中心</a></h2>
        	<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p class="aval_box_main_b">
            
            <?php echo ($v['txt']); ?>
         
            </p><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="aval_box_img">
        	<img src="/Public/home/images/zx.png">
        </div>
    </div>
</div>
</div>


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