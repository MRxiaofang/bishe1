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
$post=$_POST['title'];
$type=$_POST['type'];
$content=$_POST['content'];
$linkman=$_POST['linkman'];
$days=$_POST['days'];
$sdate=date("Y-m-d");
$showday=date("Y-m-d",(time()+3600*24*$days));
$checkstate=$_POST['state'];
$in="insert into fufei (type,title,content,linkman,tel,sdate,showday,checkstate) values ('$title','type','$content','$linkman','$days','$sdate','$showday',$checkstate)";
$inn=mysqli_query($link,$in);
if($inn){
	echo "<script>alert('广告发布成功，等待审核中');window.location.href='fufei.php';</script>";
}else{
	echo "<script>alert('广告发布失败');history.back();</script>";
}

?>