<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/25
 * Time: 18:29
 */
require_once "../include.php";
checkLogined();
$act = $_GET['act'];
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if($act == 'addPro'){
    addPro();
}else if($act == 'editPro'){
    editPro($id);
}else if($act == 'delPro'){
    delPro($id);
}else if($act == 'delOrder') {
    delOrder($id);
}
?>
