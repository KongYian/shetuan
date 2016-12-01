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
活动名称<input type="text" id="departApplyName" name="departApplyName">
<hr>
活动起止时间<input type="text" id="departApplyReason" name="departApplyReason">
<hr>
活动地点<input type="text"  name="departApplyReason">
<hr>
活动内容<input type="text" name="departApplyReason">
<hr>
申请时间（隐藏域）<?php echo (date("Y-m-d H:i:s",NOW_TIME)); ?>
<input type="hidden" value="<?php echo (NOW_TIME); ?>">
<hr>
<button id="subbtn" type="button">提交申请</button>
</body>
<script>
    $(function () {
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