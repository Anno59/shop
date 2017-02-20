<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/19
 * Time: 11:15
 */
require_once "../include.php";
$id=$_REQUEST["id"];
$sql = "select * from imooc_admin where id='$id'";
$row = fetchOne($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <title>管理员编辑</title>
</head>
<body>
<h3>编辑管理员</h3>
<div class="container">
    <div class="col-sm-offset-3 col-sm-5">
        <form action="doAdminAction.php?act=editAdmin&id=<?php echo $id;?>" method="post">
            <div class="form-group">
                <label>管理员名称</label>
                <input type="text" name="username" class="form-control"  value="<?php echo $row["username"]?>">
            </div>
            <div class="form-group">
                <label>管理员密码</label>
                <input type="password" name="password" class="form-control" value="<?php echo $row["password"]?>">
            </div>
            <div class="form-group">
                <label>管理员邮箱</label>
                <input type="text" class="form-control" name="email" value="<?php echo $row["email"]?>"/>
            </div>
            <button type="submit" class="btn btn-default">完成</button>
        </form>
    </div>
</div>
</body>
</html>
