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
$del="select * from news";
$delinfo=mysqli_query($link,$del);
$cow=mysqli_fetch_assoc($delinfo);
if(empty($cow)){
?>
<table width="670" height="600">
	<tr>
		<td width="660" height="600">
			<table border="0" width="660" height="563">
				<tr>
					<td align="center" style="font-weight:bold;font-size:25px;color:red">没有广告信息！</td>
				<tr>
			</table>
		</td>
	</tr>
</table>
<?php
}else{
	?>
<table width="670" height="600">
	<tr>
		<td width="660" height="600">
			<table border="1" width="660" height="60">
			<tr>
				<th align="center" style="font-weight:bold;font-size:18px;color:red">标题</th>
				<th align="center" style="font-weight:bold;font-size:18px;color:red">内容</th>
				<th align="center" style="font-weight:bold;font-size:18px;color:red">操作</th>
			</tr>
			<tr>
				<td align="center"><?php echo $cow['title'];?></td>
				<td align="center"><?php echo $cow['content'];?></td>
				<td align="center"><a href='advertisedel_ok.php?id=<?php echo $cow['id']?>'>删除</a></td>
			</tr>			
			</table>
		</td>
	</tr>
</table>	
<?php
}
?>