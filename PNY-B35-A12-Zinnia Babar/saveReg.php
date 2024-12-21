<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Save Registration</title>
</head>
<body>

	<?php 

		$username = $_GET["t1"];
		$password = $_GET["t2"];
		//$confpass = $_GET["t3"];
		$fullname = $_GET["t4"];
		$email = $_GET["t5"];

		echo "User Registration Process Started For: " . $username;
		include 'dbconnect.php';


		$sql = "select * from logins where userid='$username'";
		$res = mysqli_query($conn, $sql);
		if ( mysqli_num_rows($res) > 0 ){
			die (" <h1> User Already Exists.... </h1> ");
		}

		

		$sql = "insert into logins
				(userid, password, fullname, email, active_status) 
				values('$username', '$password', '$fullname', '$email', true)";
		
		echo "<br>" . $sql;
		$res = mysqli_query($conn, $sql);
		if ($res==true) {
			echo "<h1> User Successfully Registered .... </h1> ";
		}

	?>




</body>
</html>