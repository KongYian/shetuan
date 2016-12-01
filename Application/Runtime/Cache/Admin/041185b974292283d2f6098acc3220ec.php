<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员后台登录界面</title>
    <script src="/shetuan/Public/home/js/jquery.min.js"></script>
</head>
<body>

用户名<input type="text" name="adminName" id="adminName">
<hr>
密码<input type="password" name="adminPassword" id="adminPassword">
<hr>
<button  type="button" id="subbtn">登录</button>
<button  type="button" id="modbtn">忘记密码</button>
</body>
<script>
    $(function () {
        $('#subbtn').on('click',function () {
            var adminName = $('#adminName').val();
            var adminPassword = $('#adminPassword').val();
            var param = {adminName:adminName,adminPassword:adminPassword};
            console.log(param);
            if(!adminName || !adminPassword){
                alert('用户名或者密码为空');
            }else{
                $.ajax({
                    url:"<?php echo U('index/login');?>",
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        alert(data.info);
                        if(data.status == 1){
                            window.location.href="<?php echo U('Index/index');?>";
                        }else{
                            window.location.href="<?php echo U('Index/login');?>";
                        }
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