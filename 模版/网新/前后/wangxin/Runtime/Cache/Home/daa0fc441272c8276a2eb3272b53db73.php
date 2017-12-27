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

		<link href="/Public/home/dist/css/reset1.css" type="text/css" rel="stylesheet" />
		<link href="/Public/home/dist/css/aboutc.css" type="text/css" rel="stylesheet" />

</head>


		<!--<div class="company-banner-box">-->
			<!--<img src="__UPLOAD__/<?php echo ($item["image"]); ?>">-->
		<!--</div>-->
		<!--<div class="company-logo-box">-->
			<!--<h1><?php echo ($item["name"]); ?></h1>-->
		<!--</div>-->
		<!--<p class="p-main">-->
			<!--&lt;!&ndash;<?php echo ($item["xiangqing"]); ?>&ndash;&gt;-->
            <!--<svg class="a11_iocn" aria-hidden="true">-->
                <!--<use xlink:href="#icon-shouye"></use>-->
            <!--</svg>-->
		<!--</p>-->
		<!--<div class="honor">-->
			<!--<h3>企业荣誉</h3>-->
			<!--<p class="honor-main">-->
				<!--<?php echo ($item["qy_rongyu"]); ?>-->
			<!--</p>-->
		<!--</div>-->
            <img src="/Public/admin/uploads/<?php echo ($item["img"]); ?>" alt="banner" class="xq_banner_img">
            <h2>信永中和会计师事务所</h2>
        <div class="xq_main">
            <p class="aboutc_main_box">
                <svg class="xq_main_icon" aria-hidden="true">
                	<use xlink:href="#icon-fuzeren1"></use>
                </svg>
                <span class=" xa_main_span">负&nbsp;&nbsp;责&nbsp;人</span>
                <span><?php echo ($item["fuzeren"]); ?></span>
            </p>
            <p class="aboutc_main_box">
                <svg class="xq_main_icon" aria-hidden="true">
                    <use xlink:href="#icon-dizhi"></use>
                </svg>
                <span class=" xa_main_span">企业地址</span>
                <p class="qydz_text"><?php echo ($item["add"]); ?></p>
            </p>
           <!--  <p>
                <svg class="xq_main_icon" aria-hidden="true">
                    <use xlink:href="#icon-fanwei"></use>
                </svg>
                <span class="xa_main_span xa_main_span2">服务范围</span>
                <span>杭州市余杭区</span>
            </p> -->
            <p class="aboutc_main_box">
                <svg class="xq_main_icon" aria-hidden="true">
                    <use xlink:href="#icon-shouye"></use>
                </svg>
                <span class=" xa_main_span">企业简介</span>
            </p>
            <div class="xq_main_text">
                <?php echo ($item["jianjie"]); ?>
            </div>
        </div>


		<!-- 底部栏显示标识 -->
		
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

		<script src="/Public/home/dist/js/jquery-1.11.0.min.js"></script>
		<script src="/Public/home/dist/js/font_440400_waj7qmu35o2yb9.js"></script>
		<script src="/Public/home/dist/js/rem.js"></script>
       
</html>