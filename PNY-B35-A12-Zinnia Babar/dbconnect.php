<?php 
// ----------  Database Connectivity Block
$srv = "127.0.0.1";
$user = "root";
$pass = "";
$db = "fullstack1";

$conn = mysqli_connect($srv, $user, $pass, $db);
if ($conn == false){
die("Connection Failure...");
}
// else{
// 	echo "Database Connected...";
// }
//-----------------------------------
?>