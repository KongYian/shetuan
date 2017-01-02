<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新建社团消息</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
</head>
<body> 消息标题<input type="text" id="messagetitle">
<hr>
消息内容<input type="text" id="messagecontent">
<button id="subbtn" type="button">提交申请</button>
</body>

<script>
    $(function () {
        $('#subbtn').on('click',function () {
            var messagetitle = $('#messagetitle').val();
            var messagecontent = $('#messagecontent').val();
            var param = {
                messagetitle:messagetitle,
                messagecontent:messagecontent,
                };
            console.log(param);
            if(!messagetitle || !messagecontent){
                alert('每一项都必须填写');
            }else{
                var url ="<?php echo U('DepartAdmin/checkmessage');?>";
                $.ajax({
                    url:url,
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        alert(data.info);
                        window.location.href="<?php echo U('Departadmin/departmessage');?>";
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