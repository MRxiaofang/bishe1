<script>
	function checkform(form){
		for(var i=0;i<form.length;i++){
			if (form.elements[i].value==""){
				alert("请将要发布的信息填写完整");
				form.elements[i].focus()
				return false;
			}
		}
	}
	
	
</script>
<table width="563" height="407" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="563" height="407">
			<form name="form1" method="post" action="fabu_ok.php">
				<table align="center">
					<tr>
						<td height="30">信息类型：
							<select name="type">
								<option value="兼职信息">兼职信息</option>
								<option value="房屋信息">房屋信息</option>
								<option value="二手教材">二手教材</option>
								<option value="快递代取">快递代取</option>
								<option value="二手车辆">二手车辆</option>
								<option value="寻物启事">寻物启事</option>
							</select><span class="style1" style=color:red>*&nbsp;请正确选择您要发布的信息类别</span>
						<td>
					<tr>
					<tr>
						<td height="30">信息标题：&nbsp<input type="text" name="title" id="title" size="20" maxlength="7" /></td>
					</tr>
					<tr>
						<td height="30">简述：</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea name="content" cols="50" rows="6" id="content" maxlength="28"></textarea>
					</tr>
					<tr>
						<td height="30">联系人：&nbsp&nbsp&nbsp&nbsp<input type="text" name="linkman" id="linkman" size="20" maxlength="4" /></td>
					</tr>
					<tr>
						<td height="30">联系电话：&nbsp<input type="text" name="tel" id="tel" size="20" maxlength="10" /></td>
					</tr>
					<td height="80">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="imageField" type="image" class="input1" src="Images/fa.jpg" width="145" height="46" border="0" maxlength="40" onClick="return checkform(form);"></td>
				</table>
			</form>
		</td>
	</tr>
</table>