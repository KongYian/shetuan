<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>部门管理员管理首页</title>
</head>
<body>
    <h1>部门管理员管理首页</h1>
    <?php if($_SESSION['adminName']){echo 'hello!'.$_SESSION['adminName'];}else{echo "请先登录";}?>
<hr></hr>
    <a href="<?php echo U('Index/logout');?>"><p>退出登录</p></a>
</body>
</html>