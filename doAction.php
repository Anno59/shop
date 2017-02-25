<?php
/**
 * Created by PhpStorm.
 * User: 372025284@qq.com
 * Date: 2017.02.22
 * Time: 0:02
 */
require_once "include.php";
$act = $_GET['act'];
//var_dump($_POST);
if($act == 'register'){
    frontAddUser();
}else if($act == 'login') {
    header("Location:doLogin.php");
}else if($act == 'loginOut'){
    loginOut();
}else if($act == 'delUser'){
//    delUser();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Insert title here</title>
</head>
<body>
<?php
if(isset($mes))
//    echo $mes;
?>
</body>
</html>