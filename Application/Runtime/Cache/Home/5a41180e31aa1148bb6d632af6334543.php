<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <title>数据查询</title>

    <script>
        function del(){
            var obj =document.getElementById("id")
            obj.setAttribute("value","");
        }
    </script>
</head>
<body>
    <form action="<?php echo U('select');?>" method="post" id="fo" name="fo">
        <input type="text" id="id" name="id" value="输入要查询的条件" onfocus="del()"/>
        <input type="submit" value="查询" id="select" name="select">
    </form>

    <input type="text" value="<?php echo '姓名：'.$data1{'name'} ?>" />
    <input type="text" value="<?php echo '性别：'.$data1{'sex'} ?>"/>
</body>
</html>