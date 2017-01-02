<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新建收支记录</title>
    <script src="/shetuan/Public/admin/js/jquery.min.js"></script>
</head>
<body>
收支类型
<input type="radio" name="expensemethod" value="1"> 收入
<input type="radio" name="expensemethod" value="2"> 支出
<hr>
金额<input type="text" id="expensecharge">
<hr>
时间<input type="text" id="expensetime">
<hr>
笔记<input type="text" id="expensenote">
<button id="subbtn" type="button">提交</button>
</body>

<script>
    $(function () {
        $('#subbtn').on('click',function () {
            var expensemethod = $("input[type='radio']:checked").val();
            var expensecharge = $('#expensecharge').val();
            var expensenote = $('#expensenote').val();
            var expensetime = $('#expensetime').val();
            var param = {
                expensemethod:expensemethod,
                expensecharge:expensecharge,
                expensenote:expensenote,
                expensetime:expensetime
                };
            console.log(param);
            if(!expensemethod || !expensecharge || !expensenote || !expensetime){
                alert('每一项都必须填写');
            }else{
                var url ="<?php echo U('Expense/newexpense');?>";
                $.ajax({
                    url:url,
                    data:param,
                    dataType:'json',
                    type:'post',
                    success:function (data) {
                        alert(data.info);
                        window.location.href="<?php echo U('Expense/departexpense');?>";
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