<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/8
 * Time: 17:15
 */
//require_once '../include.php';
function alertMes($mes,$url){
    echo "<script>alert('$mes');window.location = '$url'</script>";
}