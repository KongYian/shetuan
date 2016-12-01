<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>这是首页</title>
    <script src="/shetuan/Public/home/js/jquery.min.js"></script>
</head>

<body>

登录状态
<?php if($_SESSION['userName']){echo 'hello!'.$_SESSION['userName'];}else{echo "请先登录";}?>
<hr>
<?php if($_SESSION['userName']){echo 'ID is:'.$_SESSION['userId'];}else{echo "没有ID";}?>

<a href="<?php echo U('Index/register');?>"><p>用户注册</p></a>
<a href="<?php echo U('Index/login');?>"><p>用户登录</p></a>
<a href="<?php echo U('Userinfo/myinfo');?>"><p>我的信息</p></a>
<a href="<?php echo U('Index/logout');?>"><p>退出</p></a>
<a href="<?php echo U('Departapply/departapply');?>"><p>申请成立新社团</p></a>
<hr>
<h2>所有可选择加入的社团</h2>


<table>
    <tr>
        <td>社团名称</td>
        <td>社团简介</td>
        <td>操作</td>
    </tr>
<?php if(is_array($res)): foreach($res as $k=>$val): ?><tr>
        <td><?php echo ($val["departname"]); ?></td>
        <td><?php echo ($val["departintroduction"]); ?></td>
        <td><a href="<?php echo U('Joinapply/userjoinapply');?>?departid=<?php echo ($val["departid"]); ?>"><button data-id="<?php echo ($val["departid"]); ?>">申请加入</button></a></td>
    </tr><?php endforeach; endif; ?>
</table>
<hr>
</body>
</html>