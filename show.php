<?php

function __autoload($class){
	require("$class.php");
}
	
$aa = new Db();
$data = $aa->select();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>开始地</td>
			<td>结束地</td>
			<td>剩余票数</td>
			<td>操作</td>
		</tr>
		
		<?php foreach ($data as $key => $value): ?>
			<tr>
				<td><?php echo $value['kaishi']?></td>
				<td><?php echo $value['jieshu']?></td>
				<td><?php echo $value['piaoshu']?></td>
				<td><a href="del.php?id=<?php echo $value['id']?>">抢票</a></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>