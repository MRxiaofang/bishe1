
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
$table="mianfei";
$type=$_GET['type'];
$content=$_GET['content'];

$pagesize=4;
$page = $_GET['page']?$_GET['page']:1;



$htj="select count(*) as totalRows from mianfei where type='$type' and checkstate=1 and (content like'%$content%' or title like'%$content%' or linkman like'%$content%' or tel like'%$content%')";
$sql1=mysqli_query($link,$htj);
$minfo=mysqli_fetch_array($sql1);
$totalRows=$minfo[totalRows];
$sumpage=ceil($totalRows/$pagesize);
$offet=($page-1)*4;
?>
<table width="563" height="593" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="563" height="593">
			<table width="563" border="0" cellspacing="0" cellpadding="0" height="593">
				<tr>
					<td width="563" height="27" background="Images/fufei.gif"></td>
				</tr>
				<tr>
					<td width="563" height="500">
						<table>
							<tr><?php
										$date2=date("Y-m-d");
										$pp="select * from mianfei where type='$type' and checkstate=1 and (content like'%$content%' or title like'%$content%' or linkman like'%$content%' or tel like'%$content%') limit {$offet},{$pagesize}";//查找当天发布的信息并且已经检查是否发布!!!!!!注意limit前面不加and;
										$ppp=mysqli_query($link,$pp);
										while($qw=mysqli_fetch_assoc($ppp)){			//从结果集里面取出来一行作为数组，所以要进行判断取出来多行放进数组
											$qws [] = $qw;
										}
										if(!$qws){
									?>
								<td>			
									<table width="540" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td align="center"><a style="font-weight:bold;font-size:25px;color:red">搜索不到你所需要的信息资源！</a></td>
										</tr>
									</table>
								</td>
									<?php
										}else{
									?>
								<td>
									<table width="540" height="500" border="0" cellspacing="0">
									<?php if(is_array($qws)&&(!empty($qws)))
										{
											foreach ($qws as $val):
									?>
										<tr>
											<td><font color=#FF0000><b>标题：<?php echo $val['title'];?></b></font></td>
										</tr>
										<tr>
											<td>联系人：<?php echo $val['linkman'];?></td>
										</tr>
										<tr>
											<td>联系电话：<?php echo $val['tel'];?></td>
										</tr>
										<tr>
											<td>简述：<?php echo $val['content'];?><hr></td>
										</tr>
										<?php										
												endforeach;	}
										?>
									</table>
									<table width="540" border="0" height="40" border="1">		
										<tr>
											<td width="540" border="0" height="40" id="fuji">
												<ul id="fanye">
													<?php
														for($i = 1;$i<=$sumpage;$i++){
															echo "<li><a href='find.php?page={$i}&type={$type}&content={$content}'>$i</a></li>";
																}
													?>
												</ul>	
											</td>
										</tr>
									</table>
								</td>
										<?php
												}											
										?>
							</tr>
						</table>
					</td>
				</tr>
			</table>	
		</td>
	</tr>
</table>
<?php
//ob_clean();
//setcookie("type","",time()+3600);
//setcookie("content","",time()+3600);
?>