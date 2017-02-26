<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/25
 * Time: 18:32
 */
function checkPro($sql){
    return fetchOne($sql);
}

function addPro(){
    $arr=$_POST;
    if(insert("product", $arr)){
        alertMes("添加成功", 'addPro.php');
    }else{
        alertMes("添加失败", 'addPro.php');
    }
}

function getAllPro(){
    $sql = "select * from Pro";
    $rows = fetchAll($sql);
    return $rows;
}

function editPro($id){
    $arr = $_POST;
    if(update("product", $arr,"id={$id}")){
        alertMes("编辑成功", 'listPro.php');
    }else{
        alertMes("编辑失败", 'listPro.php');
    }
}

function delPro($id){
    if(delete("product","id={$id}")){
        alertMes("删除成功", 'listPro.php');
    }else{
        alertMes("删除失败", 'listPro.php');
    }
}

function delOrder($id){
    if(delete("order_pro","id={$id}")){
        alertMes("删除成功", 'listOrder.php');
    }else{
        alertMes("删除失败", 'listOrder.php');
    }
}