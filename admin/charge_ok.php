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
$sh="UPDATE fufei SET checkstate=1 where id=$id";
$shc=mysqli_query($link,$sh);
if($shc){
	echo "<script>alert('该信息已经通过审核');window.location.href='findfufei.php?checkstate=$state&type=$type';</script>";
}else{
	echo "<script>alert('该信息审核操作失败！');history.back();";
}

?>