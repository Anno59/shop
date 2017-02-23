<?php
/**
 * Created by PhpStorm.
 * User: 372025284@qq.com
 * Date: 2017.02.23
 * Time: 22:40
 */
function checkUserLogined(){
    if(@$_SESSION['userId']==''&&@$_COOKIE['userId']==''){
        alertMes("请先登录","login.php");
    }
}

function frontAddUser(){
    $arr=$_POST;
    if(insert("user", $arr)){
        alertMes("注册成功,请登录", 'login.php');
    }else{
        alertMes("注册失败", 'login.php');
    }
}
function loginOut(){
    $_SESSION = array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-1);
    }
    session_destroy();
    alertMes("退出成功","login.php");
}