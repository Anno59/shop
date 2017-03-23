<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017.02.22
 * Time: 0:32
 */
require_once 'include.php';
$username = $_POST['username'];
$password = $_POST['password'];
@$autoFlag = $_POST['autoFlag'];
$sql = "select * from user where username='{$username}' and password='{$password}'";
$row = checkUser($sql);
if($row){
    $_SESSION['userName'] = $row['username'];
    $_SESSION['userId'] = $row['id'];

    messageTips('登录成功','userCenter.php');
}else{
    messageTips('登录失败，重新登录','login.php#form');
}