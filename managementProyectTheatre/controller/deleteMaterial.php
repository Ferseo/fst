<?php
include_once '../APIquerys/apiQuerys.php';
$conn = new apiQuerys;
$count = $_POST['count'];
$option = $_POST['option'];
print_r($count);
print_r($column);
print_r($option);
if($option === "matMontaje"){
    $column = "materialmontaje";
}else{
    $column = $option;
}

$return = $conn->deleteMaterial($count, $column);
//print_r($return);
?>