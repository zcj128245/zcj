<?php 

class controller{
	function __construct(){
		@mysql_connect("127.0.0.1","root","root");
		mysql_select_db("xiaosan");
	}
	public function getUser(){
		$user = $_SESSION['name'];
		return $user;
	}
	public function login($username,$password){
		$sql = "select * from user_lianxi where username='$username'";
		$res = mysql_query($sql);
		$data = mysql_fetch_assoc($res);
		if($data){
			if($password==$data['password']){
				session_start();
				$_SESSION['name'] = $username;
				return 1;
			}else{
				return 2;
			}
		}else{
				return 3;
		}
	}
	public function getOut(){
		session_destroy();
		return 1;

	}
}

?>