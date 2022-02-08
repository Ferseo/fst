<?php
include_once '../APIquerys/apiQuerys.php';
$conn = new apiQuerys;
$count = (int)$_POST['count'];
$return = $conn->deleteTask($count);
?>



