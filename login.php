<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <!--[if IE 8]>
    <link rel="stylesheet" href="assets/css/contact-ie8.css">
    <![endif]-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="icon" href="assets/images/logo.gif" type="image/x-icon"/>
    <script src="assets/js/backtotop.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/validate.js"></script>
</head>
<body>
<div class="header">
    <div class="bg"></div>
    <div class="container">
        <ul class="nav">
            <li><a href="index.php">首页</a></li>
            <li><a href="about.php">关于我们</a></li>
            <li><a href="news.php">新闻动态</a></li>
            <li><a href="pro.php">产品列表</a></li>
            <li><a  class="selected" href="javascript:void(0)">用户中心</a></li>
        </ul>
        <h1 class="header-h1">平邦保险</h1>
    </div>
</div>
<form action="doLogin.php" class="form container" onsubmit="return frontLoginRegValue()" id="form" method="post">
    <h2 >用户登录</h2>
    <div class="form-left">
        <label for="username"></label>
        <input id="username" class="username" name="username" type="text" placeholder="用户名" value="">
        <span></span>
        <label for="password"></label>
        <input id="password" class="password" name="password" type="password" placeholder="密码" value="">
        <span></span>
        <label for="submit"></label>
        <input id="submit" class="submit" type="submit" value="登录">
        <a href="register.php"><去注册></a>
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
                <li><a href="pro.php">产品列表</a></li>
                <li><a  class="selected" href="javascript:void(0)">用户中心</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>