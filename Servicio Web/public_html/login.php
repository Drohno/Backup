<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$user = 'admin';
$pss = 'sk8bcn';
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

$compusr = strcmp($username, $user);
$comppss = strcmp($password, $pss);

if (($compusr == 0)&&($comppss == 0)) {
	$_SESSION['login_user']=$username; // Initializing Session
	header("location: profile.php"); // Redirecting To Other Page
} else {
		$error = "Username or Password is invalid";
}
}
}
?>