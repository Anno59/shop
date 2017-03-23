<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017.02.21
 * Time: 21:37
 */

function checkUser($sql){
    return fetchOne($sql);
}

function addUser(){
    $arr=$_POST;
    if(insert("user", $arr)){
        messageTips("添加成功", 'addUser.php');
    }else{
        messageTips("添加失败", 'addUser.php');
    }
}

function getAllUser(){
    $sql = "select * from user";
    $rows = fetchAll($sql);
    return $rows;
}

function editUser($id){
    $arr = $_POST;
    if(update("user", $arr,"id={$id}")){
        messageTips("编辑成功", 'listUser.php');
    }else{
        messageTips("编辑失败", 'listUser.php');
    }
}

function delUser($id){
    if(delete("user","id={$id}")){
        messageTips("删除成功", 'listUser.php');
    }else{
        messageTips("删除失败", 'listUser.php');
    }
}
