<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="Index.php">See Result</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
        <tr> 
				<td>Id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr> 
				<td>Valk</td>
				<td><input type="text" name="valk"></td>
			</tr>
			<tr> 
				<td>Gambar</td>
				<td><input type="text" name="gambar"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id = $_POST['id'];
		$valk = $_POST['valk'];
		$gambar = $_POST['gambar'];
		
		// include database connection file
		include ("Koneksi.php");
				
		// Insert user data into table
		$query = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>