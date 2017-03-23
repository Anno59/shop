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
        messageTips("请先登录","login.php");
    }
}

function addAdmin(){
    $arr=$_POST;
    if(insert("admin", $arr)){
        messageTips("添加成功", 'addAdmin.php');
    }else{
        messageTips("添加失败", 'addAdmin.php');
    }
}

function logout(){
    $_SESSION = array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-1);
    }
    messageTips("退出成功","login.php");
}

function getAllAdmin(){
    $sql = "select * from admin";
    $rows = fetchAll($sql);
    return $rows;
}

function editAdmin($id){
    $arr = $_POST;
    if(update("admin", $arr,"id={$id}")){
        messageTips("编辑成功", 'listAdmin.php');
    }else{
        messageTips("编辑失败", 'listAdmin.php');
    }
}

function delAdmin($id){
    if(delete("admin","id={$id}")){
        messageTips("删除成功", 'listAdmin.php');
    }else{
        messageTips("删除失败", 'listAdmin.php');
    }
}

