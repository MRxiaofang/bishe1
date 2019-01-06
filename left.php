<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','xiaofang');
define('DB_CHARSET','utf8');
define('DB_DBNAME','ligong');



//数据库连接总代码   注意此处，一个页面不能同时定义两个同名函数，connect1()在main部分已经定义过
function connect2(){
	$link = mysqli_connect ( DB_HOST, DB_USER, DB_PWD ) or die ( '数据库连接失败<br/>ERROR ' . mysqli_connect_errno () . ':' . mysqli_connect_error () );
	mysqli_set_charset ( $link, DB_CHARSET );
	mysqli_select_db ( $link, DB_DBNAME ) or die ( '指定数据库打开失败<br/>ERROR ' . mysqli_errno ( $link ) . ':' . mysqli_error ( $link ) );
	return $link;
}
error_reporting(E_ALL^E_NOTICE);

$connect=connect2();
$select="select * from news";
$se=mysqli_query($connect,$select);
$cow=mysqli_fetch_assoc($se);
//var_dump($cow['title']);
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<table width="210" height="593" cellpadding="0" cellspacing="0" border="1" >
	<tr>
		<td align="center" height="31" bgcolor="#6495ED">★广告专区</td>
	</tr>
	
	
	
	<tr>
		<td height="166" width="210" align="center">
			<table>
				<tr>
					<td align="center" style="font-weight:bold;font-size:18px;color:red"><?php echo $cow['title'];?></td>
				<tr>
				<tr>
					<td style="font-weight:bold;font-size:17px;color:red"><?php echo $cow['content'];?></td>
				</tr>
			</table>
		</td>
	</tr>

	
	
	<tr>
		<td align="center" height="31" bgcolor="#6495ED">★信息检索</td>
	</tr>
	
	
	
	<tr>
		<td height="165">
			<form name="form1" method="get" action="find.php" >
				<table>
					<tr>
						<td width="205" height="35">关键字：<input name="content" type="text" id="content" size="15"></td>
					</tr>
					<tr>
						<td>条&nbsp件：&nbsp
							<select name="type">
								<option value="兼职信息">兼职信息</option>
								<option value="房屋信息">房屋信息</option>
								<option value="二手教材">二手教材</option>
								<option value="快递代取">快递代取</option>
								<option value="二手车辆">二手车辆</option>
								<option value="寻物启事">寻物启事</option>
						    </select>
						</td>
					</tr>
					<tr>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="submit" value="点击检索" name="submit" bgcolor="#6495ED"/>
						</td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
	<tr>
		<td align="center" height="31" bgcolor="#6495ED">★联系我们</td>
	</tr>
    <tr>
		<td align="center">
			<table width="210" height="165" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td height="20" align="center" font="5"><span class="style1" >河南理工大学</span></td>
				</tr>
				<tr>
					<td height="20">联系地址：河南省焦作市山阳区世纪大道2001号</td>
				</tr>
				<tr>
					<td height="20">联系电话：1833918****</td>
				</tr>
				<tr>
					<td height="20">邮政编码：454000</td>
				</tr>
			</table>
		</td>
	</tr>
</table>