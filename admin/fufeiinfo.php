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
<table width="650" height="600">
	<tr>
		<td width="650" height="27"></td>
	<tr>
	<tr>
		<td width="650" height="563">
			<form method="post" action="fufei_ok.php" name="form">
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
						<td height="30">简述：</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea name="content" cols="50" rows="6" id="content" maxlength="50"></textarea>
					</tr>
					<tr>
						<td height="30">联系人：&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="linkman" id="linkman" size="20" maxlength="4" /></td>
					</tr>
					<tr>
						<td height="30">联系电话：&nbsp<input type="text" name="tel" id="tel" size="20" maxlength="11" /></td>
					</tr>
					<tr>
						<td height="30">有效期：&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="days" id="days" size="20" maxlength="3"></td>
					</tr>
					<tr>
						<td>是否付费：是&nbsp<input name="state" type="radio" class="input1" value="1">&nbsp否<input name="state" type="radio" class="input1" value="0"></td>
					</tr>
					<tr>
					<td height="80">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="button" type="button" value="发布" onClick="return checkform(form);"></td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
</table>