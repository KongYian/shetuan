<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>活动创建申请</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
</head>
<body>
<?php echo 'admin id is:'.$_SESSION['adminId']?>
<hr>
<?php echo 'hello,'.$_SESSION['adminName']?>
<h1>活动创建申请</h1>
<hr>
活动名称<input type="text" id="activityApplyName" name="activityApplyName">
<hr>
活动起止时间<input type="text" id="activityTime" name="activityTime">
<hr>
活动地点<input type="text"  name="activityApplyAddr" id="activityApplyAddr">
<hr>
活动内容<input type="text" name="activityApplyContent" id="activityApplyContent">
<hr>
申请时间（隐藏域）<?php echo (date("Y-m-d H:i:s",NOW_TIME)); ?>
<input type="hidden" value="<?php echo (NOW_TIME); ?>">
<hr>
<button id="subbtn" type="button">提交申请</button>
</body>
<script>
    $(function () {
        $('#subbtn').on('click',function () {
            var activityApplyName = $('#activityApplyName').val();
            var activityTime = $('#activityTime').val();
            var activityApplyAddr = $("#activityApplyAddr").val();
            var activityApplyContent = $("#activityApplyContent").val();
            var activityApplyTime = $("input[type='hidden']").val();
            var param = {activityApplyName:activityApplyName,activityTime:activityTime,activityApplyAddr:activityApplyAddr,activityApplyContent:activityApplyContent,activityApplyTime:activityApplyTime};
            console.log(param);
            if(!activityApplyName || !activityTime || !activityApplyAddr || !activityApplyTime){
                alert('每一项都必须填写');
            }else{
                $.ajax({
                    url:"<?php echo U('Departadmin/subactivityapply');?>",
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        alert(data.info);
                        window.location.href="<?php echo U('Departadmin/index');?>";
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