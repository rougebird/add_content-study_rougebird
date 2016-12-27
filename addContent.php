<!DOCTYPE HTML>
<html>
	<head>
		<title>Add content to study.rougebird.in</title>
	</head>
	<body style="padding: 40px 20px 20px ">
	<center>
		<form action="<?php echo htmlspecialchars('addC.php');?>" method="post">
			<table width="900" height="200" cellpadding="10" cellspacing="3">
			<caption><h3>Adding content to study.rougebird.in</h3></caption>
			<tr>
				<td><label>Content Title:</label></td>
				<td><input type="Text" name="c_title" style="width: 500px"></td>
			</tr>
			<tr>
				<td><label>Content Description:</label></td>
				<td><textarea name="c_desc" style="width: 500px; height: 50px"></textarea></td>
			</tr>
			<tr>
				<td><lable>Content Download Link:</lable></td>
				<td><input type="Text" name="c_downLink" style="width: 500px"></td>
			</tr>
			<!--
			<tr>
				<td><lable>Content type:</lable></td>
				<td>
					<select name="c_type" style="width: 130px">
						<option value=""></option>
						<option value="Document">Document</option>
						<option value="eBook">eBook</option>
					</select>
				</td>
			</tr>
			-->
			<tr>
				<td><label>Content Category:</label></td>
				<td>
					<select name="c_cat" style="width: 130px">
						<option value=""></option>
						<option value="CSM">C# .NET Material</option>
						<option value="SAM">SA Material</option>
						<option value="SAL">SA Lab</option>
						<option value="MIS">Miscellaneous</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit"></td>
			</tr>
			</table>
		</form>
		</center>
	</body>
</html>