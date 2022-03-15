<?php
include_once '../APIquerys/apiQuerys.php';
$conn = new apiQuerys;
$count = $_POST['count'];

print_r($count);
$return = $conn->returnedLend($count);
//print_r($return);
?>