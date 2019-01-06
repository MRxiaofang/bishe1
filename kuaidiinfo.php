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




//免费区信息显示
$pagesize=3;
$page = $_GET['page']?$_GET['page']:1;
$htj="select count(*) as totalRows from mianfei where type='快递代取' and checkstate=1";
$sql1=mysqli_query($link,$htj);
$minfo=mysqli_fetch_array($sql1);
$totalRows=$minfo[totalRows];
$sumpage=ceil($totalRows/$pagesize);
$offet=($page-1)*3;

																								

?>
<table width="563" height="593" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="563" height="593">
			<table width="563" border="0" cellspacing="0" cellpadding="0" height="593">
				<tr>
					<td width="563" height="27" background="Images/fufei.gif"></td>
				</tr>
				<tr>
					<td width="563" height="160">
						<?php
							$date1=date("Y-m-d");
							$ss="select * from fufei where type='快递代取' and showday>='$date1' and checkstate=1";  //查找当天发布的信息并且已经检查是否发布
							$sss=mysqli_query($link,$ss);
							while($ro=mysqli_fetch_assoc($sss)){			//从结果集里面取出来一行作为数组，所以要进行判断取出来多行放进数组
							$cows [] = $ro;									//存在一种情况，里面有值，但是字段为空。。mysqli_fetch_assoc取出非空字段放入数组。
								}
							if(empty($cows)){
						?>
						<table width="540" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td align="center" style="font-weight:bold;font-size:25px;color:red">暂无快递取信息！</td>				<!--已经输出-->
							</tr>
						</table>
						<?php
							}else{
						?>
						 <table width="563" border="0" height="130">
							<?php
								if(is_array($cows)&&(!empty($cows)))
									{
										foreach ($cows as $xf):					//注意此处是冒号：并不是分号；
							?>
							<tr>
								<td><font color=#FF0000><b>标题：<?php echo $xf['title'];?></b></font></td>
							</tr>
							<tr>
								<td><font color=#FF0000><b>联系人：<?php echo $xf['linkman'];?></b></font></td>
							</tr>
							<tr>
								<td><font color=#FF0000><b>联系电话：<?php echo $xf['tel'];?></b></font></td>
							</tr>
							<tr>
								<td><font color=#FF0000><b>简述：<?php echo $xf['content'];?></b></font><hr></td>
							</tr>
							<?php										
								endforeach;	}
							?>
						</table>
						<?php
							}
						?>
					</td>
				</tr>
				<tr>
					<td width="563" height="27" background="Images/mianfei.gif"></td>
				</tr>
				<tr>																<!---第二部分排版-->
					<td width="563" height="337">
						<?php
							$date2=date("Y-m-d");
							$sg="select * from mianfei where type='快递代取' and checkstate=1 limit {$offet},{$pagesize}";//查找当天发布的信息并且已经检查是否发布
							$sgl=mysqli_query($link,$sg);
							while($row=mysqli_fetch_assoc($sgl)){			//从结果集里面取出来一行作为数组，所以要进行判断取出来多行放进数组
							$rows [] = $row;
							}
							//var_dump($rows);
							//var_dump($result);
							if(empty($rows)){
						?>
						<table width="540" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td align="center"><a style="font-weight:bold;font-size:25px;color:red">暂无快递代取信息！</a></td>    		<!--无法输出-->  
							</tr>
						</table>
						<?php
						
							}else{
						?>
						<table width="540" height="335" border="0" cellspacing="0">
													<?php if(is_array($rows)&&(!empty($rows)))
															{
																foreach ($rows as $value):
													?>
													<tr>
														<td><font color=#FF0000><b>标题：<?php echo $value['title'];?></b></font></td>
													</tr>
													<tr>
														<td>联系人：<?php echo $value['linkman'];?></td>
													</tr>
													<tr>
														<td>联系电话：<?php echo $value['tel'];?></td>
													</tr>
													<tr>
														<td>简述：<?php echo $value['content'];?><hr></td>
													</tr>
													<?php										
															endforeach;	}
												?>

												
						</table>
						<table width="540" border="0" height="40" border="1">			<!--已经执行-->
							<tr>
								<td width="540" border="0" height="40" id="fuji">
									<ul id="fanye">
										<?php
											for($i = 1;$i<=$sumpage;$i++){
												echo "<li><a href='kuaidi.php?page={$i}'>$i</a></li>";
													}
										?>
									</ul>	
								</td>
							</tr>
						</table>
						<?php
								}									
						?>
					</td>
				</tr>
			</table>	
		</td>
	</tr>
</table>