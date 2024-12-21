<?php include('setsession.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Check Login</title>
</head>
<body>

<?php 

	include 'dbconnect.php';

	$username = $_GET["t1"];
	$password = $_GET["t2"];


	$sql = "Select * from logins where userid = '$username' 
			and password='$password'";

	//echo $sql;

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0 ) {
		//echo "Record Found";

		$_SESSION['ss_username'] = $username;

		header("location: home.php");
	}
	else{

		$_SESSION['ss_username'] = "";

		echo "<h1> Invalid User ID / Password </h1>";
		echo "<a href='index.php'> Click Here For Login </a>";

	}


	include ('dbclose.php');

?>

</body>
</html>




