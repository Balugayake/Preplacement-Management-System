<?php

	session_start();
	include_once('config.php');

	class func extends Config{

		
		//For Login
		public function login($email,$password){
			$login = "SELECT id, email, password FROM user_info WHERE email = '$email' && 
			password = '$password' ";
			$res = $this->connect()->query($login);
			return $res;
		}
		public function login_admin($email,$password){
			$login = "SELECT * FROM admin WHERE email = '$email' && 
			password = '$password' ";
			$res = $this->connect()->query($login);
			return $res;
		}

		public function profile(){

			 $id  = $_SESSION['id'];
			$profile = "SELECT * FROM user_info WHERE id = '$id' ";
			 $result = $this->connect()->query($profile);
			 return $result;
		}

		public function course1(){
			$c1 = "SELECT * FROM courses  ";
			 $result = $this->connect()->query($c1);
			 return $result;
		}
	}
?>