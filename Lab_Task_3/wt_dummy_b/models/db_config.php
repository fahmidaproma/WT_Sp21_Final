<?php	
	$server="localhost";
	$user="root";
	$password="";
	$db_name="wt_dummy_project";
		
	function execute($query){ //running insert,update,delete
		global $server,$user,$password,$db_name;
		$conn = mysqli_connect($server,$user,$password,$db_name);
		mysqli_query($conn,$query);
	}
	
	function get($query){ //running select
		global $server,$user,$password,$db_name;
		$conn = mysqli_connect($server,$user,$password,$db_name);
		$result = mysqli_query($conn,$query);
		$data = [];
		
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
		}
		return $data;	
	}	
?>