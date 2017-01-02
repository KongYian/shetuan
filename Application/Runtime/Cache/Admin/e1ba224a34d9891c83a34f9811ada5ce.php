<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新建值班消息</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
</head>
<body> 值班人<input type="text" id="attendancepeople">
<hr>
值班时间<input type="text" id="attendancetime">
<button id="subbtn" type="button">提交</button>
</body>

<script>
    $(function () {
        $('#subbtn').on('click',function () {
            var attendancepeople = $('#attendancepeople').val();
            var attendancetime = $('#attendancetime').val();
            var param = {
                attendancepeople:attendancepeople,
                attendancetime:attendancetime,
                };
            console.log(param);
            if(!attendancepeople || !attendancetime){
                alert('每一项都必须填写');
            }else{
                var url ="<?php echo U('Departadmin/newattendance');?>";
                $.ajax({
                    url:url,
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        alert(data.info);
                        window.location.href="<?php echo U('Departadmin/departattendance');?>";
                    },
                    error:function () {
                        alert('操作失败');
                    }
                })
            }
        })
    })
</script>
</html>