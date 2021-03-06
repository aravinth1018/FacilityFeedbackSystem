<?php
  SESSION_START();

  if(!isset($_SESSION['user']))
  {
	  echo"<script>location.href='plogin.php'</script>";
  }
 
?>
<?php 
	$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM computing";
$dept=$_SESSION['dept'];
$sec=$_SESSION['sec'];
$year=$_SESSION['year'];
  include 'overallavgsports.php'; 
?>