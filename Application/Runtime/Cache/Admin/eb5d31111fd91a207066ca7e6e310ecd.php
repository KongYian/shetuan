<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
<title>新建值班</title>
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
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div method="get" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">值班人</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="attendancepeople">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">值班时间</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="attendancetime">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <button type="button" class="btn btn-w-m btn-info" id="subbtn">提交申请</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script src="/shetuan/Public/js/jquery.min.js?v=2.1.4"></script>
<script src="/shetuan/Public/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/shetuan/Public/js/content.min.js?v=1.0.0"></script>
<script src="/shetuan/Public/js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
<script>
    $(function () {
        $('#subbtn').on('click',function () {
            var attendancepeople = $('#attendancepeople').val();
            var attendancetime = $('#attendancetime').val();
            var param = {
                attendancepeople:attendancepeople,
                attendancetime:attendancetime,
            };
            console.log(param);
            if(!attendancepeople || !attendancetime){
                alert('每一项都必须填写');
            }else{
                var url ="<?php echo U('Attendance/newattendance');?>";
                $.ajax({
                    url:url,
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        alert(data.info);
                        window.location.href="<?php echo U('Attendance/departattendance');?>";
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