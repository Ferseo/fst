<?php
include_once '../APIquerys/apiQuerys.php';
$conn = new apiQuerys;
$count = $_POST['count'];
$option = $_POST['option'];
if($option === "matMontaje"){
    $column = "materialmontaje";
}else{
    $column = $option;
}
print_r($count);
print_r($column);
$return = $conn->deleteMaterial($count, $column);
?>