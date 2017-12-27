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

<!--本页CSS-->
<link href="/Public/home/dist/css/wx_qt_zsyz.css" rel="stylesheet">
<style type="text/css">
	.t::-webkit-scrollbar {
		width: 0px;
		height: 1px;
}
</style>

</head>


<div class="wx_qt_zsyz_header_img">
	<img src="/Public/admin/uploads/<?php echo ($xinxi["rz_img"]); ?>">
</div>
<div class="wx_qt_zsyz_main_box">
	<div class="wx_qt_zsyz_main_tit">
		<ul>
			<li class="wx_qt_zsyz_main_tit_active">招商政策</li>
			<li>申请入驻</li>
			<li>联系我们</li>
		</ul>
	</div>
	<div class="wx_qt_zsyz_main_con_box">
		<div class="wx_qt_zsyz_main_con">
			<textarea   class='t'    readonly="readonly" style="border:none;width:100%;height:400px"><?php echo ($xinxi["zszc"]); ?></textarea>
		</div>
		<!--申请入驻-->
		<div class="wx_qt_zsyz_main_con">
			<textarea   class='t'    readonly="readonly" style="border:none;width:100%;height:400px"><?php echo ($xinxi["rzxx"]); ?></textarea>
		</div>
		<div class="wx_qt_zsyz_main_con">
			<textarea   class='t'    readonly="readonly" style="border:none;width:100%;height:400px"><?php echo ($xinxi["lxwm"]); ?></textarea>	
		</div>

	</div>
</div>

<div class="wx_qt_dbgdl_active">2</div>

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

<script src="/Public/home/dist/js/wx_qt_zsyz_tab.js"></script>

</html>