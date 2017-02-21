<?php
/**
 * Created by PhpStorm.
 * User: 372025284@qq.com
 * Date: 2017.02.21
 * Time: 21:37
 */

function checkUser($sql){
    return fetchOne($sql);
}

function addUser(){
    $arr=$_POST;
    if(insert("user", $arr)){
        alertMes("添加成功", 'contact.php');
    }else{
        alertMes("添加失败", 'contact.php');
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
        alertMes("编辑成功", 'listUser.php');
    }else{
        alertMes("编辑失败", 'listUser.php');
    }
}

function delUser($id){
    if(delete("user","id={$id}")){
        alertMes("删除成功", 'listUser.php');
    }else{
        alertMes("删除失败", 'listUser.php');
    }
}
