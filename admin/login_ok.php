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
$id=$_POST['id'];
$pass=$_POST['pass'];
$opt="select * from admin";
$option1=mysqli_query($link,$opt);
while($cow=mysqli_fetch_assoc($option1)){
	$cows [] =$cow;
	//count($cows);
	//count($cows);
}foreach ($cows as $value):
	$name=$value['name'];
	$password=$value['password'];
	if($id==$name||$pass==$password){
		echo"<script>alert('登陆成功');window.location.href='index.php';</script>";
	}else{
		echo"<script>alert(密码或者账号错误);history.back();</script>";
	}
endforeach;
/*for($i=1;$i<=count($cows);$i++){
	$name=$cows['name'];
	$password=$cows['password'];
	echo $name;
}
*/

?>
