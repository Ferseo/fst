<?php
include_once '../APIquerys/apiQuerys.php';
$conn = new apiQuerys;
$data;
$data[0] = $_POST['tipo_tarea'];
$data[1] = $_POST['traba_tarea'];
$data[2] = $_POST['dia_tarea'];
$data[3] = $_POST['horario_tarea'];
$data[4] = $_POST['lugar_tarea'];
$result = $conn->addTask($data);
print_r($result);
?>