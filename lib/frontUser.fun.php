<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017.02.23
 * Time: 22:40
 */
function checkUserLogined(){
    if(@$_SESSION['userId']==''&&$_COOKIE['userId']==''){
        messageTips("请先登录","login.php");
        exit;
    }
}

function frontAddUser(){
    $arr=$_POST;
    if(insert("user", $arr)){
        messageTips("注册成功,请登录", 'login.php');
    }else{
        messageTips("注册失败", 'register.php#form');
    }
}

function frontLoginOut(){
    $_SESSION = array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-1);
    }
    session_destroy();
    messageTips("退出成功","login.php");
}

function orderPro(){
    $arr=$_POST;
    if(selectOrder("order_pro",$arr["username"],$arr["proId"])){
        messageTips("该产品已预约，请继续预约其它产品","pro.php");
    }else{
        insert("order_pro",$arr);
        messageTips("预约成功","pro.php");
    }
}

function cancelProOrder($id){
    if(delete("order_pro","id={$id}")){
        messageTips("取消成功", 'userCenter.php');
    }else{
        messageTips("取消失败", 'userCenter.php');
    }
}