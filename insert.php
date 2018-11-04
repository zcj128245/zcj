<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table >
		<form action="insert_do.php" method="post">
			<tr>
				<td>开始地:</td>
				<td><input type="text" name="kaishi"></td>
			</tr>
			<tr>
				<td>结束第：</td>
				<td><input type="text" name="jieshu"></td>
			</tr>
			<tr>
				<td>票数</td>
				<td><input type="text" name="piaoshu"></td>
			</tr>
			<tr>
				<td><input type="submit" value="添加"></td>
			</tr>
		</form>
	</table>
</body>
</html>