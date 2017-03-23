<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/8
 * Time: 17:30
 */
header("content-type:text/html;charset='utf-8");
session_start();
define('ROOT',dirname(__FILE__));
set_include_path(".".PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.get_include_path());
require_once 'configs.php';
require_once 'mysql.php';
require_once 'navigate.php';
require_once 'admin.fun.php';
require_once 'news.fun.php';
require_once 'backUser.fun.php';
require_once 'frontUser.fun.php';
require_once 'pro.fun.php';
function messageTips($mes,$url){
    echo "<script>alert('$mes');window.location = '$url'</script>";
}