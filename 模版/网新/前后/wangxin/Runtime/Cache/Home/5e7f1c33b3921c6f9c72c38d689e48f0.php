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

<style>
	*{padding: 0;margin: 0;text-decoration:none;list-style: none;font-family: 微软雅黑;outline: none;}

	.wx_qt_tsjy_box{
		width: 100%;
		position: relative;
		margin-top: 30px;
	}
	.wx_qt_tsjy{
		width: 100%;
		height: 300px;
		resize: none;
		box-sizing: border-box;
		padding: 5px;
	}
	.wx_qt_sub{
		width: 200px;
		height: 30px;
		border-radius: 5px;
		border: 1px solid blue;
		cursor: pointer;
		background: blue;
		color: #fff;
		position: absolute;
		left: 50%;
		top: 330px;
		margin-left: -100px;
	}
</style>

</head>


	<div class="wx_qt_tsjy_box">
		<form action="<?php echo U('fwpj');?>" method="post" class="wx_qt_tsjy_box_form">
			<textarea class="wx_qt_tsjy" name="neirong"></textarea>
			<input type="submit" class="wx_qt_sub" value="提交">	
		</form>
	</div>
<!-- 底部栏显示标识 -->
			<div class="wx_qt_dbgdl_active">3</div>

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

	<script type="text/javascript">
            if(<?php echo I('get.alert');?>=='2'){
            	alert('请刷新页面重新提交');
            }
		</script>

</html>