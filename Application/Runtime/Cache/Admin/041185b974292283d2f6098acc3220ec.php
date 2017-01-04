<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<!-- Mirrored from www.zi-han.net/theme/hplus/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:23 GMT -->

<head>
<title>常州大学社团管理系统登录</title>
<meta name="keywords" content="社团管理，登录，常州大学" />

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="本系统基于TP3.2开发，感谢开源">
<link rel="shortcut icon" href="favicon.ico">
<link href="/shetuan/Public/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<link href="/shetuan/Public/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="/shetuan/Public/css/animate.min.css" rel="stylesheet">
<link href="/shetuan/Public/css/style.min862f.css?v=4.1.0" rel="stylesheet">
<link href="/shetuan/Public/css/plugins/iCheck/custom.css" rel="stylesheet">

    <!--[if lt IE 9]>
<meta http-equiv="refresh" content="0;ie.html" />
<![endif]-->
</head>
<body class="gray-bg">
<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">Yian</h1>

        </div>
        <h3>社团管理系统登录</h3>

        <div class="m-t" role="form">
            <div class="form-group">
                <input type="text" class="form-control" name="adminName" id="adminName" placeholder="用户名" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="adminPassword" id="adminPassword" placeholder="密码" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b" id="subbtn">登 录</button>
        </div>
    </div>
</div>

</body>

<script src="/shetuan/Public/js/jquery.min.js?v=2.1.4"></script>
<script src="/shetuan/Public/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/shetuan/Public/js/content.min.js?v=1.0.0"></script>
<script src="/shetuan/Public/js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
<!-- Mirrored from www.zi-han.net/theme/hplus/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:23 GMT -->
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
                        if(data.status == 3){
                            window.location.href="<?php echo U('Superadmin/index');?>";
                        }else if(data.status == 2){
                            window.location.href="<?php echo U('Departadmin/index');?>";
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