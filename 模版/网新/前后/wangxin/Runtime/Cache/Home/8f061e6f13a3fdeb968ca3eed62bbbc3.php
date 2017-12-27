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

<link href="/Public/home/dist/css/wx_qt_gyslb.css" rel="stylesheet">

</head>


<?php if(is_array($pagintor)): $i = 0; $__LIST__ = $pagintor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; $arr=explode(",",$item['fu_id']); $arrr=in_array($id,$arr); if ($arrr) { ?>
<div class="wx_qt_gyslb_box">
	<div class="wx_qt_gyslb_box_top"></div>
	<div class="wx_qt_gyslb_main_box">
		<div class="wx_qt_gyslb_main_top">
			<div class="wx_qt_gyslb_main_top_left">
				<img src="/Public/admin/uploads/<?php echo ($item["img"]); ?>">
			</div>
			<div class="wx_qt_gyslb_main_top_right">
				<h2 class="wx_qt_gyslb_main_top_right_tit"><?php echo ($item["name"]); ?></h2>
				<p class="wx_qt_gyslb_main_top_right_text">负责人：<?php echo ($item["fuzeren"]); ?></p>
				<p class="wx_qt_gyslb_main_top_right_text2">综合实力</p>
				<div class="wx_qt_gyslb_main_top_right_img">
					<img src="/Public/home/dist/images/gyslb_xing1.png">
					<img src="/Public/home/dist/images/gyslb_xing1.png">
					<img src="/Public/home/dist/images/gyslb_xing1.png">
					<img src="/Public/home/dist/images/gyslb_xing1.png">
					<img src="/Public/home/dist/images/gyslb_xing2.png">
				</div>
			</div>
		</div>
		<div class="wx_qt_gyslb_main_bottom">
			<div class="wx_qt_gyslb_main_bottom_main">
				<svg class="wx_qt_gyslb_main_bottom_main_icon " aria-hidden="true">
					<use xlink:href="#icon-querenxiadan-xuanze"></use>
				</svg>
				<?php $fw_id=I('id'); ?>
				<a href="<?php echo U('xiadan',['fws_id'=>$item['id'],'fw_id'=>$id]);?>">确认下单</a>
			</div>
			<div class="wx_qt_gyslb_main_bottom_main">
				<a href="<?php echo U('aboutc','id='.$item['id']);?>">
					<span class="wx_qt_gslb_icon_text">查看详情</span>
					<svg class="wx_qt_gslb_icon" aria-hidden="true">
						<use xlink:href="#icon-chakangengduo"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>
</div>
<?php	 } endforeach; endif; else: echo "" ;endif; ?>

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

</html>