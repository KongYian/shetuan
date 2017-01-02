<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>收支信息</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>

</head>
<body>
<h1>社团收支管理</h1>
<a href="<?php echo U('Expense/newexpense');?>">新建收支记录</a>
<hr>
<table border="2px solid" id="message">
        <tr>
            <td>金额</td>
            <td>笔记</td>
            <td>时间</td>
            <td>类型</td>
            <td>操作</td>
        </tr>
<?php if(is_array($res)): foreach($res as $k=>$value): ?><tr>
        <td><?php echo ($value["expensecharge"]); ?></td>
        <td><?php echo ($value["expensenote"]); ?></td>
        <td><?php echo ($value["expensetime"]); ?></td>
        <td>
            <?php
 if($value['expensemethod'] == 1){ echo '收入'; }else{ echo '支出'; } ?>
        </td>
        <td data-id="<?php echo ($value["expenseid"]); ?>">
            <a href="<?php echo U('Expense/expensemodify',array('id'=>$value['expenseid']));?>">
            <button>修改</button></a>
            |
            <button class="expensedel">删除</button>
        </td>
    </tr><?php endforeach; endif; ?>
</table>

</body>
<script>
    $('.expensedel').on('click',function () {
        var btn = $(this);
        var expenseid = btn.parent().data('id');
        var param = {expenseid: expenseid};
        var url = "<?php echo U('Expense/expensedel');?>";
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