<!DOCTYPE html PUBLC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhml11/DTD/xhtmll-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>河南理工信息供求网</title>
	<style type="text/css">
	#as{
		position:relative;
	}
	#list{
		list-style:none;
		position:absolute;
		bottom:0px;
		right:3px;
	}
	#list li{
		float:left;
	}
	#list li a{
			text-decoration:none;
			font-weight:bolder;
			color:#880000;
			height:20px;
			display:block;											<!--锁定，使其具有块标签属性，对其设置行高边框属性等-->
			line-height:20px;
			padding: 0 10px;
			border-right:1px solid white;
	}
	
	#charu{
		list-style:none;
		margin-right:30px;
	}
	
	#charu li a{
			text-decoration:none;
			font-weight:bolder;
			background:33CCFF;
			color:#880000;
			height:22px;
			display:block;											<!--锁定，使其具有块标签属性，对其设置行高边框属性等-->
			line-hight:22px;
			border-radius:5px;
	}
	</style>
</head>
<body bgcolor="#D2E9FF">
<table width="900" border="1" align="center" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td colspan="2" ><?php include("top.php");?></td>
	</tr>
	<tr>
		<td valign="top"><?php include("left.php");?></td>
		<td valign="top"><?php include("fufeiinfo.php");?></td>
	</tr>
	<tr valign="bottom">
		<td colspan="2"><?php include("bottom.php");?></td>
	</tr>
</table>
</body>
</html>