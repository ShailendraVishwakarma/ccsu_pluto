<?php
include("config.php")
?>
<?php 
$id = $_POST['id'];

$result = mysqli_query($mysqli, "UPDATE process SET isVerify='1' WHERE id='$id'");

return true;


?>
