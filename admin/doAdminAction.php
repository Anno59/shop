<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/13
 * Time: 11:19
 */
require_once "../include.php";
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

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
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
