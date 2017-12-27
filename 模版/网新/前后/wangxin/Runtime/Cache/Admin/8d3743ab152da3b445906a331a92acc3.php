<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">

<head>

<title>网新后台</title>

<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- <link href="/Public/admin/css/bootstrap.min.css" rel="stylesheet" /> -->
        <link rel="stylesheet" href="/Public/admin/css/style.css"/>
        <!-- <link rel="stylesheet" href="/Public/admin/css/font-awesome.min.css" /> -->
		<!-- <script src="/Public/admin/js/html5shiv.js"></script> -->
		<!-- <script src="/Public/admin/js/respond.min.js"></script> -->
		<style type="text/css">
           .panel{
           	width:30%; float: left;	text-align: center;border: 1px solid #fff;margin-right: 3%`
           }
           .panel .symbol{
           		float: left;
           }
           .panel .value{
           	width: 50%;
           		float: left;
           }
	</style>

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

 <div class="state-overview clearfix">
                  <div>
                      <section class="panel">
                      <a href="<?php echo U('Index/tables');?>" title="商城会员">
                          <div class="symbol terques">
                             <i class="icon-user"></i>
                          </div>
                          <div class="value">
                              <h1><?php echo ($users); ?></h1>
                              <p>商城用户</p>
                          </div>
                          </a>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                        <a href="<?php echo U('Index/facilitator');?>" title="商城服务商">
                          <div class="symbol red">
                              <i class="icon-tags"></i>
                          </div>
                          <div class="value">
                              <h1><?php echo ($fuwushang); ?></h1>
                              <p>商城服务商</p>
                          </div>
                          </a>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                        <a href="<?php echo U('Index/widgets');?>" title="商城订单">
                          <div class="symbol yellow">
                              <i class="icon-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1><?php echo ($dingdan); ?></h1>
                              <p>商城订单</p>
                          </div>
                          </a>
                      </section>
                  </div>
                 <!--  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="icon-bar-chart"></i>
                          </div>
                          <div class="value">
                              <h1>￥34,500</h1>
                              <p>交易记录</p>
                          </div>
                      </section>
                  </div> -->
              </div>
                 <div class="clearfix">
             <div class="t_Record"  style=" width:100%;" >
               <div id="main" style=" width:100%;overflow: hidden;overflow: auto" >
  <div class="table_menu_list">
       <table class="table table-striped table-bordered table-hover" id="sample-table">
    <thead>
    	
     <tr>
        <th width="80">编号</th>
        <th width="100">用户名</th>
        <th width="80">电话</th>
        <th width="120">服务</th>
        <th width="150">创建时间</th>
        <th width="">状态</th>
        <th width="180">服务商名字</th>
        <th width="180">服务商联系电话</th>
      </tr>
    </thead>
  <tbody>
    <tr>
      <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><td><?php echo ($v['id']); ?></td>
          <td><u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','500','400')"><?php echo ($v['name']); ?></u></td>
          <td><?php echo ($v['tel']); ?></td>
          <td><?php echo ($v['fw_name']); ?></td>
          <td><?php echo ($v['create_time']); ?></td>
          <?php switch($v['zhuangtai']): case "0": ?><td class="text-l">
                <div style="width:100px;height:30px;border:1px solid #ccc; border-radius:5px;margin:0 auto;">
                  <a href="<?php echo U('Complain/fuwustate',array('id'=>$v['id']));?>" title="点击通过" style="line-height:30px;margin-left:30%;">已下单</a>
                </div>
             </td><?php break;?>
            <?php case "1": ?><td class="text-l" style="text-align:center">进行中</td><?php break;?>
            <?php case "2": ?><td class="text-l" style="text-align:center">已完成</td><?php break;?>
            <?php case "3": ?><td class="text-l" style="text-align:center">已评价</td><?php break; endswitch;?>
          <td><?php echo ($v['fws_name']); ?></td>
          <td><?php echo ($v['fws_tel']); ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>       
      </tbody>
  </table>
   </div>

               </div>
              </div>

         </div>
  
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