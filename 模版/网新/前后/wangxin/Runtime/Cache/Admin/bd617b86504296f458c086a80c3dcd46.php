<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">

<head>

<title>网新后台</title>

<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="/Public/admin/css/aboutc.css"/>   
<link href="/Public/admin/css/reset1.css" rel="stylesheet" /> 
    
<link rel="stylesheet" href="/Public/admin/css/bootstrap.min.css" />

<link rel="stylesheet" href="/Public/admin/css/bootstrap-responsive.min.css" />

<link rel="stylesheet" href="/Public/admin/css/fullcalendar.css" />

<link rel="stylesheet" href="/Public/admin/css/matrix-style.css" />

<link rel="stylesheet" href="/Public/admin/css/matrix-media.css" />

<link href="/Public/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="/Public/admin/css/jquery.gritter.css" />
<link rel="stylesheet" href="/Public/admin/css/page.css" />
<style type="text/css">
 .table_tr_td tr td{
  width:120px;height:150px;
 }
</style>
</head>

<body>



<!--Header-part-->

<div id="header">
  <div style="width:100px;height:30px"></div>
<b><a href="<?php echo U('index/index');?>" style="color:green;font-size:30px;margin-left:30px" ><?php echo session('type')['name'];?></a></b>

</div>
<div id="search">
  <!-- <input type="text" placeholder="Search here..."/> -->
 <div style="width:20px;height:4px"></div>
 <!-- <a href="http://www.buy297.com" style="font-size:13px;margin-right:30px;" target="view_frame">站点首页</a> -->
  <a href="<?php echo U('index/uplogin');?>" style="font-size:13px;margin-right:20px">退出登录</a>
</div>
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> one</a>

  <ul>

      <li><a href="<?php echo U('index/index');?>"><i class="icon icon-home"></i> <span>网站管理</span></a> </li>
      <?php if(session('type')['quan']=='1'): ?><li> <a href="<?php echo U('index/accout');?>"><i class="icon icon-signal"></i> <span>园区账号管理</span></a> </li><?php endif; ?>
    <li> <a href="<?php echo U('index/widgets');?>"><i class="icon icon-inbox"></i> <span>订单管理</span></a> </li>

    <li><a href="<?php echo U('index/tables');?>"><i class="icon icon-th"></i> <span>用户管理</span></a></li>
    <li><a href="<?php echo U('index/facilitator');?>"><i class="icon icon-th"></i> <span>服务商管理</span></a></li>

    <li><a href="<?php echo U('index/grid');?>"><i class="icon icon-fullscreen"></i> <span>服务管理</span></a></li>
    <!-- <li><a href="<?php echo U('index/grid');?>"><i class="icon icon-fullscreen"></i> <span>评论&投诉</span></a></li> -->

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>投诉&评论&活动</span><!--  <span class="label label-important">3</span> --></a>
      <ul>
        <li><a href="<?php echo U('complain/complain');?>">投诉</a></li>
        <li><a href="<?php echo U('complain/comment');?>">评论</a></li>
        <li><a href="<?php echo U('complain/huodong');?>">活动</a></li>
      </ul>
    </li>
  </ul>

</div>

<!--sidebar-menu-->



<!--main-container-part-->

<div id="content">

<!--breadcrumbs-->

  <div id="content-header">

    <div id="breadcrumb"> <a href="<?php echo U('index/index');?> 
      " title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>

  </div>

<!--End-breadcrumbs-->



