<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新建社团制度</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
</head>
<body> 制度标题<input type="text" id="institutiontitle">
<hr>
制度内容<input type="text" id="institutioncontent">
<button id="subbtn" type="button">提交</button>
</body>

<script>
    $(function () {
        $('#subbtn').on('click',function () {
            var institutiontitle = $('#institutiontitle').val();
            var institutioncontent = $('#institutioncontent').val();
            var param = {
                institutiontitle:institutiontitle,
                institutioncontent:institutioncontent,
                };
            console.log(param);
            if(!institutiontitle || !institutioncontent){
                alert('每一项都必须填写');
            }else{
                var url ="<?php echo U('Institution/newinstitution');?>";
                $.ajax({
                    url:url,
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        alert(data.info);
                        window.location.href="<?php echo U('Institution/departinstitution');?>";
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