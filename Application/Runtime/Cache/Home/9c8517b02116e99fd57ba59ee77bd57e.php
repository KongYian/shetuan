<?php if (!defined('THINK_PATH')) exit();?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>用户申请入会</title>
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
        <strong>申请入会</strong>
        <em>Welcome```</em>
    </dt>
    <input type="hidden" value="<?php echo ($departid); ?>">


    <dd class="pwd_icon">
        <input type="text" placeholder="申请理由" class="login_txtbx" id="applyReason" />
    </dd>
    <input type="hidden" value="<?php echo (date('Y-m-d H:i:s',NOW_TIME)); ?>">
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
            var flag;
            var departId = $("input[type='hidden']").eq(0).val();
            var applyReason = $('#applyReason').val();
            var applyTime = $("input[type='hidden']").eq(1).val();
            var param = {departId:departId,applyReason:applyReason,applyTime:applyTime};
            console.log(param);
            $.each(param,function (index,domobj) {
                if(domobj == ''){
                    flag = 1;
                    return false;
                }
            })
            if(flag == 1){
                alert('每一项都必须填写');
            }else{
                $.ajax({
                    url:"<?php echo U('Joinapply/applysubmit');?>",
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        alert(data.info);
                        window.location.href= "<?php echo U('Home/index/index');?>"

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