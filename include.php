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
$root = set_include_path(".".PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.ROOT."/configs".PATH_SEPARATOR.get_include_path());
require_once 'configs.php';
require_once 'mysql.func.php';
require_once 'page.func.php';
require_once 'admin.inc.php';
require_once 'news.inc.php';
require_once 'user.inc.php';
require_once 'frontUser.php';
require_once 'pro.inc.php';
function alertMes($mes,$url){
    echo "<script>alert('$mes');window.location = '$url'</script>";
}