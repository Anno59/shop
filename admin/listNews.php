<?php
require_once "../include.php";
checkLogined();
$rows = getPage("news");
$num = $_GET['num'];
if(empty($num)){
    $num=1;
}
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
    <title>新闻编辑</title>
</head>
<body>
<h3>新闻列表</h3>
<?php if(empty($rows)) {
    echo "<p style='text-align: center;margin-top:50px;font-size: 18px;'>暂无新闻，请添加新闻</p>";
}else{
?>
<div class="details">
    <table class="table table-striped table-hover table-bordered" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th>编号</th>
            <th>新闻标题</th>
            <th>新闻概要</th>
            <th>发布时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($rows as $row):

            ?>
            <tr>
                <td><?php echo $num?></td>
                <td><?php echo $row["title"] ?></td>
                <td><?php echo $row["description"] ?></td>
                <td><?php echo $row["pubTime"] ?></td>
                <td align="center"><input type="button" value="修改" class="btn" onclick="editNews(<?php echo $row["id"];?>)">&nbsp;&nbsp;&nbsp;<input type="button" value="删除" class="btn" onclick="delNews(<?php echo $row["id"];?>)"></td>
            </tr>
            <?php $num++; endforeach;?>
        <?php
        if($totalRows>$pageSize){
            ?>
            <tr><td colspan="8"><?php echo showPage($page,$totalPage);?></td></tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
<?php }?>
<script type="text/javascript">
    function editNews(id){
        window.location="editNews.php?id="+id;
    }
    function delNews(id){
        if(window.confirm("您确定要删除吗？")){
            window.location="doNews.php?act=delNews&id="+id;
        }
    }
    function addNews(){
        window.location="addNews.php";
    }
</script>
</body>
</html>