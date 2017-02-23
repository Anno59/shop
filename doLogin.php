<?php
/**
 * Created by PhpStorm.
 * User: 372025284@qq.com
 * Date: 2017.02.22
 * Time: 0:32
 */
require_once 'include.php';
$username = $_POST['username'];
$password = $_POST['password'];
@$autoFlag = $_POST['autoFlag'];
$sql = "select * from user where username='{$username}' and password='{$password}'";
$row = checkUser($sql);
//var_dump($row['username']);
if($row){
    if($autoFlag){
        setcookie('userName',$row['username'],time()+3600*2);
        setcookie('userId',$row['id'],time()+3600*2);
    }
    $_SESSION['userName'] = $row['username'];
    $_SESSION['userId'] = $row['id'];

    alertMes('登录成功','userCenter.php');
}else{
    alertMes('登录失败，重新登录','login.php');
}