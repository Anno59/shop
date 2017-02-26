<?php
/**
 * Created by PhpStorm.
 * User: 372025284@qq.com
 * Date: 2017.02.21
 * Time: 21:35
 */
require_once "../include.php";
checkLogined();
$act = $_GET['act'];
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if($act == 'addUser'){
    addUser();
}else if($act == 'editUser'){
    editUser($id);
}else if($act == 'delUser'){
    delUser($id);
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
