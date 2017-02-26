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
    <title>添加管理员</title>
</head>
<body>
<h3>添加管理员</h3>
<div class="container">
    <div class="col-sm-offset-3 col-sm-6">
    <form action="doAdminAction.php?act=addAdmin" method="post">
        <div class="form-group">
            <label>管理员名称</label>
            <input class="form-control" type="text" name="username" placeholder="请输入名称"/>
        </div>
        <div class="form-group">
            <label>管理员密码</label>
            <input class="form-control" type="password" name="password" placeholder="请输入密码"/>
        </div>
        <div class="form-group">
            <label>管理员邮箱</label>
            <input class="form-control" type="text" name="email" placeholder="请输入邮箱"/>
        </div>
        <button type="submit" class="btn btn-default">完成</button>
    </form>
    </div>
</div>
</body>
</html>