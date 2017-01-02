<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新建物品信息</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
</head>
<body> 物品名称<input type="text" id="goodsname">
<hr>
物品数量<input type="text" id="goodsnum">
<button id="subbtn" type="button">提交</button>
</body>

<script>
    $(function () {
        $('#subbtn').on('click',function () {
            var goodsname = $('#goodsname').val();
            var goodsnum = $('#goodsnum').val();
            var param = {
                goodsname:goodsname,
                goodsnum:goodsnum,
                };
            console.log(param);
            if(!goodsname || !goodsnum){
                alert('每一项都必须填写');
            }else{
                var url ="<?php echo U('Goods/newgoods');?>";
                $.ajax({
                    url:url,
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        alert(data.info);
                        window.location.href="<?php echo U('Goods/departgoods');?>";
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