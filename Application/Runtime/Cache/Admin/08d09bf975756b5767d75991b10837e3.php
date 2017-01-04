<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
<title>活动管理</title>
<meta name="keywords" content="社团管理系统，常州大学，课程设计" />

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
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox-content">

                <table class="table table-striped table-bordered table-hover dataTables-example" id="newactivity">
                    <thead>
                    <tr>
                        <td>申请社团名称</td>
                        <td>活动名称</td>
                        <td>活动时间</td>
                        <td>活动地点</td>
                        <td>活动内容</td>
                        <td>申请时间</td>
                        <td>操作</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($res)): foreach($res as $k=>$val): ?><tr>
                            <td><?php echo ($val["departname"]); ?></td>
                            <td><?php echo ($val["activityapplyname"]); ?></td>
                            <td><?php echo ($val["activitytime"]); ?></td>
                            <td><?php echo ($val["activityapplyaddr"]); ?></td>
                            <td><?php echo ($val["activityapplycontent"]); ?></td>
                            <td><?php echo (date("Y-m-d H:i:s",$val["activityapplytime"])); ?></td>
                            <td data-id="<?php echo ($val["activityapplyid"]); ?>">
                                <button class="btn btn-sm btn-info " title="agreebtn">同意</button>
                                <button class="btn btn-sm btn-danger " title="disagreebtn">不同意</button>
                            </td>
                        </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox-content">

                <table class="table table-striped table-bordered table-hover dataTables-example" id="manageactivity">
                    <thead>
                    <tr id="target">
                        <td>社团ID</td>
                        <td>活动名称</td>
                        <td>活动时间</td>
                        <td>活动地点</td>
                        <td>活动内容</td>
                        <td>创建时间</td>
                        <td>操作</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($info)): foreach($info as $k=>$value): ?><tr>
                            <td><?php echo ($value["departname"]); ?></td>
                            <td><?php echo ($value["activityname"]); ?></td>
                            <td><?php echo ($value["activitytime"]); ?></td>
                            <td><?php echo ($value["activityaddr"]); ?></td>
                            <td><?php echo ($value["activitycontent"]); ?></td>
                            <td><?php echo ($value["createtime"]); ?></td>
                            <td data-id="<?php echo ($value["activityid"]); ?>">
                                <button class="btn btn-sm btn-info " title="activitydetails">查看详情</button>
                                <button class="btn btn-sm btn-danger " title="activitydel">删除活动</button>
                            </td>
                        </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</body>

<script src="/shetuan/Public/js/jquery.min.js?v=2.1.4"></script>
<script src="/shetuan/Public/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/shetuan/Public/js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="/shetuan/Public/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="/shetuan/Public/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="/shetuan/Public/js/content.min.js?v=1.0.0"></script>
<!--<script>-->
    <!--$(document).ready(function(){$(".dataTables-example").dataTable();var oTable=$("#editable").dataTable();oTable.$("td").editable("http://www.zi-han.net/theme/example_ajax.php",{"callback":function(sValue,y){var aPos=oTable.fnGetPosition(this);oTable.fnUpdate(sValue,aPos[0],aPos[1])},"submitdata":function(value,settings){return{"row_id":this.parentNode.getAttribute("id"),"column":oTable.fnGetPosition(this)[2]}},"width":"90%","height":"100%"})});function fnClickAddRow(){$("#editable").dataTable().fnAddData(["Custom row","New row","New row","New row","New row"])};-->
<!--</script>-->
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
<script>
    $(function () {
        $('#newactivity button').on('click',function () {
            var btn = $(this);
            var dotr = {};
            dotr = btn.closest('tr');
            var activityapplyid = btn.parent().data('id');
            var param = {activityapplyid:activityapplyid};
//            console.log(param)
//            var tt =dotr[0].innerHTML;
//            console.log(tt)
//            var target = $('#target');
//            console.log(target);

            var btnclass = btn.attr('title');
            //因为只需要activityapplyid一个值，所以在这里进行区分
            if(btnclass == 'agreebtn'){
                var url ="<?php echo U('Superadmin/agreeactivityapply');?>";
            }else if (btnclass == 'disagreebtn'){
                var url ="<?php echo U('Superadmin/disagreeactivityapply');?>";
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
                        if(data.type == 1){
                            //同意申请
                            var $lastedid = data.lastedid;
//                            var dotd = btn.closest('tr');
//                           在此处把同意的新申请动态添加
//                            console.log(dotd);
//                            target.prepend(dotr);
//                            var tt = dotr[0];
//                            typeof(tt);
//                            var test = $(tt);
//                            console.log(test);
//                            dotr[0]['innerText'] = tt;
//                            console.log(dotr);
//                            console.log(tt);
                            $('#manageactivity').append(dotr);
                        }
                    }
                },
                error:function () {
                    alert('操作失败');
                }
            })
        })

        $('#manageactivity button').on('click',function () {
            var btn = $(this);
            var activityid = btn.parent().data('id');
            var param = {activityid:activityid};
            var btnclass = btn.attr('title');
            //因为只需要activityapplyid一个值，所以在这里进行区分
            if(btnclass == 'activitydetails'){
                var url ="<?php echo U('Superadmin/activitydetails');?>";
                $.ajax({
                    url: url,
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        if(data.status==1){
                            //弹窗框
                            console.log(data.info);
                        }else{
                            alert(data.info);
                        }
                    },
                    error:function () {
                        alert('操作失败');
                    }
                })
            }else if (btnclass == 'activitydel'){
                var url ="<?php echo U('Superadmin/activitydel');?>";
                $.ajax({
                    url: url,
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        var dotr = btn.closest('tr');
                        alert(data.info);
                        if(data.status==1){
                            dotr.remove();
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