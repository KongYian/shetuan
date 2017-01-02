<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>制度修改</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
</head>
<body>
    <h1>制度修改</h1>
    <table border="2px solid">
            <td>标题<input type="text" value="<?php echo ($res['institutiontitle']); ?>" id="institutiontitle"></td>
            <td>内容<input type="text" value="<?php echo ($res['institutioncontent']); ?>" id="institutioncontent"></td>
    </table>
    <button id="subbtn" type="button" data-id="<?php echo ($res['institutionid']); ?>">确认提交</button>
</body>

<script>
    $('#subbtn').on('click',function () {
        var btn = $(this);
        var institutionid = btn.data('id');
        var institutiontitle = $('#institutiontitle').val();
        var institutioncontent = $('#institutioncontent').val();
        var param = {
            institutionid: institutionid,
            institutiontitle:institutiontitle,
            institutioncontent:institutioncontent,
        };
        console.log(param);
        var url = "<?php echo U('Departadmin/institutionmodify');?>";
        $.ajax({
            url: url,
            data: param,
            dataType: 'json',
            type: 'post',
            success: function (data) {
                alert(data.info);
                if (data.status == 1) {
                    window.location.href= "<?php echo U('Departadmin/departinstitution');?>"
                }
            },
            error: function () {
                alert('操作失败');
            }
        })
    })
</script>
</html>