<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<style>
	*{padding: 0;margin: 0;text-decoration:none;list-style: none;font-family: 微软雅黑;outline: none;}
	.xxtx_box{
		width: 95%;
		height: 200px;
		margin:10px auto;

	}
	input{
		width: 100%;
		height: 30px;
		margin-bottom: 15px;
		padding-left: 5px;
		box-sizing: border-box;
	}
	input[type="submit"]{
		width: 50%;
		height: 30px;
	}
</style>
</head>

<body>
	<div class="xxtx_box">
		<form action="<?php echo U('index/alter','id='.$item['id']);?>" method="post">
			<input type="text" name="z_name" class="" value="<?php echo ($item["z_name"]); ?>"  required>
			<input type="text" name="tel" class="" value="<?php echo ($item["tel"]); ?>"  required>
			<input type="text" name="add" class="" value="<?php echo ($item["add"]); ?>"  required>
			<input type="submit" class="" value="提交">
		</form>
	</div>	
</body>
<script type="text/javascript">
            if(<?php echo I('get.alert');?>=='1'){
            	alert('修改成功');
            }
            if(<?php echo I('get.alert');?>=='2'){
            	alert('修改失败');
            }
		</script>
</html>