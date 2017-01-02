<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>制度管理</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>

</head>
<body>
<h1>制度管理</h1>
<a href="<?php echo U('Institution/newinstitution');?>">新建社团制度</a>
<hr>
<table border="2px solid" id="message">
    <?php if(is_array($res)): foreach($res as $k=>$value): ?><tr>
            <td><?php echo ($value["institutiontitle"]); ?></td>
            <td><?php echo ($value["institutioncontent"]); ?></td>
            <td><?php echo ($value["institutiontime"]); ?></td>
            <td data-id="<?php echo ($value["institutionid"]); ?>">
                <a href="<?php echo U('Institution/institutionmodify',array('id'=>$value['institutionid']));?>">
                    <button>修改</button></a>
                |
                <button class="institutiondel">删除</button>
            </td>
        </tr><?php endforeach; endif; ?>
</table>

</body>
<script>
    $('.institutiondel').on('click',function () {
        var btn = $(this);
        var institutionid = btn.parent().data('id');
        var param = {institutionid: institutionid};
        var url = "<?php echo U('Institution/institutiondel');?>";
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