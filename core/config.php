<?php
/* Andemaasi andmed */
$db_host		= 'd112975.mysql.zonevs.eu';
$db_user		= 'd112975sa438978';
$db_pass		= 'O^fm6BsV1TxShhFx&@Yn^7Qki0T2ob4S';
$db_database	= 'd112975sd485354'; 
 
/* Seda alt poolt enam ei näppi */
 
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
?>