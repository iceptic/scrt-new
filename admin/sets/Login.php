<?php
/*
 * Developed by Jordan Thomson 2015
 * 
 * System name: Scrt
 * 
 * Licenced software
 * 
 * Jordanthomson@techie.com
 * 
 * 
 * login helper for the login.html
 * 
 */

include_once("../includes/db_connect.php");
session_start(); // Starting Session
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['Username']) || empty($_POST['Password'])) {
$error = "Username or Password is invalid";
header("location: ../index.php");
}
else
{
// Define $username and $password
$username=$_POST['Username'];
$password=$_POST['Password'];
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from scrt_users where password='$password' AND username='$username'");
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: ../profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
echo "here";
header("location: ../index.php");
}
mysql_close($connection); // Closing Connection
}
}
?>