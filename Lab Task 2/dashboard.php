<?php
	session_start();
	if(!isset($_SESSION["Loggedin"])){
		header("Location:login.php");;
	}
	//include "db_config.php";
	//require_once "db_config.php";
	
	$query="select * from users";
	//execute($query);
	$result = get($query);
	//echo "<pre>";
	//print_r($result);
	//echo "</pre>";
	
	/*$server="localhost";
	$user="root";
	$password="";
	$db_name="wt_sp21_l";*/
	
	/*$conn = mysqli_connect($server,$user,$password,$db_name);
	$query="select * from users";
	$result = mysqli_query($conn,$query);*/
?> 
	<table border="1" style="border-collapse:collapse;">
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Type</th>
		</tr>
<?php
	foreach($result as $row){
		echo "<tr>";
		echo "<td>".$row["ID"]."</td>";
		echo "<td>".$row["Username"]."</td>";
		echo "<td>".$row["Type"]."</td>";
		echo "</tr>";
	}
	/*while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row["ID"]."</td>";
		echo "<td>".$row["Username"]."</td>";
		echo "<td>".$row["Type"]."</td>";
		echo "</tr>";
	}
	
	/*$var = mysqli_fetch_assoc($result);
	echo $var["Username"];
	//print_r($var);
	$var2 = mysqli_fetch_assoc($result);
	echo "<br>";
	echo $var2["Username"];
	//print_r($var2);*/
		
?>
	</table>