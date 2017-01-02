<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>值班修改</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
</head>
<body>
    <h1>值班修改</h1>
    <table border="2px solid">
            <td>标题<input type="text" value="<?php echo ($res['attendancepeople']); ?>" id="attendancepeople"></td>
            <td>内容<input type="text" value="<?php echo ($res['attendancetime']); ?>" id="attendancetime"></td>
    </table>
    <button id="subbtn" type="button" data-id="<?php echo ($res['attendanceid']); ?>">确认提交</button>
</body>

<script>
    $('#subbtn').on('click',function () {
        var btn = $(this);
        var attendanceid = btn.data('id');
        var attendancepeople = $('#attendancepeople').val();
        var attendancetime = $('#attendancetime').val();
        var param = {
            attendanceid: attendanceid,
            attendancepeople:attendancepeople,
            attendancetime:attendancetime,
        };
        console.log(param);
        var url = "<?php echo U('Departadmin/attendancemodify');?>";
        $.ajax({
            url: url,
            data: param,
            dataType: 'json',
            type: 'post',
            success: function (data) {
                alert(data.info);
                if (data.status == 1) {
                    window.location.href= "<?php echo U('Departadmin/departattendance');?>"
                }
            },
            error: function () {
                alert('操作失败');
            }
        })
    })
</script>
</html>