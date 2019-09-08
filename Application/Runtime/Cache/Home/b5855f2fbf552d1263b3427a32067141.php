<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>getInfo</title>
</head>
<body>
    <input type="button" value="现在的时间">
    <input type="button" onclick="javascript:window.location.reload() " value="刷新"/>
    <input type="text" value="<?php echo $data ?>">

    <input type="text" value="<?php  echo $Think.config.usr_model ?>">
</body>
</html>