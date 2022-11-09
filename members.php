<?php include 'core/config.php';?>
<?php
session_start();

if($_SESSION['logged_in'] == true)
{
	echo $_SESSION['username'];
	echo "<br>";
	echo "<a href='logout.php'>Logout</a>";
}
else
{
	header("location: index.php");
}
?>
<html>
<head>
<title>Antsla Gümnaasiumi Arvutikasutamine</title>
<link rel="stylesheet" href="stiil.css">
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
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
		$result = $db->prepare("SELECT * FROM klass");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['klasstund']; ?></td>
		<td><?php echo $row['klasstunniaeg']; ?></td>
		<td><?php echo $row['klassaine']; ?><br> <?php echo $row['klassklass']; ?><br> <?php echo $row['klassopetaja']; ?><br> <a href="editform.php?id=<?php echo $row['id']; ?>"> Lisa/Muuda </a></td>
		<td><?php echo $row['klassaine']; ?><br> <?php echo $row['klassklass']; ?><br> <?php echo $row['klassopetaja']; ?><br> <a href="editform.php?id=<?php echo $row['id']; ?>"> Lisa/Muuda </a></td>
		<td><?php echo $row['klassaine']; ?><br> <?php echo $row['klassklass']; ?><br> <?php echo $row['klassopetaja']; ?><br> <a href="editform.php?id=<?php echo $row['id']; ?>"> Lisa/Muuda </a></td>
		<td><?php echo $row['klassaine']; ?><br> <?php echo $row['klassklass']; ?><br> <?php echo $row['klassopetaja']; ?><br> <a href="editform.php?id=<?php echo $row['id']; ?>"> Lisa/Muuda </a></td>
		<td><?php echo $row['klassaine']; ?><br> <?php echo $row['klassklass']; ?><br> <?php echo $row['klassopetaja']; ?><br> <a href="editform.php?id=<?php echo $row['id']; ?>"> Lisa/Muuda </a></td>
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
		$result = $db->prepare("SELECT * FROM pluss");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['plusstund']; ?></td>
		<td><?php echo $row['plusstunniaeg']; ?></td>
		<td><?php echo $row['plussaine']; ?><br> <?php echo $row['plussklass']; ?><br> <?php echo $row['plussopetaja']; ?><br> <a href="editform.php?id=<?php echo $row['id']; ?>"> Lisa/Muuda </a></td>
		<td><?php echo $row['plussaine']; ?><br> <?php echo $row['plussklass']; ?><br> <?php echo $row['plussopetaja']; ?><br> <a href="editform.php?id=<?php echo $row['id']; ?>"> Lisa/Muuda </a></td>
		<td><?php echo $row['plussaine']; ?><br> <?php echo $row['plussklass']; ?><br> <?php echo $row['plussopetaja']; ?><br> <a href="editform.php?id=<?php echo $row['id']; ?>"> Lisa/Muuda </a></td>
		<td><?php echo $row['plussaine']; ?><br> <?php echo $row['plussklass']; ?><br> <?php echo $row['plussopetaja']; ?><br> <a href="editform.php?id=<?php echo $row['id']; ?>"> Lisa/Muuda </a></td>
		<td><?php echo $row['plussaine']; ?><br> <?php echo $row['plussklass']; ?><br> <?php echo $row['plussopetaja']; ?><br> <a href="editform.php?id=<?php echo $row['id']; ?>"> Lisa/Muuda </a></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
<br>
<div id="footer">
<center>Copyright © 2014 - <?php echo date("Y") ?> Antsla Gümnaasiumi Arvutikasutamine. All rights reserved. Code & Design by <a href="https://www.facebook.com/smaapo">Siim Aarmaa</a></center>
<div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>