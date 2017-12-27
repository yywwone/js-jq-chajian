<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>浙大网新</title>


<link rel="icon" href="/Public/home/dist/images/" type="image/x-icon"/>
<!--通用CSS-->
<link href="/Public/home/dist/css/reset1.css" rel="stylesheet">
<link href="/Public/home/dist/css/wx_qt_foot.css" rel="stylesheet">
<!--本页CSS-->

<link href="/Public/home/dist/css/wx_qt_gslb.css" rel="stylesheet">
<link href="/Public/home/dist/css/wx_qt_foot.css" rel="stylesheet">

</head>


<?php if(is_array($pagintor)): $i = 0; $__LIST__ = $pagintor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div class="wx_qt_gyslb_box"><a href="<?php echo U('aboutc','id='.$item['id']);?>">
	<div class="wx_qt_gyslb_box_top"></div>
	<div class="wx_qt_gyslb_main_box">
		<div class="wx_qt_gyslb_main_top">
			<div class="wx_qt_gyslb_main_top_left">
				<img src="/Public/admin/uploads/<?php echo ($item["img"]); ?>">
			</div>
			<div class="wx_qt_gyslb_main_top_right">
				<h2 class="wx_qt_gyslb_main_top_right_tit"><?php echo ($item["name"]); ?></h2>
				<p><?php echo ($item["jianjie"]); ?>...</p>
				<p class="wx_qt_gyslb_main_bottom_main_ckxq_box">
					<span class="wx_qt_gslb_icon_text">查看详情</span>
					<svg class="wx_qt_gslb_icon" aria-hidden="true">
						<use xlink:href="#icon-chakangengduo"></use>
					</svg>
				</p>
			</div>	
		</div>
	</div>
</a></div><?php endforeach; endif; else: echo "" ;endif; ?>
<div class="wx_qt_gyslb_box_top"></div>

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

<!--本页JS-->
<script src="/Public/home/dist/js/font_440400_waj7qmu35o2yb9.js"></script>
<script src="/Public/home/dist/js/wx_qt_text.js"></script>
<script type="text/javascript">
            if(<?php echo I('get.alert');?>=='3'){
            	alert('请先登录');
            }
		</script>

</html>