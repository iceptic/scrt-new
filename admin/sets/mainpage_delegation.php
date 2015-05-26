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

/* delegation of which page is to be loaded in the main centre frame 
 * 
 */
$dashboard = isset($_POST['dashboard']) ? $_POST['dashboard'] : '';
$clients = isset($_POST['clients']) ? $_POST['clients'] : '';
$clients_profile = isset($_POST) ? $_POST : '';
$client_profile_value=isset($_POST['clients_profile']) ? $_POST['clients_profile'] : '';
$clients_profile_check= key($clients_profile);




       if ($dashboard == "dashboard"){
       include_once("sets/mainpage.php");
         }
       if ($clients == "clients"){
       include_once("sets/clients.php");
         }
       if ($clients_profile_check == "clients_profile"){
       include_once("sets/clients_profile.php");
                 }
        else{
         
            
            }
            


?>
