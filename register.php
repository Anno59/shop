
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <!--[if IE 8]>
    <link rel="stylesheet" href="assets/css/contact-ie8.css">
    <![endif]-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="icon" href="assets/images/logo.gif" type="image/x-icon"/>
    <script src="assets/js/backtotop.js"></script>
    <script src="assets/js/jquery.js"></script>
<!--    <script src="assets/js/contact.js"></script>-->
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
            <li><a  class="selected" href="login.php">用户中心</a></li>
        </ul>
        <h1 class="header-h1">平邦保险</h1>
    </div>
</div>
<form action="doAction.php?act=register" class="form container" id="form" method="post">
    <h2>用户注册</h2>
    <div class="form-left">
        <label for="username"></label>
        <input id="username" class="username" name="username" type="text" placeholder="姓名" value="">
        <span></span>
        <label for="password"></label>
        <input id="password" class="password" name="password" type="password" placeholder="密码" value="">
        <span></span>
        <label for="realname"></label>
        <input id="realname" class="realname" name="realname" type="text" placeholder="真实姓名" value="">
        <span></span>
        <label for="idnumber"></label>
        <input id="idnumber" maxlength="18" class="idnumber" name="idnumber" type="text" placeholder="身份证号" value="">
        <span></span>
        <label for="tel"></label>
        <input id="tel" maxlength="11" class="tel" name="tel" type="tel" placeholder="电话" value="">
        <span></span>
        <label for="email"></label>
        <input id="email" class="email" name="email" type="text" placeholder="邮箱" value="">
        <span></span>
        <label for="submit"></label>
        <input id="submit" class="submit" type="submit" value="提交">
    </div>
<!--    <div class="form-right">
        <ul>
            <li class="li-1">中央大道1号</li>
            <hr>
            <li class="li-2">bigHeng@gmail.com</li>
            <hr>
            <li class="li-3">+010-10086</li>
        </ul>
    </div>
--></form>
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
        <div class="right">
            <h2>订阅我们</h2><br>
            <input class="email" type="email" placeholder="你的邮箱">
            <input type="button" value="订阅">
        </div>
    </div>
</div>
</body>
</html>