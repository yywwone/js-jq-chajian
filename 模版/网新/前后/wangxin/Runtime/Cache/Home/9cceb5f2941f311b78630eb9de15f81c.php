<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="/Public/home/dist/css/reset1.css" type="text/css" rel="stylesheet" />
    <link href="/Public/home/dist/css/activity.css" type="text/css" rel="stylesheet" />
    <title>活动</title>
</head>
<body>
    <div class="activity_box">

            <h2><?php echo ($con['title']); ?></h2>
        <p>
           <?php echo htmlspecialchars_decode($con['content']);?>
        </p>
    </div>


<script src="/Public/home/dist/js/rem.js"></script>
</body>
</html>