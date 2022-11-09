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
// configuration
include('core/config.php');
 
// new data
$klassopetaja = $_POST['klassopetaja'];
$klassklass = $_POST['klassklass'];
$klassaine = $_POST['klassaine'];
$id = $_POST['memids'];
// query
$sql = "UPDATE klass 
        SET klassopetaja=?, klassklass=?, klassaine=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($klassklass,$klassopetaja,$klassaine,$id));
header("location: members.php");
 
?>