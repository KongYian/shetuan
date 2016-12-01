<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户申请入会页面</title>
    <script src="/shetuan/Public/home/js/jquery.min.js"></script>
</head>
<body>
    <h1>用户申请入会页面</h1>
    <input type="hidden" value="<?php echo ($departid); ?>">
    <hr>
    申请加入理由<input type="text" id="applyReason">
    <hr>
    申请时间(隐藏)<input type="hidden" value="<?php echo (date('Y-m-d H:i:s',NOW_TIME)); ?>">
    <hr>
    <button id="subbtn" type="button">提交申请</button>
</body>
<script>
    $(function () {
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