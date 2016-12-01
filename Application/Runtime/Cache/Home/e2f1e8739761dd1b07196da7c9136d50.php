<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册页面</title>
    <script src="/shetuan/Public/home/js/jquery.min.js"></script>
</head>
<body>

    用户名<input type="text" name="userName" id="userName">
    <hr>
    密码<input type="password" name="userPassword" id="userPassword">
    <hr>
    电子邮箱<input type="email" name="userEmail" id="userEmail">
    <hr>
    <button  type="button" id="subbtn">提交</button>
</body>
<script>
    $(function () {
        $('#subbtn').on('click',function () {
            var userName = $('#userName').val();
            var userPassword = $('#userPassword').val();
            var userEmail = $('#userEmail').val();
            var param = {userName:userName,userPassword:userPassword,userEmail:userEmail};
            console.log(param);
            if(!userName || !userPassword || !userEmail){
                alert('每一项都必须填写');
            }else{
                $.ajax({
                    url:"<?php echo U('index/register');?>",
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        alert(data.info);
                        window.location.href="<?php echo U('Index/index');?>";
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