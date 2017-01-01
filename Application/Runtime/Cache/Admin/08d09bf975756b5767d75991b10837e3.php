<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>活动管理页面</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
</head>
<body>
<h1>新活动审批页面</h1>
<table border="2px solid">
    <tr>
        <td>申请社团名称</td>
        <td>活动名称</td>
        <td>活动时间</td>
        <td>活动地点</td>
        <td>活动内容</td>
        <td>申请时间</td>
        <td>操作</td>
    </tr>
    <?php if(is_array($res)): foreach($res as $k=>$val): ?><tr>
            <!--点击可以查看申请人的基本信息-->
            <td><?php echo ($val["departname"]); ?></td>
            <td><?php echo ($val["activityapplyname"]); ?></td>
            <td><?php echo ($val["activitytime"]); ?></td>
            <td><?php echo ($val["activityapplyaddr"]); ?></td>
            <td><?php echo ($val["activityapplycontent"]); ?></td>
            <td><?php echo ($val["activityapplytime"]); ?></td>
            <!--同意和不同意两个操作
                1、不论进行同意或者不同意操作，将【未处理】改为【已处理】
                2、同意 status状态置为1 插入社团表
                3、不同意 删除本次申请，做软删除
            -->
            <td data-id="<?php echo ($val["activityapplyid"]); ?>">
                <button class="agreebtn">同意</button>|<button class="disagreebtn">不同意</button>
            </td>
        </tr><?php endforeach; endif; ?>
</table>
<hr>
<h1>活动管理页面</h1>
<!--列出所有status = 0 的活动-->
<table border="2px solid">
    <tr>
        <td>社团ID</td>
        <td>活动名称</td>
        <td>活动时间</td>
        <td>活动地点</td>
        <td>活动内容</td>
        <td>创建时间</td>
        <td>操作</td>
    </tr>
    <?php if(is_array($info)): foreach($info as $k=>$value): ?><tr>
            <td><?php echo ($value["departid"]); ?></td>
            <td><?php echo ($value["activityname"]); ?></td>
            <td><?php echo ($value["activitytime"]); ?></td>
            <td><?php echo ($value["activityaddr"]); ?></td>
            <td><?php echo ($value["activitycontent"]); ?></td>
            <td><?php echo ($value["createtime"]); ?></td>
            <td data-id="<?php echo ($val["activityid"]); ?>">
                <button class="activitydetails">查看详情</button>
                |
                <button class="activitydel">删除活动</button>
            </td>
        </tr><?php endforeach; endif; ?>
</table>
</body>
<script>
    $(function () {
        $('table button').on('click',function () {
            var btn = $(this);
            var dotr = btn.closest('tr');
            var activityapplyid = btn.parent().data('id');
            var param = {activityapplyid:activityapplyid};
            var btnclass = btn.attr('class');
            //因为只需要activityapplyid一个值，所以在这里进行区分
            if(btnclass == 'agreebtn'){
                var url ="<?php echo U('Superadmin/agreeactivityapply');?>";
            }else if (btnclass == 'disagreebtn'){
                var url ="<?php echo U('Superadmin/disagreeactivityapply');?>";
            }else if (btnclass == 'activitydetails'){
                alert('yesy');
            }
            $.ajax({
                url: url,
                data:param,
                dataType:'json',
                type:'post',
                success:function (data) {
                    alert(data.info);
                    if(data.status==1){
                        dotr.remove();
                    }
                },
                error:function () {
                    alert('操作失败');
                }
            })
        })


    })
</script>
</html>