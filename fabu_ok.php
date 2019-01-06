<?php
$title=$_POST['title'];
$type=$_POST['type'];
$content=$_POST['content'];
$linkman=$_POST['linkman'];
$tel=$_POST['tel'];
$edate=date("Y-m-d");


define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','xiaofang');
define('DB_CHARSET','utf8');
define('DB_DBNAME','ligong');


function connect1(){
	$link = mysqli_connect ( DB_HOST, DB_USER, DB_PWD ) or die ( '数据库连接失败<br/>ERROR ' . mysqli_connect_errno () . ':' . mysqli_connect_error () );
	mysqli_set_charset ( $link, DB_CHARSET );
	mysqli_select_db ( $link, DB_DBNAME ) or die ( '指定数据库打开失败<br/>ERROR ' . mysqli_errno ( $link ) . ':' . mysqli_error ( $link ) );
	return $link;
}
error_reporting(E_ALL^E_NOTICE);

$link=connect1();
$aa="insert into mianfei(type,title,content,linkman,tel,checkstate,edate) values ('$type','$title','$content','$linkman','$tel',0,'$edate')";  //注意带上单引号好
$aaa=mysqli_query($link,$aa);
if($aaa){
	
	echo "<script>alert('恭喜您，信息发布成功！');window.location.href='fabu.php';</script>";
}else{
		echo "<script>alert('对不起，信息发布失败！');history.back();</script>";
}
?>