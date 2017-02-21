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
var_dump($sql);
$row = checkUser($sql);
//var_dump($row['username']);
if($row){
    if($autoFlag){
        setcookie('userName',$row['username'],time()+7*3600*24);
        setcookie('userId',$row['id'],time()+7*3600*24);
    }
    $_SESSION['userName'] = $row['username'];
    $_SESSION['userId'] = $row['id'];

    alertMes("欢迎您，".$row['username'],'index.php');
}else{
    alertMes('登录失败，重新登录','contact.php');
}