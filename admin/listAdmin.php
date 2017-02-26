<?php
require_once "../include.php";
checkLogined();
$rows = getPage("imooc_admin");
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
    <title>添加管理员</title>
</head>
<body>
<h3>管理员列表</h3>
<?php if(empty($rows)) {
    echo "<p style='text-align: center;margin-top:50px;font-size: 18px;'>暂无管理员，请添加管理员</p>";
}else{
?>
<div class="details">
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
        <?php foreach($rows as $row):

         ?>
            <tr>
                <td><?php echo $num?></td>
                <td><?php echo $row["username"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td align="center"><input type="button" value="修改" class="btn" onclick="editAdmin(<?php echo $row["id"];?>)">&nbsp;&nbsp;&nbsp;<input type="button" value="删除" class="btn" onclick="delAdmin(<?php echo $row["id"];?>)"></td>
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
    function editAdmin(id){
        window.location="editAdmin.php?id="+id;
    }
    function delAdmin(id){
        if(window.confirm("您确定要删除吗？")){
            window.location="doAdminAction.php?act=delAdmin&id="+id;
        }
    }
    function addAdmin(){
        window.location="addAdmin.php";
    }
</script>
</body>
</html>