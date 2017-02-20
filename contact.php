<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact</title>
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <!--[if IE 8]>
    <link rel="stylesheet" href="assets/css/contact-ie8.css">
    <![endif]-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="icon" href="assets/images/logo.gif" type="image/x-icon"/>
    <script src="assets/js/backtotop.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/contact.js"></script>
</head>
<body>
<div class="header">
    <div class="bg"></div>
    <div class="container">
        <ul class="nav">
            <li><a href="index.php">首页</a></li>
            <li><a href="about.php">关于我们</a></li>
            <li><a href="news.php">新闻动态</a></li>
            <li><a href="gallery.php">产品列表</a></li>
            <li><a  class="selected" href="javascript:void(0)">联系我们</a></li>
        </ul>
        <h1 class="header-h1">农业家园</h1>
    </div>
</div>
<form class="form container" id="form">
    <h2>联系我们</h2>
    <div class="form-left">
        <label for="name"></label>
        <input id="name" class="name" type="text" placeholder="姓名" value="姓名">
        <span></span>
        <label for="email"></label>
        <input id="email" class="email" type="email" placeholder="邮箱" value="邮箱">
        <span></span>
        <label for="project"></label>
        <input id="project" class="project" type="text" placeholder="项目" value="项目">
        <span></span>
        <label for="content"></label>
        <textarea id="content" class="content" placeholder="内容">内容</textarea>
        <span></span>
        <div class="sex">
            <i class="icon-circle"></i>
            <input type="radio" name="sex" value="male" checked>男
            <i class="icon-circle-blank"></i>
            <input type="radio" name="sex" value="female">女
        </div>
        <button type="reset">想重填？不妨重置</button>
        <label for="submit"></label>
        <input id="submit" class="submit" type="submit" value="提交">
    </div>
    <div class="form-right">
        <ul>
            <li class="li-1">中央大道1号</li>
            <hr>
            <li class="li-2">bigHeng@gmail.com</li>
            <hr>
            <li class="li-3">+010-10086</li>
        </ul>
    </div>
</form>
<div class="footer">
    <div class="container">
        <div class="left">
            <h2>导航</h2>
            <ul class="footer-nav">
                <li><a href="index.php">首页</a></li>
                <li><a href="about.php">关于我们</a></li>
                <li><a href="news.php">新闻动态</a></li>
                <li><a href="gallery.php">产品列表</a></li>
                <li><a  class="selected" href="javascript:void(0)">联系我们</a></li>
            </ul>
        </div>
        <div class="right">
            <h2>订阅我们</h2><br>
            <input class="email" type="email" placeholder="你的邮箱">
            <input type="button" value="订阅">
        </div>
    </div>
</div>
</body>
</html>