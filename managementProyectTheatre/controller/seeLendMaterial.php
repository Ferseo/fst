<?php 
include_once('../APIquerys/apiQuerys.php');
$conn = new apiQuerys;
$return = $conn->getLendMaterial();
print_r(json_encode($return));


?>