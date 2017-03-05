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
    <script type="text/javascript" src="../assets/js/validate.js"></script>
    <title>添加用户</title>
</head>
<body>
<h3>添加用户</h3>
<div class="container">
    <div class="col-sm-offset-3 col-sm-6">
        <form action="doUser.php?act=addUser" onsubmit="return submitUserValue()" method="post">
            <div class="form-group">
                <label>用户名称</label>
                <input class="form-control username" type="text" name="username" placeholder="请输入名称" required/>
                <span></span>
            </div>
            <div class="form-group">
                <label>用户密码</label>
                <input class="form-control password" type="password" name="password" placeholder="请输入密码" required/>
                <span></span>
            </div>
            <div class="form-group">
                <label>真实姓名</label>
                <input class="form-control realname" type="text" name="realname" placeholder="请输入姓名" required/>
                <span></span>
            </div>
            <div class="form-group">
                <label>身份证号</label>
                <input class="form-control idnumber" type="text" name="idnumber" placeholder="请输入身份证号" required/>
                <span></span>
            </div>
            <div class="form-group">
                <label>联系电话</label>
                <input class="form-control tel" type="tel" name="tel" placeholder="请输入电话" required/>
                <span></span>
            </div>
            <div class="form-group">
                <label>邮箱</label>
                <input class="form-control email" type="email" name="email" placeholder="请输入邮箱" required/>
                <span></span>
            </div>
            <button type="submit" class="btn btn-default">完成</button>
        </form>
    </div>
</div>
</body>
</html>