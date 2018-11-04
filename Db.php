<?php

class Db
{
	function __construct(){
		 @mysql_connect('127.0.0.1','root','root');
           mysql_select_db('xiaosan');
	}


	function add($kaishi,$jieshu,$piaoshu){
		$sql = "insert into zhoukao values(null,'$kaishi','$jieshu','$piaoshu')";
		$res=mysql_query($sql);
		return $res;
	}
	function update($id){
		$sql = "update zhoukao set piaoshu=piaoshu-1 where id = '$id'";
		$res=mysql_query($sql);
		return $res;
	}
	function del($id){
		$sql = "delete from zhoukao where id = '$id'";
		$res=mysql_query($sql);
		return $res;
	}
	function select(){
		$sql = "select * from zhoukao";
		$res=mysql_query($sql);
		$list = array();
        while($arr=mysql_fetch_assoc($res)){
        	$list[]=$arr;
		}
		return $list;
	}

	function sel($id){
		$sql = "select * from zhoukao where id ='$id'";
		$res=mysql_query($sql);
		$data = mysql_fetch_assoc($res);
		return $data;
	}


}