<!--Action boxes-->

 
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
   <div class="box">
      <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><img src="/Public/admin/uploads/<?php echo ($v[img]); ?>" class="xq_banner_img">
            <h2><?php echo ($v['name']); ?></h2>
        <div class="xq_main">
            <p>
                <svg class="xq_main_icon" aria-hidden="true">
                	<use xlink:href="#icon-fuzeren1"></use>
                </svg>
                <span class="xa_main_span">负责人</span>
                <span><?php echo ($v['fuzeren']); ?></span>
            </p>
            <p>
                <svg class="xq_main_icon" aria-hidden="true">
                    <use xlink:href="#icon-dianhua"></use>
                </svg>
                <span class="xa_main_span">联系电话</span>
                <span><?php echo ($v['tel']); ?></span>
            </p>
            <p>
                <svg class="xq_main_icon" aria-hidden="true">
                    <use xlink:href="#icon-gaiqiyexinxi"></use>
                </svg>
                <span class="xa_main_span">服务商类型</span>
                <span>
                    <?php switch($v['biaoshi']): case "1": ?>入驻企业<?php break;?>
                        <?php case "2": ?>服务商<?php break; endswitch;?>
            </span>
            </p>
            <p style='height:100px;width:300px'>
                <svg class="xq_main_icon" aria-hidden="true">
                    <use xlink:href="#icon-dizhi"></use>
                </svg>
                <span class="xa_main_span" style="margin-bottom:10px;">企业地址</span><br>
                <span style='line-height:25px'><?php echo ($v['add']); ?></span>
            </p>
           <!--  <p>
                <svg class="xq_main_icon" aria-hidden="true">
                    <use xlink:href="#icon-rongyu"></use>
                </svg>
                <span class="xa_main_span">企业荣誉</span>
                <span><?php echo ($v['qy_rongyu']); ?></span>
            </p> -->
            <p>
                <svg class="xq_main_icon" aria-hidden="true">
                    <use xlink:href="#icon-fanwei"></use>
                </svg>
                <span class="xa_main_span xa_main_span2">服务范围</span>
                <span>杭州市余杭区</span>
            </p>
            <p>
                <svg class="xq_main_icon" aria-hidden="true">
                    <use xlink:href="#icon-shouye"></use>
                </svg>
                <span class="xa_main_span xa_main_span1">企业简介</span>
            </p>
            <div class="xq_main_text">
                <?php echo ($v['jianjie']); ?>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
		<!-- 底部栏显示标识 -->
	</div>
        <block name="src">
        <script src="/Public/admin/js/jquery-1.11.1.min.js"></script>
        <script src="/Public/admin/js/font_440400_waj7qmu35o2yb9.js"></script>
        <!-- <script src="/Public/admin/js/rem.js"></script> -->
        
  </div>

</div>



<!--end-main-container-part-->



<!--Footer-part-->



<div class="row-fluid">

  <div id="footer" class="span12"><a href="http://themedesigner.in/"></a> </div>

</div>



<!--end-Footer-part-->



<script src="/Public/admin/js/excanvas.min.js"></script> 

<script src="/Public/admin/js/jquery.min.js"></script> 

<script src="/Public/admin/js/jquery.ui.custom.js"></script> 

<script src="/Public/admin/js/bootstrap.min.js"></script> 

<script src="/Public/admin/js/jquery.flot.min.js"></script> 

<script src="/Public/admin/js/jquery.flot.resize.min.js"></script> 

<script src="/Public/admin/js/jquery.peity.min.js"></script> 

<script src="/Public/admin/js/fullcalendar.min.js"></script> 

<script src="/Public/admin/js/matrix.js"></script> 

<script src="/Public/admin/js/matrix.dashboard.js"></script> 

<script src="/Public/admin/js/jquery.gritter.min.js"></script> 

<script src="/Public/admin/js/matrix.interface.js"></script> 

<script src="/Public/admin/js/matrix.chat.js"></script> 

<script src="/Public/admin/js/jquery.validate.js"></script> 

<script src="/Public/admin/js/matrix.form_validation.js"></script> 

<script src="/Public/admin/js/jquery.wizard.js"></script> 

<script src="/Public/admin/js/jquery.uniform.js"></script> 

<script src="/Public/admin/js/select2.min.js"></script> 

<script src="/Public/admin/js/matrix.popover.js"></script> 

<script src="/Public/admin/js/jquery.dataTables.min.js"></script> 

<script src="/Public/admin/js/matrix.tables.js"></script> 



<!-- <script type="text/javascript">

  // This function is called from the pop-up menus to transfer to

  // a different page. Ignore if the value returned is a null string:

  function goPage (newURL) {



      // if url is empty, skip the menu dividers and reset the menu selection to default

      if (newURL != "") {

      

          // if url is "-", it is this page -- reset the menu:

          if (newURL == "-" ) {

              resetMenu();            

          } 

          // else, send page to designated URL            

          else {  

            document.location.href = newURL;

          }

      }

  }



// resets the menu selection upon entry to this page:

function resetMenu() {

   document.gomenu.selector.selectedIndex = 2;

}

</script> -->

</body>

</html>