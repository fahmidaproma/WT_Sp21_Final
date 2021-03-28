<?php
	$uname = "";
	$id = "";
	$dob = "";
	$credit = "";
	$cgpa = "";
	$dept_id = "";
	$err_uname = "";
	$err_id = "";
	$err_dob = "";
	$err_credit = "";
	$err_cgpa = "";
	$err_dept_id = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["uname"])) {
			$err_uname = "*Name required";
		} 
		else {
			$uname = $_POST["uname"];
		}

		if (empty($_POST["id"])) {
			$err_id = "*ID required";
		} 
		else {
			$id = $_POST["id"];
		}

		if (empty($_POST["dob"])) {
			$err_dob = "*DOB required";
		} 
		else {
			$dob = $_POST["dob"];
		}

		if (empty($_POST["credit"])) {
			$err_credit = "*Credit required";
		} 
		else {
			$credit = $_POST["credit"];
		}

		if (empty($_POST["cgpa"])) {
			$err_cgpa = "*CGPA required";
		} 
		else {
			$cgpa = $_POST["cgpa"];
		}

		if (empty($_POST["dept_id"])) {
			$err_dept_id = "*Dept_id required";
		} 
		else {
			$dept_id = $_POST["dept_id"];
		}
	}
?>
<html>
	<body>
		<form action="" method="post">
			<table>
				<tr>
					<td><span>Username</span></td>
					<td>:
						<input type="text" placeholder="Username" name="uname" value="<?php echo $uname?>"
						<span><?php echo $err_uname?></span></td>
				</tr>
				<tr>
					<td><span>ID</span></td>
					<td>:
						<input type="number" placeholder="ID" name="id" value="<?php echo $id?>"
						<span><?php echo $err_id?></span></td>
				</tr>
				<tr>
					<td><span>Date Of Birth</span></td>
					<td>:
						<input type="number" placeholder="DateofBirth" name="dob" value="<?php echo $dob?>"
						<span><?php echo $err_dob?></span></td>
				</tr>
				<tr>
					<td><span>Credit</span></td>
					<td>:
						<input type="number" placeholder="Credit" name="credit" value="<?php echo $credit?>"
						<span><?php echo $err_credit?></span></td>
				</tr>		
				<tr>
					<td><span>CGPA</span></td>
					<td>:
						<input type="number" placeholder="CGPA" name="cgpa" value="<?php echo $cgpa?>"
						<span><?php echo $err_cgpa?></span></td>
				</tr>			
							
				<tr>
					<td><span>Dept_ID</span></td>
					<td>:
						<input type="number" placeholder="Dept_ID" name="dept_id" value="<?php echo $dept_id?>"
						<span><?php echo $err_dept_id?></span></td>
				</tr>			
				<tr>
					<td colspan="2" align="left"><input type="submit" value="ADD" name="submit">
				</tr>
			</table>	
		</form>
	</body>
</html>