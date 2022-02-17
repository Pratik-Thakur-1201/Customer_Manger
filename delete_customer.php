<?php include("includes/database.php");?>
<?php
$id=$_GET['id'];
$query="delete from customer where id='$id'";
$mysqli->query($query) or die(mysqli->error.__line__);
header('location:index.php');
exit;


?>

