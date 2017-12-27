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

<link href="/Public/home/dist/css/wx_qt_foot.css" rel="stylesheet">
<link href="/Public/home/dist/css/wx_qt_qbfl.css" rel="stylesheet">

</head>


<div class="wx_qbfl_nav_box">
	<!--侧边导航-->
	<div class="wx_qbfl_nav_box_left">
		<?php if(is_array($pagintor)): $i = 0; $__LIST__ = $pagintor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div class="wx_qbfl_nav"><?php echo ($item["name"]); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<!--内容-->
	<div class="wx_qbfl_nav_box_right">
		<?php if(is_array($pagintor)): $i = 0; $__LIST__ = $pagintor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; $where['f_id'] = $item['id']; $er = M('fuwu')->where($where)->select(); ?>
		<div class="wx_qbfl_nav_main_box">
			<?php if(is_array($er)): $i = 0; $__LIST__ = $er;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item1): $mod = ($i % 2 );++$i; $wheres['f_id']=$item1['id']; $san=M('fuwu')->where($wheres)->select(); ?>
			<div class="wx_qt_nav_main">
				<h2><?php echo ($item1["name"]); ?></h2>
				<div class="wx_qt_nav_main_con_box">
					<?php if(is_array($san)): $i = 0; $__LIST__ = $san;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item2): $mod = ($i % 2 );++$i;?><div class="wx_qt_nav_main_con"><a href="<?php echo U('xqym','id='.$item2['id']);?>">
						<img src="/Public/admin/uploads/<?php echo ($item2["img"]); ?>">
						<p><?php echo ($item2["name"]); ?></p>
					</a></div><?php endforeach; endif; else: echo "" ;endif; ?>
					<pre>
					
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
<!-- 底部栏显示标识 -->
<div class="wx_qt_dbgdl_active">1</div>

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

<script src="/Public/home/dist/js/font_440400_waj7qmu35o2yb9.js"></script>
<script src="/Public/home/dist/js/wx_qt_qbfl_tab.js"></script>

</html>