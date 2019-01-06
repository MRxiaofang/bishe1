<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','xiaofang');
define('DB_CHARSET','utf8');
define('DB_DBNAME','ligong');



//数据库连接总代码
function connect1(){
	$link = mysqli_connect ( DB_HOST, DB_USER, DB_PWD ) or die ( '数据库连接失败<br/>ERROR ' . mysqli_connect_errno () . ':' . mysqli_connect_error () );
	mysqli_set_charset ( $link, DB_CHARSET );
	mysqli_select_db ( $link, DB_DBNAME ) or die ( '指定数据库打开失败<br/>ERROR ' . mysqli_errno ( $link ) . ':' . mysqli_error ( $link ) );
	return $link;
}
error_reporting(E_ALL^E_NOTICE);

$id=$_GET['id'];
$state=$_GET['state'];
$type=$_GET['type'];


$link=connect1();

$dd="delete from fufei where id=$id";
$dl=mysqli_query($link,$dd);
if($dl){
	echo"<script>alert('您已成功删除该条信息');window.location.href='findfufei.php?state=$state&type=$type';</script>";
}else{
	echo"<script>alert('删除失败');history.back();</script>";
}

?>