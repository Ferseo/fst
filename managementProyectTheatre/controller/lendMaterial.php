<?php
include_once('../APIquerys/apiQuerys.php');
$conn = new apiQuerys;

//Guardar lo datos en el array $data
$data[0] = $_POST["tipo_materialLend"];
$data[1] = $_POST["per_entiLend"];
$data[2] = $_POST["dia_retirada"];
$data[3] = $_POST["dia_entrega"];
$data[4] = $_POST["estado_material"];
$data[5] = $_POST["observaciones"];
$conn->lendMaterial($data);

//A su vez generar el pdf con los datos de $data






?>