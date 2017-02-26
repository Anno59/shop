<?php
require_once '../include.php';
checkLogined();
?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/adminResset.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <title>添加用户</title>
</head>
<body>
<h3>添加用户</h3>
<div class="container">
    <div class="col-sm-offset-3 col-sm-6">
        <form action="doUserAction.php?act=addUser" method="post">
            <div class="form-group">
                <label>用户名称</label>
                <input class="form-control" type="text" name="username" placeholder="请输入名称"/>
            </div>
            <div class="form-group">
                <label>用户密码</label>
                <input class="form-control" type="password" name="password" placeholder="请输入密码"/>
            </div>
            <div class="form-group">
                <label>真实姓名</label>
                <input class="form-control" type="text" name="realname" placeholder="请输入姓名"/>
            </div>
            <div class="form-group">
                <label>身份证号</label>
                <input class="form-control" type="text" name="idnumber" placeholder="请输入身份证号"/>
            </div>
            <div class="form-group">
                <label>联系电话</label>
                <input class="form-control" type="text" name="tel" placeholder="请输入电话"/>
            </div>
            <div class="form-group">
                <label>邮箱</label>
                <input class="form-control" type="text" name="email" placeholder="请输入邮箱"/>
            </div>
            <button type="submit" class="btn btn-default">完成</button>
        </form>
    </div>
</div>
</body>
</html>