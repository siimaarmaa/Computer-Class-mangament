<?php 
session_start();
include ('inc/class.login.php');
include('inc/db.inc.php');?>
<html>
<head>
<title>Antsla Gümnaasiumi Arvutikasutamine</title>
<link rel="stylesheet" type="text/css" href="stiil/stiil.css" />
</head>
<body>
<br>
<?php

if(isset($_POST['login'])) {

  $login = new Login();

  if($login->isLoggedIn())
     header('location: sees.php');
  else
   $login->showErrors();
}
$token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));

$login = new Login();

if($login->isLoggedIn()) {
 header('location: sees.php');
}
else
?>
<form class="form-inline" role="form" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="form-group">
&nbsp;&nbsp;<input type="email" name="kasutajanimi" class="form-control" id="exampleInputEmail2" placeholder="Kasutajanimi">
  </div>
  <div class="form-group">
    <input type="password" name="parool" class="form-control" id="exampleInputPassword2" placeholder="Parool">
  </div>
  <button type="submit" name="login" class="btn btn-default">Logi sisse</button>
</form>
<div style="clear:both;"></div>
<center>Klass</center>
<table cellspacing="0" cellpadding="2" >
<thead>
	<tr>
		<th>Tund</th>
		<th>Tunniaeg</th>
		<th>Esmaspäev</th>
		<th>Teisipäev</th>
		<th>Kolmapäev</th>
		<th>Neljapäev</th>
		<th>Reede</th>
	</tr>
</thead>
<tbody>
	<?php		
		$result = $db->prepare("SELECT * FROM tunnid");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['tund']; ?></td>
		<td><?php echo $row['tunniaeg']; ?></td>
		<td><?php echo $row['aine']; ?><br> <?php echo $row['klass']; ?><br> <?php echo $row['opetaja']; ?></td>
		<td><?php echo $row['aine']; ?><br> <?php echo $row['klass']; ?><br> <?php echo $row['opetaja']; ?></td>
		<td><?php echo $row['aine']; ?><br> <?php echo $row['klass']; ?><br> <?php echo $row['opetaja']; ?></td>
		<td><?php echo $row['aine']; ?><br> <?php echo $row['klass']; ?><br> <?php echo $row['opetaja']; ?></td>
		<td><?php echo $row['aine']; ?><br> <?php echo $row['klass']; ?><br> <?php echo $row['opetaja']; ?></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
<p></p>
<br>
<center>Pluss</center>
<table cellspacing="0" cellpadding="2" >
<thead>
	<tr>
		<th>Tund</th>
		<th>Tunniaeg</th>
		<th>Esmaspäev</th>
		<th>Teisipäev</th>
		<th>Kolmapäev</th>
		<th>Neljapäev</th>
		<th>Reede</th>
	</tr>
</thead>
<tbody>
	<?php		
		$result = $db->prepare("SELECT * FROM tunnid");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['tund']; ?></td>
		<td><?php echo $row['tunniaeg']; ?></td>
		<td><?php echo $row['aine']; ?><br> <?php echo $row['klass']; ?><br> <?php echo $row['opetaja']; ?></td>
		<td><?php echo $row['aine']; ?><br> <?php echo $row['klass']; ?><br> <?php echo $row['opetaja']; ?></td>
		<td><?php echo $row['aine']; ?><br> <?php echo $row['klass']; ?><br> <?php echo $row['opetaja']; ?></td>
		<td><?php echo $row['aine']; ?><br> <?php echo $row['klass']; ?><br> <?php echo $row['opetaja']; ?></td>
		<td><?php echo $row['aine']; ?><br> <?php echo $row['klass']; ?><br> <?php echo $row['opetaja']; ?></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
</div>
<br>
<div id="footer">
<center>Copyright © 2014 - <?php echo date("Y") ?> Antsla Gümnaasium Arvutikasutamine. All rights reserved. Code & Design by <a href="https://www.facebook.com/smaapo">Siim Aarmaa</a></center>
<div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>