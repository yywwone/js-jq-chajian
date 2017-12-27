<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">

<head>

<title>网新后台</title>

<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link href="http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
		<link href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<!-- Latest compiled and minified CSS -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
		<style>
			.file-preview-image {
				width: 160px;
			}
			
			#wite li a {
				color: #FFFFFF;
			}
			
			.panel-default>.panel-heading {
				background-color: #28A4C9;
				color: #FFFFFF;
			}
			
			.breadcrumb {
				background-color: #28A4C9;
			}
			
			.breadcrumb li {
				color: #FFFFFF;
			}
			
			.breadcrumb li a {
				color: #FFFFFF;
			}
			
			.btn-success {
				background-color: #28A4C9;
				border-color: #28A4C9;
			}
			
			.btn-success:hover {
				color: #fff;
				background-color: #2AABD2;
				border-color: #2AABD2;
			}
			/*一下为插件样式*/
			  .imgbox,.imgbox1
        {
           
            margin-right: 20px;
            margin-top: 20px;
            position: relative;
            width: 182px;
            height: 142px;
            border: 1px solid #2AABD2;
            overflow: hidden;
            font-size: 24px;
        }
        .imgbox1{border: 1px solid blue;
        }


        .imgnum{
            left: 0px;
            top: 0px;
            margin: 0px;
            padding: 0px;
        }
        .imgnum input,.imgnum1 input {
            position: absolute;
            width: 182px;
            height: 142px;
            opacity: 0;
        }
        .imgnum img,.imgnum1 img {
            width: 100%;
            height: 100%;
        }
        .close,
        .close1 {
            color: red;
            position: absolute;
            left: 170px;
            top: 0px;
            display: none;
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

		<div id="main-content">
			<div class="container" id="content">
				<div class="row">
					<div class="col-md-9">
						<div class="panel panel-default">
							<ul id="myTab" class="nav nav-tabs">
								<li class="active">
									<a href="#tab1" data-toggle="tab" class="tit">二级服务</a>
								</li>
								<!-- <li>
									<a href="#tab2" data-toggle="tab" class="tit">一级服务</a>
								</li> -->
							</ul>
							
								<div id="myTabContent" class="tab-content">
									
									
									<!-- 二级页 -->
									<div class="tab-pane fade in active" id="tab1">
										<form class="myform" action="<?php echo U('index/addsfuwu',array('state'=>'2'));?>" method="post" enctype="multipart/form-data">
											<div class="panel-body">
											<div class="form-group">
												<label>服务名称</label>
												<input  type="text" name="name" value="<?php echo ($cotwo['name']); ?>" class="form-control">
											</div>
											<div class="form-group">
												<span>服务描述</span>
												<!-- <input  type="text" name="explain" value="<?php echo ($cotwo['fw_js']); ?>" class="form-control"> -->
												<textarea name="explain" class="form-control" rows="2">
						                         <?php echo ($cotwo['fw_js']); ?>
						                        </textarea>
											</div>
											<div class="form-group">
												<span>服务流程</span>
												<input  type="text" name="fw_lc" value="<?php echo ($cotwo['fw_lc']); ?>" class="form-control">
											</div>
										     <div class="form-group">
												<span>所属服务</span>
												<!-- <select class="form-control">
													<option>公司运营</option>
													<option>其他服务</option>
													<option>物业服务</option>
													<option>工商财税</option>
													<option>项目申报</option>
												</select> -->
												
												<select  class="form-control" name="f_id">
													<option name="fuwu" value="<?php echo ($cotwo['f_id']); ?>"><?php echo ($cotwo['name']); ?></option>
												<?php if(is_array($fname)): $i = 0; $__LIST__ = $fname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i; if(($s['name']) != "企业服务"): ?><option name="fuwu" value="<?php echo ($s['id']); ?>"><?php echo ($s['name']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>	
											</select>  
											</div>
											
											
											<!-- 所属服务 -->
										
											<!-- 所属服务 -->
											<div  class="form-group" style="overflow: hidden;">
												<div style="float: left;">
													<span style="font-size: 18px;">服务logo</span>
													
													        <!-- <input type="file" class="filepath" /> -->
													        <input type="file" name="img"  value="">
													        
												</div>
												<div style="float: left;">
													<span style="font-size: 18px;">服务展示图</span>
													
													        <!-- <input type="file" class="filepath" /> -->
													        <input  type="file" name="image" value="">
													        <?php if(I('get.id')){ ?>
                                                               <input type="hidden"  name="id" value="<?php echo I('get.id');?>">
														        <?php } ?>
													       
												</div>
											</div>
											<button type="submit" class="btn btn-primary"><?php  echo I('get.id')?'更新':'添加';?></button>
											</div>
										</form>
									</div>

									<div class="tab-pane fade" id="tab2">
										<form class="myform" action="<?php echo U('index/addsfuwu',array('state'=>'1'));?>" method="post" enctype="multipart/form-data">

												
											<div class="panel-body">
												<div class="form-group">
													<label>服务名称</label>
													<input  type="text" name="name" value="<?php echo ($coone['name']); ?>" class="form-control">
												</div>
												<div id="img" class="form-group" style="overflow: hidden;">
													<div style="float: left;">
														<span style="font-size: 18px;">服务logo</span>
														
														   
														        <!-- <input type="file" class="filepath" /> -->
														        <input type="file"  name="img" value="">
														        
														 
													</div>
													<div style="float: left;">
														<span style="font-size: 18px;">服务展示图</span>
														
														        <!-- <input type="file" class="filepath" /> -->
														        <input type="file" name="image" value="">
														        <?php if(I('get.id')){ ?>
                                                               <input type="hidden"  name="id" value="<?php echo I('get.id');?>">
														        <?php } ?>
														        
														
													</div>	
													
												</div>

												<button type="submit" class="btn btn-primary"><?php  echo I('get.id')?'更新':'添加';?></button>
											</div>
												
										</form>
									</div>



								</div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">服务上传图片说明</div>
							<div class="panel-body">
								<ol class="list-unstyled">
									<li id="leve-1">一级分类，需一张图标和展示图</li>
									<li id="leve-1">二级分类，需一张图标和展示图</li>
									<li id="leve-msg"></li>
								</ol>
							</div>
						</div>
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