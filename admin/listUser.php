<?php
/**
 * Created by PhpStorm.
 * User: 372025284@qq.com
 * Date: 2017.02.21
 * Time: 21:13
 */
require_once "../include.php";
checkLogined();
$rows = getPage("user");
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
    <title>添加用户</title>
</head>
<body>
<h3>用户列表</h3>
<?php if(empty($rows)) {
    echo "<p style='text-align: center;margin-top:50px;font-size: 18px;'>暂无用户，请添加用户</p>";
}else{
?>
<div class="details">
    <table class="table table-striped table-hover table-bordered" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th>编号</th>
            <th>用户名称</th>
            <th>密码</th>
            <th>姓名</th>
            <th>身份证号</th>
            <th>联系电话</th>
            <th>邮箱</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($rows as $row):
            ?>
            <tr class="data">
                <td><?php echo $num?></td>
                <td><?php echo $row["username"] ?></td>
                <td class="pwd"><?php echo $row["password"] ?></td>
                <td class="realname"><?php echo $row["realname"] ?></td>
                <td class="idnum"><?php echo $row["idnumber"] ?></td>
                <td class="tel"><?php echo $row["tel"] ?></td>
                <td class="email"><?php echo $row["email"] ?></td>
                <td align="center"><input type="button" value="删除" class="btn" onclick="delUser(<?php echo $row["id"];?>)"></td>
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

    function delUser(id){
        if(window.confirm("您确定要删除吗？")){
            window.location="doUser.php?act=delUser&id="+id;
        }
    }

    function addUser(){
        window.location="addUser.php";
    }

    /*用户信息加密*/
    function toHide(pwd,realname,idnum,tel,email) {
        var pwd=$('.data .'+pwd+'.data .'+realname+'.data .'+idnum+'.data .'+tel+'.data .'+email);
        pwd.each(function () {
            $(this).text($(this).text().replace(/./g,'*'));
        })
    }

    $(function () {
        toHide("pwd,","realname,","idnum,","tel,","email,");
    })
</script>
</body>
</html>