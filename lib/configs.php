<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/8
 * Time: 17:54
 */
define('HOST',"localhost");
define('PWD','123');
define('USERNAME','root');
define('DBNAME','insurance');
define('DBCHARSET','utf8');
function messageTips($mes,$url){
    echo "<script>alert('$mes');window.location = '$url'</script>";
}