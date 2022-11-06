<?php
/* Andemaasi andmed */
$db_host		= 'localhost';
$db_user		= 'smaapoco_antslag';
$db_pass		= '@EuTRR8G}irD';
$db_database	= 'smaapoco_antslagymnaasium'; 
 
/* Seda alt poolt enam ei näppi */
 
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
?>