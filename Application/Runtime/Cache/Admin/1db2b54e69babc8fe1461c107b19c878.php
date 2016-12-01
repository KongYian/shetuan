<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新社团申请处理页面</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
</head>
<body>
    <h1>新社团申请处理页面</h1>
    <table border="2px solid">
        <tr>
        <td>申请人</td>
        <td>申请社团名称</td>
        <td>社团简介</td>
        <td>申请理由</td>
        <td>申请时间</td>
        <td>操作</td>
        </tr>
    <?php if(is_array($res)): foreach($res as $k=>$val): ?><tr>
            <!--点击可以查看申请人的基本信息-->
        <td><?php echo ($val["userid"]); ?></td>
        <td><?php echo ($val["departapplyname"]); ?></td>
        <td><?php echo ($val["departapplyintroduction"]); ?></td>
        <td><?php echo ($val["departapplyreason"]); ?></td>
        <td><?php echo ($val["departapplytime"]); ?></td>
            <!--同意和不同意两个操作
                1、不论进行同意或者不同意操作，将【未处理】改为【已处理】
                2、同意 status状态置为1 插入社团表
                3、不同意 删除本次申请，不做软删除
            -->
        <td data-id="<?php echo ($val["departapplyid"]); ?>"><button class="agreebtn">同意</button>|<button class="disagreebtn"">不同意</button></td>
        </tr><?php endforeach; endif; ?>
    </table>
</body>
<script>
    $(function () {
        $('.agreebtn').on('click',function () {
            var userName = $('#userName').val();
            var userPassword = $('#userPassword').val();
            var param = {userName:userName,userPassword:userPassword};
            console.log(param);
            if(!userName || !userPassword){
                alert('用户名或者密码为空');
            }else{
                $.ajax({
                    url:"<?php echo U('index/login');?>",
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        alert(data.info);
                        if(data.status == 1){
                            window.location.href="<?php echo U('Index/index');?>";
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

        $('.disagreebtn').on('click',function () {
            var btn = $(this);
            var departApplyId = btn.parent().data('id');
            alert(departApplyId);
        })

    })
</script>
</html>