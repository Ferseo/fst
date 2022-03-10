<?php
include_once '../APIquerys/apiQuerys.php';
$conn = new apiQuerys;
$nombre = $_POST['id'];

//print_r($count);
$return = $conn->deleteUser($nombre);
print_r($return);
?>