
<!DOCTYPE html PUBLC "-//W3C//DTD XHTML 1.0 Transitional//EN"

"http://www.w3.org/TR/xhml11/DTD/xhtmll-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>河南理工信息供求网</title>
	<style type="text/css">
		
		#top{
			position:relative;
		}
		#daohang{
			list-style:none;
			position:absolute;
			top:10px;
			right:5px;
		}
		#daohang li{
			float:left;
		}
		#daohang li a{
			text-decoration:none;
			font-weight:bolder;
			color:#880000;
			height:22px;
			display:block;											<!--锁定，使其具有块标签属性，对其设置行高边框属性等-->
			line-height:22px;
			padding: 0 10px;
			border:1px solid white;
			border-radius:5px;
		}
	
	
		#daohang1{
			list-style:none;
			position:absolute;
			bottom:0px;
			right:5px;
		}
		#daohang1 li{
			float:left;
		}
		#daohang1 li a{
			text-decoration:none;
			font-weight:bolder;
			color:#880000;
			height:20px;
			display:block;											<!--锁定，使其具有块标签属性，对其设置行高边框属性等-->
			line-height:20px;
			padding: 0 10px;
			border-right:1px solid white;
		}
		#fufei{
			position:relative;
			}
		#fanye1 {
			list-style:none;
			position:absolute;
			bottom:0px;
			right:10px;
				}
		#fanye1 li{float:left;}
		#fanye1 li a{
			text-decoration:none;
			background:#0044BB;
			color:#fff;
			font-weight:bolder;
			height:20px;
			display:block;											<!--锁定，使其具有块标签属性，对其设置行高边框属性等-->
			line-height:20px;
			padding:0 10px;
			border:1px solid white;
		}
		
		
		
		#fuji{
			position:relative;
			}
		#fanye {
			list-style:none;
			position:absolute;
			bottom:0px;
			right:10px;
				}
		#fanye li{float:left;}
		#fanye li a{
			text-decoration:none;
			background:#0044BB;
			color:#fff;
			font-weight:bolder;
			height:20px;
			display:block;											<!--锁定，使其具有块标签属性，对其设置行高边框属性等-->
			line-height:20px;
			padding:0 10px;
			border:1px solid white;
		}
		
		
	</style>
</head>
<body bgcolor="#D2E9FF">
<table width="780" border="1" align="center" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td colspan="2" ><?php include("top.php");?></td>
	</tr>
	<tr>
		<td valign="top"><?php include("left.php");?></td>
		<td valign="top"><?php include("main.php");?></td>
	</tr>
	<tr valign="bottom">
		<td colspan="2"><?php include("bottom.php");?></td>
	</tr>
</table>
</body>
</html>