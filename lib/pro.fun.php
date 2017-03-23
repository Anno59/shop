<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/25
 * Time: 18:32
 */

function addPro(){
    $arr=$_POST;
    if(insert("product", $arr)){
        messageTips("添加成功", 'addPro.php');
    }else{
        messageTips("添加失败", 'addPro.php');
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
        messageTips("编辑成功", 'listPro.php');
    }else{
        messageTips("编辑失败", 'listPro.php');
    }
}

function delPro($id){
    if(delete("product","id={$id}")){
        messageTips("删除成功", 'listPro.php');
    }else{
        messageTips("删除失败", 'listPro.php');
    }
}

function delOrder($id){
    if(delete("order_pro","id={$id}")){
        messageTips("删除成功", 'listOrder.php');
    }else{
        messageTips("删除失败", 'listOrder.php');
    }
}