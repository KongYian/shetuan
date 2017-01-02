<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>会员详情</title>
</head>
<body>
    <h1>会员详情</h1>
    <table border="2px solid">
        <tr>
            <td>用户姓名</td>
            <td>电子邮箱</td>
            <td>性别</td>
            <td>年龄</td>
            <td>电话号码</td>
            <td>QQ</td>
        </tr>
        <tr>
            <td><?php echo ($res['username']); ?></td>
            <td><?php echo ($res['useremail']); ?></td>
            <td>
                <?php
 if($res['usergender'] == 1){ echo '男'; }else{ echo '女'; } ?>
            </td>
            <td><?php echo ($res['userage']); ?></td>
            <td><?php echo ($res['usertelphone']); ?></td>
            <td><?php echo ($res['userqq']); ?></td>
        </tr>
    </table>
</body>
</html>