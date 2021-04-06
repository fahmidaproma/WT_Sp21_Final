<?php
	require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$hasError = false;
	$username="";
	$err_username="";
	$hasError = false;
	$email="";
	$err_email="";
	$hasError = false;
	$password="";
	$err_password="";
	$hasError = false;
	
	if(isset($_POST["sign_up"]) ){
		if(empty($_POST["name"])){
			$hasError= true;
			$err_name = "<br>Name Required";
		}
		else{
			$name = $_POST["name"];
		}
		if(empty($_POST["username"])){
			$hasError= true;
			$err_username = "<br>Username Required";
		}
		else{
			$username = $_POST["username"];
		}
		if(empty($_POST["email"])){
			$hasError= true;
			$err_email = "<br>Email Required";
		}
		else{
			$email = $_POST["email"];
		}
		if(empty($_POST["password"])){
			$hasError= true;
			$err_password = "<br>Password Required";
		}
		else{
			$password = $_POST["password"];
		}
		//other validation
		if(!$hasError){
			interUser($_POST["name"],$_POST["username"],$_POST["email"],$_POST["password"]);
		}		
	}

	if(isset($_POST["btn_login"])){
		if(authenticateUser($_POST["username"],$_POST["password"])){
			header("Location: dashboard.php");
		}
		echo"Invalid username or password";
	}
	
	function interUser($name,$username,$email,$password){
		$query = "INTER INTO users VALUES(NULL,'$name','$username','$email','$password')";
		
		execute($query);
	}

	function authenticateUser($username,$password){
		$query = "select * from users where username='$username' and password='$password'";
		$result = get($query);
		
		if(count($result > 0){
			return $result[0];
		}
		return false;
	}
?>