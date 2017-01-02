<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>创建社团消息</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>

</head>
<body>
<h1>社团消息管理</h1>
<a href="<?php echo U('Departadmin/newmessage');?>">新建社团消息</a>

<hr>
<table border="2px solid" id="message">
<?php if(is_array($res)): foreach($res as $k=>$value): ?><tr>
        <td><?php echo ($value["messagetitle"]); ?></td>
        <td><?php echo ($value["messagecontent"]); ?></td>
        <td><?php echo ($value["messagetime"]); ?></td>
        <td data-id="<?php echo ($value["messageid"]); ?>">
            <a href="<?php echo U('Departadmin/messagemodify',array('id'=>$value['messageid']));?>"><button class="messagemodify">修改</button></a>
            |
            <button class="messagedel">删除</button>
        </td>
    </tr><?php endforeach; endif; ?>
</table>

</body>
<script>
    $('.messagedel').on('click',function () {
        var btn = $(this);
        var messageid = btn.parent().data('id');
        var param = {messageid: messageid};
        var url = "<?php echo U('Departadmin/messagedel');?>";
        $.ajax({
            url: url,
            data: param,
            dataType: 'json',
            type: 'post',
            success: function (data) {
                var dotr = btn.closest('tr');
                alert(data.info);
                if (data.status == 1) {
                    dotr.remove();
                }
            },
            error: function () {
                alert('操作失败');
            }
        })
    })
</script>
</html>