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
/*
include_once("../includes/db_connect.php");

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['Username']) || empty($_POST['Password'])) {
$error = "Username or Password is invalid";
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

$query = mysql_query("select * from scrt_users where password='$password' AND username='$username'");
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: ../logged_in.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}



/*

session_start();

var_dump($_POST);

$username = addslashes(strip_tags($_POST['Username'])); 
$password = addslashes(strip_tags($_POST['Password']));


$sql = mysql_query("SELECT * FROM scrt_users WHERE username='$username' AND password='$password' LIMIT 1");


if(mysql_num_rows($sql) > 0){
    
    $_session['username'] = $username;
 
    header ("location: ../logged_in.php");
    
}
else
{
    
    echo "something is wrong!";
    
  die();
}
/*
$login_check = mysql_num_rows($sql); 
$inf = mysql_fetch_object($sql); 
if ($login_check === "0"){
echo "Incorrect username or password.";
echo ("hello");
}
else{
 $_session['username'] = $username;
 header ("Location: index.php");
}
*/
?>
<?PHP
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