<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017.02.22
 * Time: 0:02
 */
require_once "include.php";
$act = $_GET['act'];
$id = $_GET['id'];
if($act == 'register'){
    frontAddUser();
}else if($act == 'login') {
    header("Location:doLogin.php");
}else if($act == 'loginOut'){
    frontLoginOut();
}else if($act == 'order'){
    checkUserLogined();
    orderPro();
}else if($act == 'cancelProOrder'){
    cancelProOrder($id);
}
?>
