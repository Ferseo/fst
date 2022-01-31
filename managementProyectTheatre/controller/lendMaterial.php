<?php
//require('../fpdf/fpdf.php');
include_once('../APIquerys/apiQuerys.php');
$conn = new apiQuerys;

//Guardar lo datos en el array $data
$data[0] = $_POST["tipo_materialLend"];
$data[1] = $_POST["dia_retirada"];
$data[2] = $_POST["dia_entrega"];
$data[3] = $_POST["estado_material"];
$data[4] = $_POST["observaciones"];
$data[5] = $_POST["per_entiLend"];
print_r($data);
$conn->lendMaterial($data);

//A su vez generar el pdf con los datos de $data
/*$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Mi primera página pdf con FPDF!');
$pdf->Output();*/





?>