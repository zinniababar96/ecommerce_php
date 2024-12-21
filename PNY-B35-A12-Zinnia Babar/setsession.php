<?php 
session_start();

if ($_SESSION['ss_username']==""){
  session_unset();
  // destroy the session
  // session_destroy();
  header("location: index.php");
}
else{
}

?>