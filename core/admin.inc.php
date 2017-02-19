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
    if(insert("imooc_admin", $arr)){
        alertMes("添加成功", 'listAdmin.php');
    }else{
        alertMes("添加失败", 'listAdmin.php');
    }
}

function logout(){
    $_SESSION = array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-1);
    }
    session_destroy();
    alertMes("退出成功","login.php");
}

function getAllAdmin(){
    $sql = "select * from imooc_admin";
    $rows = fetchAll($sql);
    return $rows;
}

function editAdmin($id){
    $arr = $_POST;
    if(update("imooc_admin", $arr,"id={$id}")){
        alertMes("编辑成功", 'listAdmin.php');
    }else{
        alertMes("编辑失败", 'listAdmin.php');
    }
}

function delAdmin($id){
    if(delete("imooc_admin","id={$id}")){
        alertMes("删除成功", 'listAdmin.php');
    }else{
        alertMes("删除失败", 'listAdmin.php');
    }
}

