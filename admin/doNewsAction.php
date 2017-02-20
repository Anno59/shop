<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/20
 * Time: 17:27
 */
require_once "../include.php";
$act = $_GET['act'];
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if($act=='addNews'){
    addNews();
}else if($act == 'editNews'){
    editNews($id);
}
else if($act == 'delNews'){
    delNews($id);
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
