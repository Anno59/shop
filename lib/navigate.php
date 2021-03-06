<?php
/**
 * Created by PhpStorm.
 * User: yubolin
 * Date: 2017/2/8
 * Time: 17:16
 */

function getPage($table){
    global $i,$totalRows,$pageSize,$totalPage,$page;
    $i=1;
    $sql = "select * from $table ";
    $totalRows = getResultNum($sql);
    $pageSize =4;
    $totalPage = ceil($totalRows/$pageSize);
    $page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
    $offset=($page-1) * $pageSize;
    $sql = "select * from $table limit $offset,$pageSize";
    $rows = fetchAll($sql);
    return $rows;
}

function showPage($page,$totalPage){
    global $pageSize;
    $url = $_SERVER['PHP_SELF'];
    $index=$page==1?"首页":"<a href='$url?page=1&num=1'>首页</a>";
    $last=$page==$totalPage?"尾页":"<a href='$url?page=$totalPage&num=".(($totalPage-1)*$pageSize+1)."'>尾页</a>";
    $prev=$page==1?"上一页":"<a href='$url?page=".($page-1)."&num=".(($page-2)*$pageSize+1)."'>上一页</a>";
    $next=$page==$totalPage?"下一页":"<a href='$url?page=".($page+1)."&num=".($page*$pageSize+1)."'>下一页</a>";
    $str = "总共 {$totalPage} 页，当前 {$page} 页";
    $p='';
    for($i = 1;$i<=$totalPage;$i++){
        if($page == $i){
            $p.="[$i]";
        }else{
            $p.="<a href='$url?page=$i&num=".(($i-1)*$pageSize+1)."'> [$i] </a>";
        }
    }
    return $str."&nbsp;&nbsp;&nbsp;".$index."&nbsp;&nbsp;&nbsp;".$prev."&nbsp;&nbsp;&nbsp;".$p."&nbsp;&nbsp;&nbsp;".$next."&nbsp;&nbsp;&nbsp;".$last;
}
