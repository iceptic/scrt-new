<?php

/* 
 * Developed by Jordan Thomson 2015
 * 
 * System name: Scrt
 * 
 * Licenced software
 * 
 * Jordanthomson@techie.com
 
include_once("db_connect.php");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select username from scrt_users where username='$user_check'");
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['login_user'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
 *
 */


include_once ("db_connect.php");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from scrt_users where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>