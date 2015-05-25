<?php

/* 
 * Developed by Jordan Thomson 2015
 * 
 * System name: Scrt
 * 
 * Licenced software
 * 
 * Jordanthomson@techie.com
 */
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../index.php"); // Redirecting To Home Page
}
?>
