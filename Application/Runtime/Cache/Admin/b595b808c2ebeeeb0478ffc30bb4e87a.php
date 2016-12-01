<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员登录页面</title>
</head>
<body>
<h1>管理员管理页面</h1>
<hr>
<?php if($_SESSION['adminName']){echo 'hello!'.$_SESSION['adminName'];}else{echo "请先登录";}?>
<hr>
<a href="<?php echo U('Index/logout');?>"><p>退出登录</p></a>
<hr>
<h1>申请管理</h1>
<h2>新社团管理</h2>
<h2>用户申请入会管理</h2>
<hr>
<h1>社团事物管理</h1>
<h2>活动管理</h2>
<h2>制度管理</h2>
<h2>值班管理</h2>
<h2>消息管理</h2>
<h2>会员管理</h2>
<hr>
<h1>社团财务管理</h1>
<h2>社团收支信息</h2>
<h2>社团物品信息</h2>
</body>
</html>