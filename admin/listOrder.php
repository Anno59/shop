<?php
/**
 * Created by PhpStorm.
 * User: 372025284@qq.com
 * Date: 2017.02.26
 * Time: 13:54
 */
require_once "../include.php";
$sql="select * from order_pro";
$rows=fetchAll($sql);
if(!$rows){
//    alertMes("sorry,没有分类,请添加!","addOrder.php");
    exit;
}
$rows = getPage("order_pro");
if(empty($rows)){
//    alertMes("sorry,请添加!","addOrder.php");
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
    <title>编辑产品预约</title>
</head>
<body>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input type="button" value="添&nbsp;&nbsp;加" class="add"  onclick="addOrder()">
        </div>

    </div<!--表格-->
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
        <?php $i=1; foreach($rows as $row):

            ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row["username"] ?></td>
                <td><?php echo $row["proName"] ?></td>
                <td><?php echo $row["proId"] ?></td>
                <td align="center"><input type="button" value="删除" class="btn" onclick="delProOrder(<?php echo $row["id"];?>)"></td>
            </tr>
            <?php $i++; endforeach;?>
        <?php
        if($totalRows>$pageSize){
            ?>
            <tr><td colspan="8"><?php echo showPage($page,$totalPage);?></td></tr>
            <tr><td colspan="4"><?php echo showPage($page,$totalPage);?></td></tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    function delProOrder(id){
        if(window.confirm("您确定要删除吗？")){
            window.location="doPro.php?act=delOrder&id="+id;
        }
    }
</script>
</body>
</html>