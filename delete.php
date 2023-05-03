<?php
include("config.php")
?>
<?php 
$id = $_POST['id'];

$result = mysqli_query($mysqli, "DELETE FROM project WHERE id='$id'");
return true;
?>