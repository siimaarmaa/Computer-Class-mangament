<?php include 'core/config.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Antsla G�mnaasiumi Arvutikasutamine</title>
<link rel="stylesheet" href="stiil.css">
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
Sisse logimiseks <a href="logi.html">kliki siia.</a>
<center>Klass</center>
<table cellspacing="0" cellpadding="2" >
<thead>
	<tr>
		<th>Tund</th>
		<th>Tunniaeg</th>
		<th>Esmasp�ev</th>
		<th>Teisip�ev</th>
		<th>Kolmap�ev</th>
		<th>Neljap�ev</th>
		<th>Reede</th>
	</tr>
</thead>
<tbody>
	<?php		
		$result = $db->prepare("SELECT * FROM klass");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['klasstund']; ?></td>
		<td><?php echo $row['klasstunniaeg']; ?></td>
		<td><?php echo $row['klassaine']; ?><br> <?php echo $row['klassklass']; ?><br> <?php echo $row['klassopetaja']; ?></td>
		<td><?php echo $row['klassaine']; ?><br> <?php echo $row['klassklass']; ?><br> <?php echo $row['klassopetaja']; ?></td>
		<td><?php echo $row['klassaine']; ?><br> <?php echo $row['klassklass']; ?><br> <?php echo $row['klassopetaja']; ?></td>
		<td><?php echo $row['klassaine']; ?><br> <?php echo $row['klassklass']; ?><br> <?php echo $row['klassopetaja']; ?></td>
		<td><?php echo $row['klassaine']; ?><br> <?php echo $row['klassklass']; ?><br> <?php echo $row['klassopetaja']; ?></td>
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
		<th>Esmasp�ev</th>
		<th>Teisip�ev</th>
		<th>Kolmap�ev</th>
		<th>Neljap�ev</th>
		<th>Reede</th>
	</tr>
</thead>
<tbody>
	<?php		
		$result = $db->prepare("SELECT * FROM pluss");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['plusstund']; ?></td>
		<td><?php echo $row['plusstunniaeg']; ?></td>
		<td><?php echo $row['plussaine']; ?><br> <?php echo $row['plussklass']; ?><br> <?php echo $row['plussopetaja']; ?></td>
		<td><?php echo $row['plussaine']; ?><br> <?php echo $row['plussklass']; ?><br> <?php echo $row['plussopetaja']; ?></td>
		<td><?php echo $row['plussaine']; ?><br> <?php echo $row['plussklass']; ?><br> <?php echo $row['plussopetaja']; ?></td>
		<td><?php echo $row['plussaine']; ?><br> <?php echo $row['plussklass']; ?><br> <?php echo $row['plussopetaja']; ?></td>
		<td><?php echo $row['plussaine']; ?><br> <?php echo $row['plussklass']; ?><br> <?php echo $row['plussopetaja']; ?></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
<br>
<div id="footer">
<center>Copyright � 2014 - <?php echo date("Y") ?> Antsla G�mnaasiumi Arvutikasutamine. All rights reserved. Code & Design by <a href="https://www.facebook.com/smaapo">Siim Aarmaa</a></center>
<div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>