<?php 
include_once '../APIquerys/apiQuerys.php';
$conn = new apiQuerys;
$nombre = $_POST['nombre'];
$value = $_POST['value'];
$colunm = $_POST['colunm'];
print_r($nombre);
print_r($value);
print_r($colunm);
$conn->editInputConfiguration($value, $colunm, $nombre);
?>