<?php
require_once "include.php";
$sql = "select * from product";
$rows = fetchAll($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pro</title>
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/pro.css">
    <!--[if IE 8]>
    <link rel="stylesheet" href="assets/css/pro-ie8.css">
    <![endif]-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="icon" href="assets/images/logo.gif" type="image/x-icon"/>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/backtotop.js"></script>
    <script src="assets/js/pro.js"></script>
</head>
<body>
<div class="header">
    <div class="bg"></div>
    <div class="container">
        <ul class="nav">
            <li><a href="index.php">首页</a></li>
            <li><a href="about.php">关于我们</a></li>
            <li><a href="news.php">新闻动态</a></li>
            <li><a class="selected"  href="javascript:void(0)">产品列表</a></li>
            <li><a href="userCenter.php">用户中心</a></li>
        </ul>
        <h1 class="header-h1">平邦保险</h1>
    </div>
</div>
<div class="section1 container">
    <h2>产品列表</h2>
    <?php
    $i = 0;
    foreach($rows as $row){
    ?>
    <div class="container" id="cont-<?php echo $row['id']?>">
        <a href="proDetail.php?id=<?php echo $row['id']?>&picNum=<?php echo $i?>">
            <div class="pic-container">
                <img src='assets/images/pro<?php echo $i?>.jpg' alt="">
            </div>
            <div class="cont-container">
                <h3><?php echo $row['title']?></h3>
                <p><?php echo $row['description']?></p>
            </div>
        </a>
    </div>
    <?php $i++;}?>
</div>
<div class="footer">
    <div class="container">
        <div class="left">
            <h2>导航</h2>
            <ul class="footer-nav">
                <li><a href="index.php">首页</a></li>
                <li><a href="about.php">关于我们</a></li>
                <li><a href="news.php">新闻动态</a></li>
                <li><a class="selected"  href="javascript:void(0)">产品列表</a></li>
                <li><a href="userCenter.php">用户中心</a></li>
            </ul>
        </div>
        <div class="right">
            <h2>订阅我们</h2><br>
            <input class="email" type="text" placeholder="你的邮箱"><input type="button" value="订阅">
        </div>
    </div>
</div>
</body>
</html>