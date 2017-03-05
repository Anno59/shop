<?php
/**
 * Created by PhpStorm.
 * User: 372025284@qq.com
 * Date: 2017.02.23
 * Time: 22:52
 */
require_once 'include.php';
//var_dump($_SESSION['userName'])
checkUserLogined();
$username = $_SESSION['userName'];
$sql = "select * from order_pro where username='$username'";
$rows = fetchAll($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户中心</title>
    <link rel="stylesheet" href="assets/css/common.css">
<!--    <link rel="stylesheet" href="assets/css/contact.css">-->
    <!--[if IE 8]>
    <link rel="stylesheet" href="assets/css/contact-ie8.css">
    <![endif]-->
<!--    <link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="admin/styles/backstage.css">-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="icon" href="assets/images/logo.gif" type="image/x-icon"/>
    <link rel="stylesheet" href="assets/css/userCenter.css">
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
            <li><a  class="selected" href="javascript:void(0)">用户中心</a></li>
        </ul>
        <h1 class="header-h1">平邦保险</h1>
    </div>
</div>
<form action="doLogin.php" class="form container" id="form" method="post">
    <h2>用户中心</h2>
    <div class="form-left">
        <h3 style="display: inline-block">欢迎您，<?php echo $_SESSION['userName']?></h3>
        <a href="doAction.php?act=loginOut">注销登录</a>
        <?php
        if($rows){
        ?>
            <h3 style="margin: 40px 0 40px 292px;">预约列表</h3>
            <table class="table table-striped table-hover table-bordered" cellspacing="0" cellpadding="0">
            <thead>
            <tr>
                <th>编号</th>
                <th>产品名</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1; foreach($rows as $row){
                ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row["proName"] ?></td>
                    <td align="center"><input type="button" value="查看" class="btn" onclick="viewDetail(<?php echo $row["proId"];?>)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="取消预约" class="btn" onclick="cancelProOrder(<?php echo $row["id"];?>)"></td>
                </tr>
            <?php $i++; }
            if($totalRows>$pageSize){
                ?>
                <tr><td colspan="8"><?php echo showPage($page,$totalPage);?></td></tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <?php
        }else{
            echo "<p style='margin-top:110px;'>暂无产品预约，请预约相关产品</p>";
        }
        ?>
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
<!--        <div class="right">
            <h2>订阅我们</h2><br>
            <input class="email" type="email" placeholder="你的邮箱">
            <input type="button" value="订阅">
        </div>
-->    </div>
</div>
<script type="text/javascript">
    function viewDetail(id){
        window.location="pro.php#cont-"+id;
    }
    function cancelProOrder(id){
        if(window.confirm("您确定要取消吗？")){
            window.location="doAction.php?act=cancelProOrder&id="+id;
        }
    }
</script>
</body>
</html>