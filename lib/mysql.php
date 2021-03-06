<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/8
 * Time: 17:16
 */

/**
 * 连接数据库
 */
function connect(){
    $link = mysqli_connect(HOST,USERNAME,PWD,DBNAME) or die("数据库连接失败:".mysqli_error($link));
    mysqli_set_charset($link, DBCHARSET);
    return $link;
}

/**
 * 插入数据
 */
function insert($table,$array){
    $link = connect();
    $keys = join(',', array_keys($array));
    $values = "'".join("','",array_values($array))."'";
    mysqli_query($link, "insert $table ($keys) values ($values)");
    return mysqli_insert_id($link);
}

function selectOrder($table,$username,$proId){
    $link = connect();
    $result = mysqli_query($link,"select * from $table where username='$username' and proId=$proId");
    if($result){
        return mysqli_affected_rows($link);
    }else{
        return null;
    }
}

/**
 * 删除数据
 */
function delete($table,$where=null){
    $link = connect();
    $sql = "delete from {$table} ".($where==null?null:'where '.$where);
    mysqli_query($link,$sql);
    return mysqli_affected_rows($link);
}

/**
 * 修改数据
 */
function update($table,$array,$where=null){
    $link = connect();
    $str=null;
    foreach ($array as $key => $val){
        if($str==null){
            $sep = '';
        }else{
            $sep = ',';
        }
        $str.=$sep.$key."='".$val."'";
    }
    $sql_update = "update $table set $str ".($where==null?null:" where ".$where);
    $result = mysqli_query($link,$sql_update);
    if($result){
        return mysqli_affected_rows($link);
    }else{
        return false;
    }
}


/**
 * 得到一条数据
 */
function fetchOne($sql,$result_type=MYSQLI_ASSOC){
    $link = connect();
    $query = mysqli_query($link,$sql);
    $row = @mysqli_fetch_array($query,$result_type);
    return $row;
}

/**
 * 得到所有数据
 */
function fetchAll($sql,$result_type=MYSQLI_ASSOC){
    $link = connect();
    $result=mysqli_query($link,$sql);
    $rows = array();
    while(@$row=mysqli_fetch_array($result,$result_type)){
        $rows[]=$row;
    }
    return $rows;
}

/**
 * 得到条数
 */
function getResultNum($sql){
    $link = connect();
    $result=mysqli_query($link,$sql);
    return mysqli_num_rows($result);
}











