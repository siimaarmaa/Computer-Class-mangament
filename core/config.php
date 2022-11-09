<?php
/* Andemaasi andmed */
$db_host		= '';
$db_user		= '';
$db_pass		= '';
$db_database	= '';
 
/* Seda alt poolt enam ei näppi */
 
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
?>