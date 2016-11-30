<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php if(is_array($res)): foreach($res as $k=>$vo): echo ($vo); ?><br><?php endforeach; endif; ?>

</body>
</html>