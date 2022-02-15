<?php 
include_once('../APIquerys/apiQuerys.php');
$conn = new apiQuerys;
$user = $_POST['user'];
//print($user);
$return = $conn->getCredencial($user);
print_r(json_encode($return));
?>