<?php
	$uname="";
	$pass="";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname=$_POST["uname"];
		$pass=$_POST["pass"];
		$server="localhost";
		$user="root";
		$password="";
		$db="wt_sp21_l";
		$conn = mysqli_connect($server,$user,$password,$db);
		$query="insert into users values(NULL,'$uname','$pass','user')";	
		if (mysqli_query($conn,$query)){
			echo "User Inserted";
		}
		else{
			echo"Can not insert user";
		}
	}	
?>
<html>
	<body>
		<form action="" method="post">
			<input type="text" name="uname" placeholder="username"><br>
			<input type="password" name="pass" placeholder="password"><br>
			<input type="submit" value="register">
		</form>
	</body>
</html>	