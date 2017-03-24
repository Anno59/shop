<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/8
 * Time: 17:30
 */
header("content-type:text/html;charset='utf-8");
session_start();
require_once '/lib/configs.php';
require_once '/lib/mysql.php';
require_once '/lib/navigate.php';
require_once '/lib/admin.fun.php';
require_once '/lib/news.fun.php';
require_once '/lib/backUser.fun.php';
require_once '/lib/frontUser.fun.php';
require_once '/lib/pro.fun.php';
