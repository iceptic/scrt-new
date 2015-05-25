<?PHP
error_reporting(0);
/*
             Developed by Jordan Thomson 2015
 *
             System name: Scrt
 * 
             Licenced software - under GPL section 20 reference 5b
 * 
             Jordanthomson@techie.com
  
  */


$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "scrt";
$connection = mysql_connect("$mysql_server","$mysql_user","$mysql_password") or die ("Unable to connect to MySQL server.");
$db = mysql_select_db("$mysql_database") or die ("Unable to select requested database.");

?>