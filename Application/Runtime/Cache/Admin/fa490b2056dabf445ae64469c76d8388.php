<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
<title>新用户入会申请</title>
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

                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr>
                        <th>申请人姓名</th>
                        <th>申请加入社团名称</th>
                        <th>申请理由</th>
                        <th>申请时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($res)): foreach($res as $k=>$val): ?><tr class="gradeX">
                            <td><?php echo ($val["username"]); ?></td>
                            <td><?php echo ($val["departname"]); ?></td>
                            <td><?php echo ($val["applyreason"]); ?></td>
                            <td><?php echo ($val["applytime"]); ?></td>
                            <td data-id="<?php echo ($val["joinid"]); ?>" data-did="<?php echo ($val["departid"]); ?>">
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
        $('table button').on('click',function () {
            var btn = $(this);
            var dotr = btn.closest('tr');
            var joinId = btn.parent().data('id');
            var departid = btn.parent().data('did');
            var param = {joinId:joinId,departid:departid};
            var btnclass = btn.attr('title');
            //因为只需要applyid一个值，所以在这里进行区分
            if(btnclass == 'agreebtn'){
                var url ="<?php echo U('Superadmin/agreeuserapply');?>";
            }else if (btnclass == 'disagreebtn'){
                var url ="<?php echo U('Superadmin/disagreeuserapply');?>";
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