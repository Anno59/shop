<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/25
 * Time: 20:50
 */
require_once "include.php";
$id = $_GET['id'];
$picNum = $_GET['picNum'];
$sql = "select * from product where id=$id";
$row = fetchOne($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pro</title>
    <link rel="stylesheet" href="assets/css/common.css">
<!--    <link rel="stylesheet" href="assets/css/pro.css">-->
    <!--[if IE 8]>
    <!--<link rel="stylesheet" href="assets/css/pro-ie8.css">-->
    <![endif]-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
<!--    <link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
    <link rel="icon" href="assets/images/logo.gif" type="image/x-icon"/>
    <link rel="stylesheet" href="assets/css/proDetail.css">
    <script src="assets/js/backtotop.js"></script>
    <script src="assets/js/jquery-2.0.3.min.js"></script>
</head>
<body>
<div class="header">
    <div class="bg"></div>
    <div class="container">
        <ul class="nav">
            <li><a href="index.php">首页</a></li>
            <li><a href="about.php">关于我们</a></li>
            <li><a  class="selected" href="pro.php">新闻动态</a></li>
            <li><a href="pro.php">产品列表</a></li>
            <li><a href="login.php">用户中心</a></li>
        </ul>
        <h1 class="header-h1">农业家园</h1>
    </div>
</div>
<div class="procontent">
<!--    <h1 class="news_title">--><?php //echo $row['title']?><!--</h1>-->
        <div class="col-xs-8">
            <img src='assets/images/pro<?php echo $picNum?>.jpg' alt="">
        </div>
        <div class="col-xs-4">
            <h1 class="pro_title"><?php echo $row['title']?></h1>
            <div class="pro_txt">简介：<?php echo $row['description']?></div>
            <div class="pro_txt">价格：<?php echo $row['prePrice']?></div>
            <div class="pro_txt">优惠价：<?php echo $row['discountPrice']?></div>
        </div>
        <!--    <div class="contheight"></div>-->
    <div class="contheight"></div>
    <div class="contheight"></div>
    <div class="pro_content"><?php echo $row['content']?></div>
</div>
<div class="footer">
    <div class="container">
        <div class="left">
            <h2>导航</h2>
            <ul class="footer-nav">
                <li><a href="index.php">首页</a></li>
                <li><a href="about.php">关于我们</a></li>
                <li><a  class="selected" href="javascript:void(0)">新闻动态</a></li>
                <li><a href="pro.php">产品列表</a></li>
                <li><a href="login.php">用户中心</a></li>
            </ul>
        </div>
        <div class="right">
            <h2>订阅我们</h2><br>
            <input class="email" type="text" placeholder="你的邮箱"><input type="button" value="订阅">
        </div>
    </div>
</div>
</body>
<script>
    $(function () {
        var str = $('.pro_content').text();
        $('.pro_content').html(str.replace(/\s/g,'<div class="contheight"></div>'))
    })
</script>
</html>