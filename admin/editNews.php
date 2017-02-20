<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/20
 * Time: 18:15
 */

require_once "../include.php";
$id=$_REQUEST["id"];
$sql = "select * from news where id='$id'";
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
    <title>新闻编辑</title>
</head>
<body>
<h3>编辑新闻</h3>
<div class="container">
    <form action="doNewsAction.php?act=editNews&id=<?php echo $id;?>" method="post">
        <div class="form-group">
            <label>新闻标题</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail3" placeholder="标题" value="<?php echo $row["title"]?>">
        </div>
        <div class="form-group">
            <label>新闻概要</label>
            <input type="text" name="description" class="form-control" id="exampleInputPassword3" placeholder="概要" value="<?php echo $row["description"]?>">
        </div>
        <input type="hidden" name="pubTime" value="<?php date_default_timezone_set('PRC');echo date('Y-m-d H:i:s');?>">
        <div class="form-group">
            <label>新闻内容</label>
            <textarea style="resize: none" class="form-control" name="content" id="content" rows="10" placeholder="内容"><?php echo $row["content"]?></textarea>
        </div>
        <button type="submit" class="btn btn-default">完成</button>
    </form>
</div>
</body>
</html>
