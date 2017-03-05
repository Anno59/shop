<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/13
 * Time: 11:19
 */
require_once "../include.php";
checkLogined();
$act = $_GET['act'];
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if($act=='logout'){
    logout();
}else if($act == 'addAdmin'){
    addAdmin();
}else if($act == 'editAdmin'){
    editAdmin($id);
}else if($act == 'delAdmin'){
    delAdmin($id);
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
