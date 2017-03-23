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
        messageTips("添加成功", 'addNews.php');
    }else{
        messageTips("添加失败", 'addNews.php');
    }
}

function delNews($id){
    if(delete("news","id=$id")){
        messageTips("删除成功", "listNews.php");
    }else{
        messageTips("删除失败", "listNews.php");
    }
}

function editNews($id){
    $arr = $_POST;
    if(update("news", $arr ,"id=$id")){
        messageTips("编辑成功", "listNews.php");
    }else{
        messageTips("编辑失败", "listNews.php");
    }
}