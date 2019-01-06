<?php
error_reporting(E_ALL^E_NOTICE);
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
			

	
			
		
	$link=connect1();
	$state=$_GET['state'];
	$type=$_GET['type'];
	if($_GET['state']==""){
			echo"<table width='650' height='590' border='0' cellspacing='0' cellpadding='0'>
					<tr>
						<td width='650' height='585'>
							<table width='650' height='585'>
								<tr>
									<td align='center'><a style='font-weight:bold;font-size:25px;color:red'>您未选择审核类型！</a></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>";
		}else{

?>
<table width="650" height="590" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="650" height="585">
		
				<?php
					$pagesize=4;
					$page = $_GET['page']?$_GET['page']:1;
					$se="select count(*) as totalRows from fufei where type='$type' and checkstate=$state order by sdate";
					//var_dump($ll);
					$sel=mysqli_query($link,$se);
					
					$totalRows=$minfo[totalRows];
					$sumpage=ceil($totalRows/$pagesize);
					$offet=($page-1)*4;
							
					$tx="select * from fufei where checkstate=$state and type='$type' limit {$offet},{$pagesize}";
					//var_dump($tx);
					$mianfei=mysqli_query($link,$tx);
					while($txx=mysqli_fetch_assoc($mianfei)){
						$txxs[]=$txx;
					}if(empty($txxs)){
				?>
				<table width="650" height="585">
					<tr>
						<td align="center"><a style="font-weight:bold;font-size:25px;color:red">没有要查找的信息！</a></td>
					</tr>
				</table>

				<?php
					}else{
				?>
				<table width="650" height="540" border="0" cellspacing="0">
													<?php if(is_array($txxs)&&(!empty($txxs)))
															{
																foreach ($txxs as $value):
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
														<td>简述：<?php echo $value['content'];?></td>
													</tr>
													<tr>
														<td>操作：<span style="color:red;"><a href='charge_ok.php?id=<?php echo $value['id'];?>&type=<?php echo $type;?>&state=<?php echo $state;?>'>审核</a></span>/<span style="color:red;"><a href='fufei_del.php?id=<?php echo $value['id'];?>&type=<?php echo $type;?>&state=<?php echo $state;?>'>删除</a><span><hr></td>
													</tr>
													<?php										
															endforeach;	}
												?>

												
				</table>
				<table border="0" width="650" height="40">
					<tr>
						<td id="menger">
							<ul id="yema">
								<?php
									for($i = 1;$i<=$sumpage;$i++){
										echo "<li><a href='findfufei.php?page={$i}&state={$state}&type={$type}';>$i</a></li>";
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
<?php
		}
?>



