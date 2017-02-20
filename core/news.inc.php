<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/20
 * Time: 17:34
 */
function addNews(){
    $arr=$_POST;
    if(insert("news", $arr)){
        alertMes("添加成功", 'listNews.php');
    }else{
        alertMes("添加失败", 'listNews.php');
    }
}

function delNews($id){
    if(delete("news","id=$id")){
        alertMes("删除成功", "listNews.php");
    }else{
        alertMes("删除失败", "listNews.php");
    }
}

function editNews($id){
    $arr = $_POST;
    if(update("news", $arr ,"id=$id")){
        alertMes("编辑成功", "listNews.php");
    }else{
        alertMes("编辑失败", "listNews.php");
    }
}