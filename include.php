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
//set_include_path(".".PATH_SEPARATOR.ROOT.DIRECTORY_SEPARATOR."lib".PATH_SEPARATOR.ROOT.DIRECTORY_SEPARATOR.'core'.PATH_SEPARATOR.ROOT.DIRECTORY_SEPARATOR.'configs');
require_once 'configs.php';
require_once 'image.func.php';
require_once 'common.func.php';
require_once 'mysql.func.php';
require_once 'page.func.php';
require_once 'string.func.php';
require_once 'upload.func.php';
require_once 'admin.inc.php';
require_once 'news.inc.php';
require_once 'user.inc.php';
require_once 'frontUser.php';
require_once 'pro.inc.php';