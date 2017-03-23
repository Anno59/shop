<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017.02.21
 * Time: 21:35
 */
require_once "../include.php";
checkLogined();
$act = $_GET['act'];
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if($act == 'addUser'){
    addUser();
}else if($act == 'editUser'){
    editUser($id);
}else if($act == 'delUser'){
    delUser($id);
}
?>
