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
include_once("../includes/db_connect.php");
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name'])){

    
$query_post_data_id = isset($_POST['id']) ? $_POST['id'] : '';
$query_post_data_name = isset($_POST['name']) ? $_POST['name'] : '';
$query_post_data_middle_name = isset($_POST['middle_name']) ? $_POST['middle_name'] : '';
$query_post_data_surname = isset($_POST['surname']) ? $_POST['surname'] : '';
$query_post_data_address = isset($_POST['address']) ? $_POST['address'] : '';
$query_post_data_postcode = isset($_POST['postcode']) ? $_POST['postcode'] : '';
$query_post_data_location = isset($_POST['location']) ? $_POST['location'] : '';
$query_post_data_country = isset($_POST['country']) ? $_POST['country'] : '';
$query_post_data_dob = isset($_POST['dob']) ? $_POST['dob'] : '';
$query_post_data_phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
$query_post_data_drugs = isset($_POST['drugs']) ? $_POST['drugs'] : '';
$query_post_data_date_left = isset($_POST['date_left']) ? $_POST['date_left'] : '';



$profile_update_database = mysql_query("UPDATE clients SET name='$query_post_data_name', middle_name='$query_post_data_middle_name', surname='$query_post_data_surname', address='$query_post_data_address', postcode='$query_post_data_postcode', location='$query_post_data_location', country='$query_post_data_country', dob='$query_post_data_dob', phone_number='$query_post_data_phone_number', drugs='$query_post_data_drugs', date_left='$query_post_data_date_left' WHERE id='$query_post_data_id' "); 

header('Location: ../logged_in.php');
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['notes'])){
$query_post_notes = isset($_POST['notes']) ? $_POST['notes'] : '';
$profile_update_database = mysql_query("UPDATE clients SET notes='$query_post_notes' WHERE id='$query_post_data_id' ");     
   
}else
{
   echo "already submitted you bampot!";
}
?>
