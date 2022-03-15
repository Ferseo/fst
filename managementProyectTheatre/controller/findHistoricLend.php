<?php
include '../APIquerys/apiQuerys.php';
$conn  = new apiQuerys;
$return = $conn->getHistoricLend();
print_r(json_encode($return));

?>