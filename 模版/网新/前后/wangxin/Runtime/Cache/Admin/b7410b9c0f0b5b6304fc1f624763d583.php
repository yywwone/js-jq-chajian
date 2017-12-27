<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">

<head>

<title>网新后台</title>

<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
<link rel="stylesheet" href="/Public/admin/css/bootstrap.min.css" />

<link rel="stylesheet" href="/Public/admin/css/bootstrap-responsive.min.css" />

<link rel="stylesheet" href="/Public/admin/css/fullcalendar.css" />

<link rel="stylesheet" href="/Public/admin/css/matrix-style.css" />

<link rel="stylesheet" href="/Public/admin/css/matrix-media.css" />

<link href="/Public/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="/Public/admin/css/jquery.gritter.css" />


</head>

<body>



<!--Header-part-->

<div id="header">

  <h1><a href="<?php echo U('index/dashboard');?>">Matrix Admin</a></h1>

</div>

<!--close-Header-part--> 





<!--top-Header-menu-->

<!-- <div id="user-nav" class="navbar navbar-inverse">

  <ul class="nav">

    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>

      <ul class="dropdown-menu">

        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>

        <li class="divider"></li>

        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>

        <li class="divider"></li>

        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>

      </ul>

    </li>

    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>

      <ul class="dropdown-menu">

        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>

        <li class="divider"></li>

        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>

        <li class="divider"></li>

        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>

        <li class="divider"></li>

        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>

      </ul>

    </li>

    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>

    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>

  </ul>

</div> -->

<!--close-top-Header-menu-->

<!--start-top-serch-->

<div id="search">

  <input type="text" placeholder="Search here..."/>

  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>

</div>

<!--close-top-serch-->

<!--sidebar-menu-->

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> one</a>

  <ul>

    <li><a href="<?php echo U('index/index');?>"><i class="icon icon-home"></i> <span>网站管理</span></a> </li>

    <li> <a href="<?php echo U('index/accout');?>"><i class="icon icon-signal"></i> <span>园区账号管理</span></a> </li>

    <li> <a href="<?php echo U('index/widgets');?>"><i class="icon icon-inbox"></i> <span>订单管理</span></a> </li>

    <li><a href="<?php echo U('index/tables');?>"><i class="icon icon-th"></i> <span>用户管理</span></a></li>

    <li><a href="<?php echo U('index/grid');?>"><i class="icon icon-fullscreen"></i> <span>服务管理</span></a></li>

    <!-- <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>seven</span> <span class="label label-important">3</span></a>

      <ul>

        <li><a href="<?php echo U('index/form_common');?>">eight</a></li>

        <li><a href="<?php echo U('index/form_validation');?>">nine</a></li>

        <li><a href="<?php echo U('index/form_wizard');?>">ten</a></li>

      </ul>

    </li> -->

    <!-- <li><a href="<?php echo U('index/buttons');?>"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li> -->

    <!-- <li><a href="<?php echo U('index/interface');?>"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li> -->

    <!-- <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>

      <ul>

        <li><a href="<?php echo U('index/index2');?>">Dashboard2</a></li>

        <li><a href="<?php echo U('index/gallery');?>">Gallery</a></li>

        <li><a href="<?php echo U('index/calendar');?>">Calendar</a></li>

        <li><a href="<?php echo U('index/invoice');?>">Invoice</a></li>

        <li><a href="<?php echo U('index/chat');?>">Chat option</a></li>

      </ul>

    </li> -->

   <!--  <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>

      <ul>

        <li><a href="error403.html">Error 403</a></li>

        <li><a href="error404.html">Error 404</a></li>

        <li><a href="error405.html">Error 405</a></li>

        <li><a href="error500.html">Error 500</a></li>

      </ul>

    </li> -->

    <li class="content"> <span>Monthly Bandwidth Transfer</span>

      <div class="progress progress-mini progress-danger active progress-striped">

        <div style="width: 77%;" class="bar"></div>

      </div>

      <span class="percent">77%</span>

      <div class="stat">21419.94 / 14000 MB</div>

    </li>

    <li class="content"> <span>Disk Space Usage</span>

      <div class="progress progress-mini active progress-striped">

        <div style="width: 87%;" class="bar"></div>

      </div>

      <span class="percent">87%</span>

      <div class="stat">604.44 / 4000 MB</div>

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

  <div>
   <a href="#">添加园区账号</a>
  </div>
  <div>
<table>
<tr>
  <td>园区</td>
  <td>账号</td>
  <td>操作</td>
</tr>
<tr>
<td>1</td>
<td>2</td>
<td><a href="#">删除</a></td>
</tr>
</table>
  </div>
  
    </div>

  </div>

</div>



<!--end-main-container-part-->



<!--Footer-part-->



<div class="row-fluid">

  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>

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



<script type="text/javascript">

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

</script>

</body>

</html>