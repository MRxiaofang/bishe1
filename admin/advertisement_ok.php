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
$title=$_POST['title'];
$contnt=$_POST['content'];
$fdate=date("Y-m-d H:i:s");
$cr="insert news ('title','content','fdate','flag') values ('$title','$content','$date','1')";
$crgg=mysqli_query($link,$cr);
if($crgg){
	echo "<script>alert('广告插入成功');window.location.href='advertise.php';</script>";
}else{
	echo "<script>alert('广告插入失败');history.back();</script>";
}
?>
