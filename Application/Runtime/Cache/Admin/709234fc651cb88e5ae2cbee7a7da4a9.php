<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>部门管理员管理首页</title>
</head>
<body>
    <h1>部门管理员管理首页</h1>
    <?php if($_SESSION['adminName']){echo 'hello!'.$_SESSION['adminName'];}else{echo "请先登录";}?>
    <hr>
    <a href="<?php echo U('Index/logout');?>"><p>退出登录</p></a>
    <hr>
    <h2>社团事物管理</h2>
    <a href="<?php echo U('Departadmin/subactivityapply');?>"><p>活动申请</p></a>
    <hr>
    <a href="<?php echo U('Member/departmember');?>">会员管理</a>
    <hr>
    <a href="<?php echo U('Message/departmessage');?>">社团消息</a>
    <hr>
    <a href="<?php echo U('Institution/departinstitution');?>">社团制度</a>
    <hr>
    <a href="<?php echo U('Attendance/departattendance');?>">社团值班</a>
    <hr>
    <h2>社团财务管理</h2>
    <a href="<?php echo U('Goods/departgoods');?>">社团物品管理</a>
    <hr>


</body>
</html>