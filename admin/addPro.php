<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/25
 * Time: 18:24
 */
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
    <title>添加产品</title>
</head>
<body>
<h3>添加产品</h3>
<div class="container">
    <form action="doPro.php?act=addPro" method="post">
        <div class="form-group">
            <label>产品名</label>
            <input type="text" name="title" class="form-control" id="" placeholder="" required>
        </div>
        <div class="form-group">
            <label>产品概要</label>
            <input type="text" name="description" class="form-control" id="" required>
        </div>
        <div class="form-group">
            <label>产品价格</label>
            <input type="text" name="prePrice" class="form-control" id="" placeholder="" required>
        </div>

        <div class="form-group">
            <label>产品优惠价</label>
            <input type="text" name="discountPrice" class="form-control" id="" required>
        </div>
        <div class="form-group">
            <label>简介</label>
            <textarea style="resize: none" class="form-control" name="content" id="content" rows="6" placeholder="" required></textarea>
        </div>
        <button type="submit" class="btn btn-default">完成</button>
    </form>
</div>
</body>
</html>
