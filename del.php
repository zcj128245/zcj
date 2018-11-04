<?php
header("content-type:text/html;charset=utf8");
$id = $_GET['id'];

function __autoload($class){
	require("$class.php");
}

$aa = new DB();
$res = $aa->sel($id);
if($res['piaoshu']>0){
	$res = $aa->update($id);
	if($res==''){
		echo "<script>alert('抢票失败');location.href='show.php'</script>";
	}else{
	echo "<script>alert('抢票成功');location.href='show.php'</script>";
	}
}
else{
	echo "<script>alert('抢票失败');location.href='show.php'</script>";
}