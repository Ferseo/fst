<?php
include_once '../APIquerys/apiQuerys.php';
$conn = new apiQuerys;
$count = $_POST['count'];

//print_r($count);
$return = $conn->deleteTask($count);
print_r($return);
?>