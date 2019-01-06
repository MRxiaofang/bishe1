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
$link=connect1();
$id=$_GET['id'];
$del="delete from news where id=$id";
//var_dump($del);

$dt=mysqli_query($link,$del);
//var_dump($delet);
if($dt){
	echo "<script>alert('您已成功删除该条广告');window.location.href='advertisedel.php;'</script>";
}else{
	echo "<script>alert('删除失败');history.back();</script>";
}
?>