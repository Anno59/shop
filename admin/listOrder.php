<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017.02.26
 * Time: 13:54
 */
require_once "../include.php";
checkLogined();
$rows = getPage("order_pro");
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
    <title>编辑产品预约</title>
</head>
<body>
<h3>产品预约列表</h3>
<?php if(empty($rows)) {
    echo "<p style='text-align: center;margin-top:50px;font-size: 18px;'>暂无产品预约</p>";
}else{
?>
<div class="details">
    <table class="table table-striped table-hover table-bordered" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th>编号</th>
            <th>用户名</th>
            <th>产品名</th>
            <th>产品编号</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($rows as $row):

            ?>
            <tr>
                <td><?php echo $num?></td>
                <td><?php echo $row["username"] ?></td>
                <td><?php echo $row["proName"] ?></td>
                <td><?php echo $row["proId"] ?></td>
                <td align="center"><input type="button" value="删除" class="btn" onclick="delProOrder(<?php echo $row["id"];?>)"></td>
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
    function delProOrder(id){
        if(window.confirm("您确定要删除吗？")){
            window.location="doPro.php?act=delOrder&id="+id;
        }
    }
</script>
</body>
</html>