<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>社团创建申请</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/shetuan/Public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/shetuan/Public/css/magic-check.css" />
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
        <strong>社团创建申请</strong>
        <em>Welcome```</em>
    </dt>
    <dd class="user_icon">
        <input type="text" placeholder="社团名称" class="login_txtbx" id="departApplyName" name="departApplyName"/>
    </dd>
    <dd class="pwd_icon">
        <input type="password" placeholder="社团简介" class="login_txtbx" id="departApplyIntroduction" name="departApplyIntroduction"/>
    </dd>
    <dd class="pwd_icon">
        <input type="password" placeholder="申请理由" class="login_txtbx" id="departApplyReason" name="departApplyReason"/>
    </dd>
    <input type="hidden" value="<?php echo (NOW_TIME); ?>">
    <dd>
        <input type="button" value="确认提交" class="submit_btn" id="subbtn"/>
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
            var departApplyName = $('#departApplyName').val();
            var departApplyIntroduction = $('#departApplyIntroduction').val();
            var departApplyReason = $('#departApplyReason').val();
            var departApplyTime = $("input[type='hidden']").val();
            var param = {departApplyName:departApplyName,departApplyIntroduction:departApplyIntroduction,departApplyReason:departApplyReason,departApplyTime:departApplyTime};
            console.log(param);
            if(!departApplyName || !departApplyIntroduction || !departApplyReason){
                alert('每一项都必须填写');
            }else{
                $.ajax({
                    url:"<?php echo U('departapply/departapplycheck');?>?$departid=",
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