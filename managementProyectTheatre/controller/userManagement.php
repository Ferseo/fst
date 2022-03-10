<?php   
include '../APIquerys/apiQuerys.php';
$conn  = new apiQuerys;
$return = $conn->getUserName();
print_r(json_encode($return));


?>