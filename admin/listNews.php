<?php /*
require_once '../include.php';
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
$sql="select * from imooc_cate";
$totalRows=getResultNum($sql);
$pageSize=2;
$totalPage=ceil($totalRows/$pageSize);
if($page<1||$page==null||!is_numeric($page))$page=1;
if($page>=$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select id,cName from imooc_cate  order by id asc limit {$offset},{$pageSize}";
$rows=fetchAll($sql);
if(!$rows){
	alertMes("sorry,没有分类,请添加!","addCate.php");
	exit;
}
*/
require_once "../include.php";
//$rows = getAllNews();
$sql="select * from news";
$rows=fetchAll($sql);
if(!$rows){
    alertMes("sorry,没有分类,请添加!","addNews.php");
    exit;
}
$rows = getPage("news");
if(empty($rows)){
    alertMes("sorry,没有新闻,请添加!","addNews.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/backstage.css">
    <title>新闻编辑</title>
</head>
<body>
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
        <?php $i=1; foreach($rows as $row):

            ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row["title"] ?></td>
                <td><?php echo $row["description"] ?></td>
                <td><?php echo $row["pubTime"] ?></td>
                <td align="center"><input type="button" value="修改" class="btn" onclick="editNews(<?php echo $row["id"];?>)"><input type="button" value="删除" class="btn" onclick="delNews(<?php echo $row["id"];?>)"></td>
            </tr>
            <?php $i++; endforeach;?>
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
<script type="text/javascript">
    function editNews(id){
        window.location="editNews.php?id="+id;
    }
    function delNews(id){
        if(window.confirm("您确定要删除吗？")){
            window.location="doNewsAction.php?act=delNews&id="+id;
        }
    }
    function addNews(){
        window.location="addNews.php";
    }
</script>
</body>
</html>