<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/20
 * Time: 16:47
 */
require_once "include.php";
$id = $_GET['id'];
$sql = "select * from news where id=$id";
$row = fetchOne($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>news</title>
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/news.css">
    <!--[if IE 8]>
    <link rel="stylesheet" href="assets/css/news-ie8.css">
    <![endif]-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="icon" href="assets/images/logo.gif" type="image/x-icon"/>
    <link rel="stylesheet" href="assets/css/newsDetail.css">
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
            <li><a  class="selected" href="javascript:void(0)">新闻动态</a></li>
            <li><a href="gallery.php">产品列表</a></li>
            <li><a href="contact.php">联系我们</a></li>
        </ul>
        <h1 class="header-h1">农业家园</h1>
    </div>
</div>
<div class="newscontent">
    <h1 class="news_title"><?php echo $row['title']?></h1>
    <div class="news_about">
        <p>发布时间：<?php echo $row['pubTime']?></p>
        <p>来源：平邦保险</p>
    </div>
    <div class="contheight"></div>
    <div class="news_txt"><?php echo $row['content']?></div>
    <div class="news_editor">编辑：平邦保险<span>未经授权不得转载</span></div>
    <div class="contheight"></div>
    <div class="contheight"></div>
    <div class="news_path"><a href="news.php#newsRec">返回</a></div>
</div>
<div class="footer">
    <div class="container">
        <div class="left">
            <h2>导航</h2>
            <ul class="footer-nav">
                <li><a href="index.php">首页</a></li>
                <li><a href="about.php">关于我们</a></li>
                <li><a  class="selected" href="javascript:void(0)">新闻动态</a></li>
                <li><a href="gallery.php">产品列表</a></li>
                <li><a href="contact.php">联系我们</a></li>
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
        var str = $('.news_txt').text();
        $('.news_txt').html(str.replace(/\s/g,'<div class="contheight"></div>'))
    })
</script>
</html>