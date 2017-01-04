<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>用户基本信息填写页面</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/shetuan/Public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/shetuan/Public/css/magic-check.css" />
    <style>
        body{height:100%;background:#16a085;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
        .aradio{
            font-size:14px;
            height:26px;
            /*line-height:26px;*/
            /*padding:8px 5%;*/
            width:90%;
            /*text-indent:2em;*/
            border:none;
            background:#5cbdaa;
            color:white;
        }
        #hello span{
            color:white;
        }

    </style>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
    <script src="/shetuan/Public/js/verificationNumbers.js" ></script>
    <script src="/shetuan/Public/js/Particleground.js"></script>
</head>
<body>




<dl class="admin_login">
    <dt>
        <strong>用户基本信息</strong>
        <em>Welcome```</em>
    </dt>

    <!--<dd>-->
    <span style="color: white">性别</span>

    <div id="hello">
        <input type="radio" name="userGender" class="aradio" value="1"><span>男</span>
        <input type="radio" name="userGender" class="aradio" value="2"><span>女</span>
    </div>
    <!--</dd>-->
    <dd class="user_icon">
        <input type="text" placeholder="年龄" class="login_txtbx" id="userAge"/>
    </dd>
    <dd class="pwd_icon">
        <input type="text" placeholder="电话号码" class="login_txtbx" id="userTelphone"/>
    </dd>
    <dd class="pwd_icon">
        <input type="text" placeholder="QQ" class="login_txtbx" id="userQq"/>
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
            var userGender = $("input[type='radio']").val();
            var userAge = $('#userAge').val();
            var userTelphone = $('#userTelphone').val();
            var userQq = $('#userQq').val();
            var modifyTime = $("input[type='hidden']").eq(0).val();
            var param = {userGender:userGender,userAge:userAge,userTelphone:userTelphone,userQq:userQq,modifyTime:modifyTime};
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
                    url:"<?php echo U('Userinfo/myinfo');?>",
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        if(data.status == 1){
                            alert(data.info);
                        }else{
                            alert(data.info);
                        }
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