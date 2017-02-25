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
$sql="select * from product";
$rows=fetchAll($sql);
if(!$rows){
    alertMes("sorry,没有分类,请添加!","addPro.php");
    exit;
}
$rows = getPage("product");
if(empty($rows)){
    alertMes("sorry,没有新闻,请添加!","addPro.php");
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
    <title>保险编辑</title>
</head>
<body>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input type="button" value="添&nbsp;&nbsp;加" class="add"  onclick="addPro()">
        </div>

    </div<!--表格-->
    <table class="table table-striped table-hover table-bordered" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th>编号</th>
            <th>保险名</th>
            <th>保险概要</th>
            <th>保险价格</th>
            <th>保险优惠价</th>
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
                <td><?php echo $row["prePrice"] ?></td>
                <td><?php echo $row["discountPrice"] ?></td>
                <td align="center"><input type="button" value="修改" class="btn" onclick="editPro(<?php echo $row["id"];?>)"><input type="button" value="删除" class="btn" onclick="delPro(<?php echo $row["id"];?>)"></td>
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
    function editPro(id){
        window.location="editPro.php?id="+id;
    }
    function delPro(id){
        if(window.confirm("您确定要删除吗？删除之后不能恢复哦！！！")){
            window.location="doPro.php?act=delPro&id="+id;
        }
    }
    function addPro(){
        window.location="addPro.php";
    }
</script>
</body>
</html>