<?php
	require_once "db_config.php";
	$uname="";
	$pass="";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname=$_POST["uname"];
		$pass=$_POST["pass"];
		$query="select * from users where username='$uname' and password='$pass'";
		$result = get($query);
		if (count($result)>0){
			session_start();
			$_SESSION["Loggedin"]= $uname;
			header("Location:dashboard.php");;
		}
		else{
			echo"Username or password is inavalid";
		}
	}
?>
<html>
	<body>
		<form action="" method="post">
			<input type="text" name="uname" placeholder="username"><br>
			<input type="password" name="pass" placeholder="password"><br>
			<input type="submit" value="login"><br><a href="registration.php"> Not registered yet?</a>
		</form>
	</body>
</html>	
		