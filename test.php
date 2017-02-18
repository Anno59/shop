<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/9
 * Time: 12:57
 */

session_start();
setcookie("name",'sss',time()+60,"/");
$_SESSION['name']='sss';
var_dump($_SESSION);
var_dump($_COOKIE);
