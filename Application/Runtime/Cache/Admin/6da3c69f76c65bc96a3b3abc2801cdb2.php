<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>值班消息</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>

</head>
<body>
<h1>社团值班管理66</h1>
<a href="<?php echo U('Attendance/newattendance');?>">新建值班消息</a>

<hr>
<table border="2px solid" id="message">
<?php if(is_array($res)): foreach($res as $k=>$value): ?><tr>
        <td><?php echo ($value["attendancepeople"]); ?></td>
        <td><?php echo ($value["attendancetime"]); ?></td>
        <td data-id="<?php echo ($value["attendanceid"]); ?>">
            <a href="<?php echo U('Attendance/attendancemodify',array('id'=>$value['attendanceid']));?>">
            <button>修改</button></a>
            |
            <button class="attendancedel">删除</button>
        </td>
    </tr><?php endforeach; endif; ?>
</table>

</body>
<script>
    $('.attendancedel').on('click',function () {
        var btn = $(this);
        var attendanceid = btn.parent().data('id');
        var param = {attendanceid: attendanceid};
        var url = "<?php echo U('Attendance/attendancedel');?>";
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