<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户基本信息填写页面</title>
    <script src="/shetuan/Public/home/js/jquery.min.js"></script>
</head>
<body>
<h1>用户申请入会页面</h1>
性别
<input type="radio" name="userGender" value="1"> 男
<input type="radio" name="userGender" value="2"> 女
<hr>
年龄<input type="text" id="userAge">
<hr>
电话号码<input type="text" id="userTelphone">
<hr>
QQ号码<input type="text" id="userQq">
<hr>
修改时间(隐藏)<input type="hidden" value="<?php echo (date('Y-m-d H:i:s',NOW_TIME)); ?>">
<hr>
<button id="subbtn" type="button">确认提交</button>
<button  type="button">修改我的基本信息</button>
</body>
<script>
    $(function () {
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