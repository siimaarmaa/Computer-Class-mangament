<?php
session_start();
include('inc/db.inc.php');
include('inc/class.login.php');

$login = new Login();

if($login->isLoggedIn()) {
$order = "SELECT * FROM andmed WHERE kasutajanimi ='".$_SESSION['kasutajanimi']."'";
$result = mysql_query($order);

while($andmed = mysql_fetch_row($result)){
echo "<li>Tere <b>".$_SESSION['kasutajanimi']."</b></li>";
echo "<a href='logoff.php'>Logi välja</a>";
 }
} else
 header('location: index.php');
?>