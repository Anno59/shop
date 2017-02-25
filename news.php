<?php
require_once "include.php";
$sql = "select * from news";
$rows = fetchAll($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>news</title>
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/news.css">
    <!--[if IE 8]>
    <link rel="stylesheet" href="assets/css/news-ie8.css">
    <![endif]-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="icon" href="assets/images/logo.gif" type="image/x-icon"/>
    <script src="assets/js/backtotop.js"></script>
</head>
<body>
<div class="header">
    <div class="bg"></div>
    <div class="container">
        <ul class="nav">
            <li><a href="index.php">首页</a></li>
            <li><a href="about.php">关于我们</a></li>
            <li><a  class="selected" href="javascript:void(0)">新闻动态</a></li>
            <li><a href="pro.php">产品列表</a></li>
            <li><a href="userCenter.php">用户中心</a></li>
        </ul>
        <h1 class="header-h1">农业家园</h1>
    </div>
</div>
<div class="section1 container">
    <h2>公司公告</h2>
    <div class="sec1">
        <img src="assets/images/1.png" alt="">
        <h4>求贤纳仕</h4>
        <p>公司广招贤才，欢迎广大有意者详询。公司广招贤才，欢迎广大有意者详询。公司广招贤才，欢迎广大有意者详询。</p>
    </div>
    <div class="sec2">
        <img src="assets/images/2.png" alt="">
        <h4>告知义务</h4>
        <p>如果您因故意或者重大过失未履行规定的如实告知义务，足以影响我们决定是否同意承保或者提高保险费率，我们有权解除合同。</p>
    </div>
    <div class="sec3">
        <img src="assets/images/3.png" alt="">
        <h4>安全承诺</h4>
        <p>我们严格遵守现行的关于个人信息，保护您提供给我们的个人信息、信息和隐私不受到非法的泄露或披露给未获授权的第三方。请您放心。</p>
    </div>
    <div class="sec4">
        <img src="assets/images/4.png" alt="">
        <h4>投诉渠道</h4>
        <p>如果您在购买产品的过程中，如发现本公司人员有违法违规行为，或认为自身权益受到侵犯，请您保留相关证据并向本公司投诉。</p>
    </div>
</div>
<div class="section2 container" id="newsRec">
    <h2>新闻动态</h2>
    <?php
    $i=1;
    foreach($rows as $row){
    ?>
    <div class="sec">
        <span><?php echo $i;?></span>
        <a href="newsDetail.php?id=<?php echo $row['id']?>">
            <h3><?php echo $row['title']?></h3>
            <p><?php echo $row['description']?></p>
            <p class="pubTime"><?php echo $row['pubTime']?></p>
        </a>
    </div>
<!--    <div class="sec">
        <span>2</span>
        <a href="#">
            <h3>含农业产品受核电工程追捧</h3>
            <p>积极对接市场，以客户需求为导向，充分发挥产线优势。该高端农业的成功研发，对于进一步打开海外市场将起到积极作用。</p>
        </a>
    </div>
    <div class="sec">
        <span>3</span>
        <a href="#">
            <h3>战略品种直供率达100%</h3>
            <p>积极对接市场，以客户需求为导向，充分发挥产线优势。该高端农业的成功研发，对于进一步打开海外市场将起到积极作用。</p>
        </a>
    </div>
    <div class="sec">
        <span>4</span>
        <a href="#">
            <h3>签署资源战略合作协议</h3>
            <p>积极对接市场，以客户需求为导向，充分发挥产线优势。该高端农业的成功研发，对于进一步打开海外市场将起到积极作用。</p>
        </a>
    </div>-->
    <?php $i++;}?>
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