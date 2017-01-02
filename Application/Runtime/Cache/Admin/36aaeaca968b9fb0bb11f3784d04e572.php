<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>消息修改</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
</head>
<body>
    <h1>消息修改</h1>
    <table border="2px solid">
            <td>标题<input type="text" value="<?php echo ($res['messagetitle']); ?>" id="messagetitle"></td>
            <td>内容<input type="text" value="<?php echo ($res['messagecontent']); ?>" id="messagecontent"></td>
    </table>
    <button id="subbtn" type="button" data-id="<?php echo ($res['messageid']); ?>">确认提交</button>
</body>

<script>
    $('#subbtn').on('click',function () {
        var btn = $(this);
        var messageid = btn.data('id');
        var messagetitle = $('#messagetitle').val();
        var messagecontent = $('#messagecontent').val();
        var param = {
            messageid: messageid,
            messagetitle:messagetitle,
            messagecontent:messagecontent,
        };
        console.log(param);
        var url = "<?php echo U('Departadmin/messagemodify');?>";
        $.ajax({
            url: url,
            data: param,
            dataType: 'json',
            type: 'post',
            success: function (data) {
                alert(data.info);
                if (data.status == 1) {
                    window.location.href= "<?php echo U('Departadmin/departmessage');?>"
                }
            },
            error: function () {
                alert('操作失败');
            }
        })
    })
</script>
</html>