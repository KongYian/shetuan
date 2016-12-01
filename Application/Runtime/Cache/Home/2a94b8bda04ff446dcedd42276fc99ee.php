<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>这是首页</title>
</head>

<body>

登录状态
<?php if($_SESSION['userName']){echo 'hello!'.$_SESSION['userName'];}else{echo "请先登录";}?>

<a href="<?php echo U('Index/register');?>"><p>用户注册</p></a>
<a href="<?php echo U('Index/login');?>"><p>用户登录</p></a>
<a href="<?php echo U('Index/logout');?>"><p>退出</p></a>


<a href="<?php echo U('Departapply/departapply');?>"><p>申请成立新社团</p></a>

</body>
</html>