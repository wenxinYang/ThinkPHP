<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>入口验证码</title>

    <script>
        function del(){
            var obj=document.getElementById("remind");
            obj.setAttribute("value",""); //这句是关键
        }
    </script>
</head>
<body>
<form action="<?php echo U('index');?>" method="post" id="form" name="form">
    <img src="<?php echo U('Home/Index/verify');?>" class="verifyCode" name="admin_verify" title="点击刷新验证码">
    <input type="text" value="<?php echo '时间  '.$data{'time'} ?>">
    <input type="button" onclick="javascript:window.location.reload() " value="刷新"/>
    <input type="text" id="remind" name="data" value="<?php echo $data{'result'} ?>" onfocus="del()"/>
    <input type="submit" id="data1" name="data1" value="提交验证码"/>
</form>

</body>
</html>