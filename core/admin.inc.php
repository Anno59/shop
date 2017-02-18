<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/9
 * Time: 10:54
 */
function checkAdmin($sql){
    return fetchOne($sql);
}
function checkLogined(){
    if(@$_SESSION['adminId']==''&&@$_COOKIE['adminId']==''){
        alertMes("请先登录","login.php");
    }
}

function addAdmin(){
    $arr=$_POST;
    if(insert("imooc_admin",$arr)){
        return "添加成功!<br/><a href='addAdmin.php'>继续添加</a>|<a href='listAdmin.php'>查看管理员列表</a>";
    }else{
        return "添加失败!<br/><a href='addAdmin.php'>重新添加</a>";
    }
}

function logout(){
    $_SESSION = array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-1);
    }
    session_destroy();
//    alertMes("退出成功","login.php");
}