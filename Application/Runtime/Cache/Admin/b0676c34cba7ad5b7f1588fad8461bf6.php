<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>物品信息</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>

</head>
<body>
<h1>社团物品管理</h1>
<a href="<?php echo U('Goods/newgoods');?>">新建物品信息</a>

<hr>
<table border="2px solid" id="message">
<?php if(is_array($res)): foreach($res as $k=>$value): ?><tr>
        <td><?php echo ($value["goodsname"]); ?></td>
        <td><?php echo ($value["goodsnum"]); ?></td>
        <td data-id="<?php echo ($value["goodsid"]); ?>">
            <a href="<?php echo U('Goods/goodsmodify',array('id'=>$value['goodsid']));?>">
            <button>修改</button></a>
            |
            <button class="goodsdel">删除</button>
        </td>
    </tr><?php endforeach; endif; ?>
</table>

</body>
<script>
    $('.goodsdel').on('click',function () {
        var btn = $(this);
        var goodsid = btn.parent().data('id');
        var param = {goodsid: goodsid};
        var url = "<?php echo U('Goods/goodsdel');?>";
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