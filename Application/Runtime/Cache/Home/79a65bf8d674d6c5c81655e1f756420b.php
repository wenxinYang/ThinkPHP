<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>验证码</title>
</head>
<body>
<form action="<?php echo U('Login');?>" method="post" id="form" name="form">
    <img src="<?php echo U('Home/Index/verify');?>" class="verifyCode" name="admin_verify" title="点击刷新验证码">
    <input type="button" onclick="javascript:window.location.reload() " value="刷新"/>
    <input type="text" id="data" name="data"/>
    <input type="submit" id="data1" name="data1" value="提交验证码"/>
    <input type="text" value="<?php echo $result ?>"/>
</form>

</body>
</html>