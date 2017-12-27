<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>订单</title>


<link rel="icon" href="/Public/home/dist/images/" type="image/x-icon"/>
<!--通用CSS-->
<link href="/Public/home/dist/css/reset1.css" rel="stylesheet">
<link href="/Public/home/dist/css/wx_qt_foot.css" rel="stylesheet">
<!--本页CSS-->

		<link href="/Public/home/dist/css/reset.css" type="text/css" rel="stylesheet" />
		<link href="/Public/home/dist/css/oder.css" type="text/css" rel="stylesheet" />
		<style type="text/css">
			.oder-w_bg{
				display: inline-block;
				width: 0.8rem;
				height: 0.3rem;
				background-color: rgb(35, 59, 131);
				text-align: center;
				color: #fff;
				line-height: 0.3rem;
				border-radius: 5px;
			}
		</style>

</head>


		<!--欢迎-->
		<header class="hello-sign-box">
			<div class="welcoming-speech2">
				<p>服&nbsp;务&nbsp;订&nbsp;单</p>
			</div>
		</header>
		<!--选项卡导航部分-->
			<div class="tab-box">
				<ul class="tab-nav">
					<li class="tab-nav-list1">全部订单</li>
					<li class="tab-nav-list2">正在服务</li>
					<li class="tab-nav-list3">完成订单</li>
				</ul>
				
			</div>
			<!--选项卡内容大盒子-->
			<div class="tab-content">
				<!--内容1-->
				<div class="all-oder">
					<ul class="all-oder-item">
						<?php if(is_array($pagintor)): $i = 0; $__LIST__ = $pagintor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li>
							<div class="all-oder-con">
								<p class="oder-name">项目名称：<span><?php echo ($item["fw_name"]); ?></span></p>
								<p class="oder-company">服务公司：<span><?php echo ($item["fws_name"]); ?></span></p>
								<?php
 if ($item['zhuangtai']==0) { ?>
								<p class="oder-w">未完成</p>
								<?php	 }elseif($item['zhuangtai']==1){ ?>
								<p class="oder-w">进行中</p>
								<?php
 }elseif($item['zhuangtai']==2){ ?>
								<p class="oder-w">已完成</p>
								<?php
 }elseif($item['zhuangtai']==3){ ?>
								<p class="oder-w">已评价</p>
								<?php
 } ?>
								
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
						
					</ul>
				</div>
				<!--内容2-->
				<div class="all-oder">
					<ul class="all-oder-item">
						<?php if(is_array($pagintor1)): $i = 0; $__LIST__ = $pagintor1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li>
							<div class="all-oder-con">
								<p class="oder-name">项目名称：<span><?php echo ($item["fw_name"]); ?></span></p>
								<p class="oder-company">服务公司：<span><?php echo ($item["fws_name"]); ?></span></p>
								<p class="oder-w"><a class="oder-w_bg" href="<?php echo U('queren','id='.$item['id']);?>">确认完成</a></p>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<!--内容三-->
				<div class="all-oder">
					<ul class="all-oder-item">
						<?php if(is_array($pagintor2)): $i = 0; $__LIST__ = $pagintor2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li>
							<div class="all-oder-con">
								<p class="oder-name">项目名称：<span><?php echo ($item["fw_name"]); ?></span></p>
								<p class="oder-company">服务公司：<span><?php echo ($item["fws_name"]); ?></span></p>
								<p class="oder-w"><a class="oder-w_bg"  href="<?php echo U('evaluate','id='.$item['id']);?>">请评价</a></p>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<!-- 底部栏显示标识 -->
			<div class="wx_qt_dbgdl_active">3</div>
			<!--根节点JS-->
			

<!--底部-->
<div class="wx_qt_foot_zw"></div>
<div class="wx_qt_foot">
	<div class="wx_qt_foot_top"></div>
	<div class="wx_qt_foot_main_box">
		<div class="wx_qt_foot_main_con wx_qt_foot_main_con_active"><a href="<?php echo U('index');?>">
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-shouye-copy"></use>
			</svg>
			<p class="">园区首页</p>
		</a></div>
		<div class="wx_qt_foot_main_con"><a href="<?php echo U('qbfl');?>">
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-fenlei"></use>
			</svg>
			<p>分类</p>
		</a></div>
		<div class="wx_qt_foot_main_con"><a href="#">
            <!--<a href="<?php echo U('zsyz');?>">-->
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-zhaoshang"></use>
			</svg>
			<p>论坛</p>
		</a></div>
		<?php  if (session('user')) { ?>

		<div class="wx_qt_foot_main_con"><a href="<?php echo U('personal');?>">
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-iconfontyonghu-copy"></use>
			</svg>
			<p>用户中心</p>
		</a></div>
		<?php	 }else{ ?>
		<div class="wx_qt_foot_main_con"><a href="<?php echo U('gslb/gslb');?>">
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-iconfontyonghu-copy"></use>
			</svg>
			<p>用户中心</p>
		</a></div>
		<?php	 } ?>
	</div>
</div>
<!--通用JS-->
<script src="/Public/home/dist/js/jquery-1.11.1.min.js"></script>
<script src="/Public/home/dist/js/rem.js"></script>
<script src="/Public/home/dist/js/font_440400_waj7qmu35o2yb9.js"></script>
<script src="/Public/home/dist/js/wx_qt_foot_active.js"></script>
<!--本页JS-->

<script src="/Public/home/dist/js/mobblie.js"></script>
<script src="/Public/home/dist/js/oder.js"></script>
<script type="text/javascript">
            if(<?php echo I('get.alert');?>=='1'){
            	alert('评价成功');
            }
          
		</script>

</html>