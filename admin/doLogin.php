<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/8
 * Time: 17:46
 */
require_once '../include.php';
$username = $_POST['username'];
$password = $_POST['password'];
@$autoFlag = $_POST['autoFlag'];
$sql = "select * from admin where username='{$username}' and password='{$password}'";
$row = checkAdmin($sql);
if($row){
    if($autoFlag){
        setcookie('adminName',$row['username'],time()+3600*2);
        setcookie('adminId',$row['id'],time()+3600*2);
    }
    $_SESSION['adminName'] = $row['username'];
    $_SESSION['adminId'] = $row['id'];

    alertMes('登录成功','index.php');
}else{
    alertMes('登录失败，重新登录','login.php');
}