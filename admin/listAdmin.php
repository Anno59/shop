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
//$rows = getAllAdmin();
$sql="select * from imooc_Admin";
$rows=fetchAll($sql);
if(!$rows){
    alertMes("sorry,没有分类,请添加!","addAdmin.php");
    exit;
}
$rows = getPage("imooc_admin");
if(empty($rows)){
    alertMes("sorry,没有管理员,请添加!","addAdmin.php");
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
    <title>添加管理员</title>
</head>
<body>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input type="button" value="添&nbsp;&nbsp;加" class="add"  onclick="addAdmin()">
        </div>

    </div<!--表格-->
    <table class="table table-striped table-hover table-bordered" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th>编号</th>
            <th>管理员名称</th>
            <th>管理员邮箱</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($rows as $row):

         ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row["username"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td align="center"><input type="button" value="修改" class="btn" onclick="editAdmin(<?php echo $row["id"];?>)"><input type="button" value="删除" class="btn" onclick="delAdmin(<?php echo $row["id"];?>)"></td>
            </tr>
        <?php $i++; endforeach;?>
        <?php
            if($totalRows>$pageSize){
        ?>
                <tr><td colspan="4"><?php echo showPage($page,$totalPage);?></td></tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    function editAdmin(id){
        window.location="editAdmin.php?id="+id;
    }
    function delAdmin(id){
        if(window.confirm("您确定要删除吗？删除之后不能恢复哦！！！")){
            window.location="doAdminAction.php?act=delAdmin&id="+id;
        }
    }
    function addAdmin(){
        window.location="addAdmin.php";
    }
</script>
</body>
</html>