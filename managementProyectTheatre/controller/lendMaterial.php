<?php
require('../fpdf/fpdf.php');
include_once('../APIquerys/apiQuerys.php');
$conn = new apiQuerys;
$date = $date = date("j-n-Y");
$data[0] = $_POST["tipo_materialLend"];
$data[1] = $_POST["dia_retirada"];
$data[2] = $_POST["dia_entrega"];
$data[3] = $_POST["estado_material"];
$data[4] = $_POST["observaciones"];
$data[5] = $_POST["per_entiLend"];
print_r($data);
//$conn->lendMaterial($data);

/**
 * Generar un pdf con los datos recibidos de js
 */
$pdf = new FPDF();
$pdf->SetLeftMargin(30);
$pdf->SetRightMargin(30);
$pdf->SetTopMargin(20);
$pdf->AddPage();
$pdf->SetFont('Helvetica','B',11);
$pdf->Cell(150,10,"Por la presente, se comunica que desde el Teatro Auditorio Vicar se presta el material '" .$data[0]. "',",0,1,'C');
$pdf->Cell(150,10,"a la persona o entidad '".$data[5]."' el dia ".$data[1].", siendo devuelto el dia ".$data[2].",",0,1,'C');
$pdf->Cell(150,10,"siendo el
estado del material el dia de la retirada ".$data[3].", y conllevando las siguientes",0,1,'C');
$pdf->Cell(150,10,"observaciones:
".$data[4].";",0,1,'C');
$pdf->Output('F', 'C:\Users\sierr\Downloads\prestamo '.$date.'.pdf');

