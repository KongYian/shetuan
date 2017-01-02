<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>会员管理</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
</head>
<body>
    <h1>会员管理</h1>
    <table border="2px solid">
        <tr>
            <td>会员姓名</td>
            <td>联系方式</td>
            <td>入会时间</td>
            <td>操作</td>
        </tr>
        <?php if(is_array($res)): foreach($res as $k=>$v): ?><tr>
            <td><?php echo ($v["username"]); ?></td>
            <td><?php echo ($v["usertelphone"]); ?></td>
            <td><?php echo ($v["jointime"]); ?></td>
            <td data-id="<?php echo ($v["id"]); ?>">
                <a href="<?php echo U('Member/memberdetails',array('uid'=>$v['uid']));?>"><button>详情</button></a>
                <button class="memberdel">删除</button>
            </td>
        </tr><?php endforeach; endif; ?>
    </table>
</body>
<script>
    $('.memberdel').on('click',function () {
        var btn = $(this);
        var memberid = btn.parent().data('id');
        var param = {memberid: memberid};
        var url = "<?php echo U('Member/memberdel');?>";
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