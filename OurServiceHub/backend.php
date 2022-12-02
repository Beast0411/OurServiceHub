<?php
session_start();
$db_hostname = 'HUMANBEAST';
$db_database = 'OurServiceHub';
$db_username = 'root';
$db_password = '';
$conn=mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

extract($_POST);
/*if(isset($_POST['uname']))
{
	$uname=$_POST['uname'];
	$_SESSION['uname']=$uname;
}*/

	

?>