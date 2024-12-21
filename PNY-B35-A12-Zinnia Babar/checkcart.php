<?php 

	include 'dbconnect.php';

	$product_name = $_GET["t1"];
	$total_amount = $_GET["t4"];


	$sql = "Select * from cart where userid = '$product_name' 
			and password='$total_amount'";

	//echo $sql;

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0 ) {
		//echo "Record Found";

		$_SESSION['ss_username'] = $product_name;

		header("location: cart.php");
	}
	else{

		$_SESSION['ss_username'] = "";

		echo "<h1> Not Submitted</h1>";
		echo "<a href='cart.php'> submit </a>";

	}


	include ('dbclose.php');

?>