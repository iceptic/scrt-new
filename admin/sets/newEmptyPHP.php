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

include_once("db_connect.php");

$id = "575";
$query = mysql_query("SELECT * FROM `product` WHERE `product_id` = 575 ORDER BY `product_id` ASC");
$query1 = mysql_fetch_row($query);

$product = mysql_query("SELECT * FROM `product_to_download` WHERE `product_id` = 575 ORDER BY `product_id` ASC");
$product_get = mysql_fetch_object($product);
$product_id = $product_get->download_id;

echo $product_id;


$download = mysql_query("SELECT * FROM `download` WHERE `download_id` = $product_id ORDER BY `download_id` ASC");
$download_get = mysql_fetch_object($product);
echo $product_get->filename;
//$download= mysql_query(SELECT * FROM `download` WHERE `download_id` = 575 ORDER BY `product_id` ASC)

//SELECT * FROM `product` ORDER BY `product_id` ASC


var_dump($query1);