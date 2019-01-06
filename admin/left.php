<table width="200" height="600">
	<tr>
		<td width="200" height="30" background="images/mianfei.jpg"></td>
	</tr>
	<tr>
		<td width="200" height="170">
			<table width="200" height="170" border="1">
				<form action="findfreeinfo.php" method="get">
					<tr>
						<td height="100" align="center">
							<fieldset style="height:100;width:200;color:red">
								<legend>★ 审核状态</legend>
								<input name="checkstate" type="radio" class="input1" value="1">
								已审核
								<input name="checkstate" type="radio" class="input1" value="0">
								未审核
								<br/>
								<br/>
								信息类型：
								<select name="type">
									<option value="兼职信息">兼职信息</option>
									<option value="房屋信息">房屋信息</option>
									<option value="二手教材">二手教材</option>
									<option value="快递代取">快递代取</option>
									<option value="二手车辆">二手车辆</option>
									<option value="寻物启事">寻物启事</option>
								</select>
								<br/>
								<input type="submit" name="submit" value="检索">
							</fieldset>
						</td>
					</tr>
				</form>
			</table>
		</td>
	</tr>
	<tr>
		<td width="200" height="30" background="images/fufei.jpg"></td>
	</tr>
	<tr>
		<td width="200" height="170" align="center">
			<table width="200" height="170" border="1">
				<form action="findfufei.php" method="get">
					<tr>
						<td height="100" align="center">
							<fieldset style="height:100;width:200">
								<legend>★ 审核状态</legend>
								<input name="state" type="radio" class="input1" value="1">
								已审核
								<input name="state" type="radio" class="input1" value="0">
								未审核
								<br/>
								<br/>
								信息类型：
								<select name="type">
									<option value="兼职信息">兼职信息</option>
									<option value="房屋信息">房屋信息</option>
									<option value="二手教材">二手教材</option>
									<option value="快递代取">快递代取</option>
									<option value="二手车辆">二手车辆</option>
									<option value="寻物启事">寻物启事</option>
								</select>
								<br/>
								<input type="submit" name="submit" value="检索">
							</fieldset>
						</td>
					</tr>
				</form>
			</table>
		</td>
	</tr>
	<tr>
		<td width="200" height="30" background="images/guanggao.jpg"></td>
	</tr>
	<tr>
		<td width="200" height="170">
			<table width="200" height="170" border="1">
				<form>
					<tr>
						<td height="100" align="center">
							<fieldset style="height:100;width:200">
								<legend>★ 信息发布</legend>
									<ul id="charu">
										<li><a href='advertise.php'>广告插入</a></li>
										<br/>
										<li><a href='fufei.php'>付费信息插入</a></li>
									<ul>
							</fieldset>
						</td>
					</tr>
				</form>
			</table>
		</td>
	</tr>
</table>