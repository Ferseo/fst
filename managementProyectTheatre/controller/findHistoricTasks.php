<?php
include '../APIquerys/apiQuerys.php';
$conn  = new apiQuerys;
$return = $conn->getHistoricTasks();
print_r(json_encode($return));

?>