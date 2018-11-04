<?php
header("content-type:text/html;charset=utf8");
$data=$_POST;
$kaishi = $data['kaishi'];
$jieshu = $data['jieshu'];
$piaoshu = $data['piaoshu'];
function __autoload($class){
	require("$class.php");
}
$aa = new DB();
$res = $aa->add($kaishi,$jieshu,$piaoshu);
if($res){
	echo "<script>alert('添加成功');location.href='show.php'</script>";
}else{
	echo "<script>alert('添加失败');location.href='show.php'</script>";
}