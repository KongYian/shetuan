<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>用户注册</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/shetuan/Public/css/style.css" />
    <style>
        body{height:100%;background:#16a085;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
    </style>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
    <script src="/shetuan/Public/js/verificationNumbers.js" ></script>
    <script src="/shetuan/Public/js/Particleground.js"></script>
</head>
<body>
<dl class="admin_login">
    <dt>
        <strong>常州大学社团Home</strong>
        <em>Welcome```</em>
    </dt>
    <dd class="user_icon">
        <input type="text" placeholder="账号" class="login_txtbx" id="userName"/>
    </dd>
    <dd class="pwd_icon">
        <input type="password" placeholder="密码" class="login_txtbx" id="userPassword"/>
    </dd>
    <dd class="pwd_icon">
        <input type="password" placeholder="邮箱" class="login_txtbx" id="userEmail"/>
    </dd>
    <dd>
        <input type="button" value="注册" class="submit_btn" id="subbtn"/>
    </dd>
    <dd>
        <p>© 2016-2017</p>
        <p>michael</p>
    </dd>
</dl>
</body>
<script>
    $(function () {
        $('body').particleground({
            dotColor: '#5cbdaa',
            lineColor: '#5cbdaa'
        });

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