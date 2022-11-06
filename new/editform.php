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
<?php
	include('core/config.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM klass WHERE id= :id");
	$result->bindParam(':id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<form action="edit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
Õpetaja<br>
<input type="text" name="klassopetaja" value="<?php echo $row['klassopetaja']; ?>" /><br>
Klass<br>
<input type="text" name="klassklass" value="<?php echo $row['klassklass']; ?>" /><br>
Aine<br>
<input type="text" name="klassaine" value="<?php echo $row['klassaine']; ?>" /><br>
<input type="submit" value="Save" />
</form>
<?php
	}
?>