<?php
include_once '../APIquerys/apiQuerys.php';
$conn = new apiQuerys;
$data;
$data[0] = $_POST['dni'];
$data[1] = $_POST['nombre'];
$data[2] = $_POST['apellidos'];
$data[3] = $_POST['alias'];
$data[4] = $_POST['password'];
$data[5] = $_POST['puesto'];
$data[6] = $_POST['anio_ingreso'];
$data[7] = $_POST['direccion'];
$data[8] = $_POST['telefono'];
$return = $conn->addNewUser($data);
print_r($return);
?>